<?php declare(strict_types = 1);

/**
 * IEmailEntity.php
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
 * Email entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IEmailEntity extends Entities\IEntity
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
	 * @return string
	 */
	public function getAddress(): string;

	/**
	 * @return bool
	 */
	public function isDefault(): bool;

	/**
	 * @return bool
	 */
	public function isVerified(): bool;

	/**
	 * @return bool
	 */
	public function isPrivate(): bool;

	/**
	 * @return bool
	 */
	public function isPublic(): bool;

}
