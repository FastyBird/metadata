<?php declare(strict_types = 1);

/**
 * IIdentityEntity.php
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

namespace FastyBird\Metadata\Entities\Modules\AccountsModule;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Identity entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IIdentityEntity extends Entities\IEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getId(): Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getAccount(): Uuid\UuidInterface;

	/**
	 * @return Types\IdentityStateType
	 */
	public function getState(): Types\IdentityStateType;

	/**
	 * @return string
	 */
	public function getUid(): string;

	/**
	 * @return string|null
	 */
	public function getHash(): ?string;

}
