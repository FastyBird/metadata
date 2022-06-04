<?php declare(strict_types = 1);

/**
 * RoleEntity.php
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
use Ramsey\Uuid;

/**
 * Role entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IRoleEntity extends Entities\IEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getId(): Uuid\UuidInterface;

	/**
	 * @return string
	 */
	public function getName(): string;

	/**
	 * @return string
	 */
	public function getDescription(): string;

	/**
	 * @return bool
	 */
	public function isAnonymous(): bool;

	/**
	 * @return bool
	 */
	public function isAuthenticated(): bool;

	/**
	 * @return bool
	 */
	public function isAdministrator(): bool;

	/**
	 * @return Uuid\UuidInterface|null
	 */
	public function getParent(): ?Uuid\UuidInterface;

}
