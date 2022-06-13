<?php declare(strict_types = 1);

/**
 * ActionEntityFactory.php
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

namespace FastyBird\Metadata\Entities\Modules\DevicesModule;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Exceptions;
use FastyBird\Metadata\Loaders;
use FastyBird\Metadata\Schemas;
use FastyBird\Metadata\Types;

/**
 * Channel property entity factory
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ChannelPropertyEntityFactory extends Entities\EntityFactory
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
	 * @param string $data
	 *
	 * @return IPropertyEntity
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function create(string $data): IPropertyEntity
	{
		$schema = $this->loader->loadByNamespace('schemas/modules/devices-module', 'entity.channel.property.json');

		$validated = $this->validator->validate($data, $schema);

		$type = Types\PropertyTypeType::get($validated->offsetGet('type'));

		if ($type->equalsValue(Types\PropertyTypeType::TYPE_DYNAMIC)) {
			$entity = $this->build(ChannelDynamicPropertyEntity::class, $validated);

		} elseif ($type->equalsValue(Types\PropertyTypeType::TYPE_STATIC)) {
			$entity = $this->build(ChannelStaticPropertyEntity::class, $validated);

		} elseif ($type->equalsValue(Types\PropertyTypeType::TYPE_MAPPED)) {
			$entity = $this->build(ChannelMappedPropertyEntity::class, $validated);

		} else {
			throw new Exceptions\InvalidArgumentException('Provided data and routing key is for unsupported property type');
		}

		if ($entity instanceof IPropertyEntity) {
			return $entity;
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

}
