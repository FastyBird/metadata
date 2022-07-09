<?php declare(strict_types = 1);

/**
 * ConditionEntityFactory.php
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
use Nette\Utils;

/**
 * Condition entity factory
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ConditionEntityFactory extends Entities\EntityFactory
{

	/** @var Loaders\SchemaLoader */
	private Loaders\SchemaLoader $loader;

	/** @var Schemas\Validator */
	private Schemas\Validator $validator;

	public function __construct(
		Loaders\SchemaLoader $loader,
		Schemas\Validator $validator
	) {
		$this->loader = $loader;
		$this->validator = $validator;
	}

	/**
	 * @param string|Array<string, mixed>|Utils\ArrayHash<string> $data
	 *
	 * @return IConditionEntity
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function create(string|array|Utils\ArrayHash $data): IConditionEntity
	{
		if (is_string($data)) {
			$schema = $this->loader->loadByNamespace('schemas/modules/triggers-module', 'entity.condition.json');

			$data = $this->validator->validate($data, $schema);

		} elseif (!$data instanceof Utils\ArrayHash) {
			$data = Utils\ArrayHash::from($data);
		}

		$type = Types\TriggerConditionTypeType::get($data->offsetGet('type'));

		if ($type->equalsValue(Types\TriggerConditionTypeType::TYPE_DEVICE_PROPERTY)) {
			$entity = $this->build(DevicePropertyConditionEntity::class, $data);

		} elseif ($type->equalsValue(Types\TriggerConditionTypeType::TYPE_CHANNEL_PROPERTY)) {
			$entity = $this->build(ChannelPropertyConditionEntity::class, $data);

		} elseif ($type->equalsValue(Types\TriggerConditionTypeType::TYPE_TIME)) {
			$entity = $this->build(TimeConditionEntity::class, $data);

		} elseif ($type->equalsValue(Types\TriggerConditionTypeType::TYPE_DATE)) {
			$entity = $this->build(DateConditionEntity::class, $data);

		} else {
			throw new Exceptions\InvalidArgumentException('Provided data and routing key is for unsupported condition type');
		}

		if ($entity instanceof ConditionEntity) {
			return $entity;
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

}
