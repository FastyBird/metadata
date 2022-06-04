<?php declare(strict_types = 1);

/**
 * AccountEntityFactory.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           31.05.22
 */

namespace FastyBird\Metadata\Entities\Modules\AccountsModule;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Exceptions;
use FastyBird\Metadata\Loaders;
use FastyBird\Metadata\Schemas;
use FastyBird\Metadata\Types;

/**
 * Account entity factory
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class AccountEntityFactory extends Entities\EntityFactory
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
	 * @return IAccountEntity
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function create(string $data, Types\RoutingKeyType $routingKey): IAccountEntity
	{
		if (
			!$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ACCOUNT_ENTITY_CREATED)
			&& !$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ACCOUNT_ENTITY_UPDATED)
			&& !$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ACCOUNT_ENTITY_DELETED)
			&& !$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ACCOUNT_ENTITY_REPORTED)
		) {
			throw new Exceptions\InvalidArgumentException(sprintf('Provided routing key: %s is not valid for this factory', strval($routingKey->getValue())));
		}

		$schema = $this->loader->loadByRoutingKey($routingKey);

		$validated = $this->validator->validate($data, $schema);

		$entity = $this->build(AccountEntity::class, $validated);

		if ($entity instanceof AccountEntity) {
			return $entity;
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

}
