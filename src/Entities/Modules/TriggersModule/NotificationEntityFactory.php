<?php declare(strict_types = 1);

/**
 * NotificationEntityFactory.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           02.06.22
 */

namespace FastyBird\Metadata\Entities\Modules\TriggersModule;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Exceptions;
use FastyBird\Metadata\Loaders;
use FastyBird\Metadata\Schemas;
use FastyBird\Metadata\Types;
use IPub\Phone;

/**
 * Notification entity factory
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class NotificationEntityFactory extends Entities\EntityFactory
{

	/** @var Loaders\SchemaLoader */
	private Loaders\SchemaLoader $loader;

	/** @var Schemas\Validator */
	private Schemas\Validator $validator;

	/** @var Phone\Phone */
	private Phone\Phone $phone;

	public function __construct(
		Loaders\SchemaLoader $loader,
		Schemas\Validator $validator,
		Phone\Phone $phone
	) {
		$this->loader = $loader;
		$this->validator = $validator;

		$this->phone = $phone;
	}

	/**
	 * @param string $data
	 *
	 * @return INotificationEntity
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function create(string $data): INotificationEntity
	{
		$schema = $this->loader->loadByNamespace('schemas/modules/triggers-module', 'entity.notification.json');

		$validated = $this->validator->validate($data, $schema);

		$type = Types\TriggerNotificationTypeType::get($validated->offsetGet('type'));

		if ($type->equalsValue(Types\TriggerNotificationTypeType::TYPE_EMAIL)) {
			$entity = $this->build(EmailNotificationEntity::class, $validated);

		} elseif ($type->equalsValue(Types\TriggerNotificationTypeType::TYPE_SMS)) {
			$phone = null;

			if ($validated->offsetExists('phone')) {
				$phone = $validated->offsetGet('phone');

				$validated->offsetUnset('phone');
			}

			$entity = $this->build(SmsNotificationEntity::class, $validated);

			if ($entity instanceof SmsNotificationEntity) {
				if ($phone !== null) {
					$entity->setPhone($this->phone->parse(strval($phone)));

				} else {
					throw new Exceptions\InvalidStateException('Entity could not be created');
				}
			}
		} else {
			throw new Exceptions\InvalidArgumentException('Provided data and routing key is for unsupported notification type');
		}

		if ($entity instanceof NotificationEntity) {
			return $entity;
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

}
