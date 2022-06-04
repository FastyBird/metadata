<?php declare(strict_types = 1);

/**
 * ActionDevicePropertyEntityFactory.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           01.06.22
 */

namespace FastyBird\Metadata\Entities\Actions;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Exceptions;
use FastyBird\Metadata\Loaders;
use FastyBird\Metadata\Schemas;
use FastyBird\Metadata\Types;

/**
 * Device property action entity factory
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ActionDevicePropertyEntityFactory extends Entities\EntityFactory
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
	 * @return IActionDevicePropertyEntity
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function create(string $data): IActionDevicePropertyEntity
	{
		$schema = $this->loader->loadByRoutingKey(Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ACTION));

		$validated = $this->validator->validate($data, $schema);

		$entity = $this->build(ActionDevicePropertyEntity::class, $validated);

		if ($entity instanceof ActionDevicePropertyEntity) {
			return $entity;
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

}
