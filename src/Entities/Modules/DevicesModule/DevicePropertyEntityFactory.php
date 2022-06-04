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
 * Device property entity factory
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class DevicePropertyEntityFactory extends Entities\EntityFactory
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
	 * @param Types\RoutingKeyType $routingKey
	 *
	 * @return IPropertyEntity
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function create(string $data, Types\RoutingKeyType $routingKey): IPropertyEntity
	{
		if (
			!$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ENTITY_CREATED)
			&& !$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ENTITY_UPDATED)
			&& !$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ENTITY_DELETED)
			&& !$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ENTITY_REPORTED)
		) {
			throw new Exceptions\InvalidArgumentException(sprintf('Provided routing key: %s is not valid for this factory', strval($routingKey->getValue())));
		}

		$schema = $this->loader->loadByRoutingKey($routingKey);

		$validated = $this->validator->validate($data, $schema);

		$type = Types\PropertyTypeType::get($validated->offsetGet('type'));

		if ($type->equalsValue(Types\PropertyTypeType::TYPE_DYNAMIC)) {
			$entity = $this->build(DeviceDynamicPropertyEntity::class, $validated);

		} elseif ($type->equalsValue(Types\PropertyTypeType::TYPE_STATIC)) {
			$entity = $this->build(DeviceStaticPropertyEntity::class, $validated);

		} elseif ($type->equalsValue(Types\PropertyTypeType::TYPE_MAPPED)) {
			$entity = $this->build(DeviceMappedPropertyEntity::class, $validated);

		} else {
			throw new Exceptions\InvalidArgumentException('Provided data and routing key is for unsupported property type');
		}

		if ($entity instanceof IPropertyEntity) {
			return $entity;
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

}
