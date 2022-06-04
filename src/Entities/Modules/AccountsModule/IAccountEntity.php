<?php declare(strict_types = 1);

/**
 * IAccountEntity.php
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

use DateTimeInterface;
use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Account entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IAccountEntity extends Entities\IEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getId(): Uuid\UuidInterface;

	/**
	 * @return string
	 */
	public function getFirstName(): string;

	/**
	 * @return string
	 */
	public function getLastName(): string;

	/**
	 * @return string|null
	 */
	public function getMiddleName(): ?string;

	/**
	 * @return string|null
	 */
	public function getEmail(): ?string;

	/**
	 * @return Types\AccountStateType
	 */
	public function getState(): Types\AccountStateType;

	/**
	 * @return string
	 */
	public function getLanguage(): string;

	/**
	 * @return DateTimeInterface|null
	 */
	public function getRegistered(): ?DateTimeInterface;

	/**
	 * @return DateTimeInterface|null
	 */
	public function getLastVisit(): ?DateTimeInterface;

	/**
	 * @return string[]
	 */
	public function getRoles(): array;

}
