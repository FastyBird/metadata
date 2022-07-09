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
use Nette\Utils;

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
	 * @param string|Array<string, mixed>|Utils\ArrayHash<string> $data
	 *
	 * @return IAccountEntity
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function create(string|array|Utils\ArrayHash $data): IAccountEntity
	{
		if (is_string($data)) {
			$schema = $this->loader->loadByNamespace('schemas/modules/accounts-module', 'entity.account.json');

			$data = $this->validator->validate($data, $schema);

		} elseif (!$data instanceof Utils\ArrayHash) {
			$data = Utils\ArrayHash::from($data);
		}

		$entity = $this->build(AccountEntity::class, $data);

		if ($entity instanceof AccountEntity) {
			return $entity;
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

}
