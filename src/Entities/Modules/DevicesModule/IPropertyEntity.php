<?php declare(strict_types = 1);

/**
 * IPropertyEntity.php
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
use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Property entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IPropertyEntity extends Entities\IEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getId(): Uuid\UuidInterface;

	/**
	 * @return Types\PropertyTypeType
	 */
	public function getType(): Types\PropertyTypeType;

	/**
	 * @return string
	 */
	public function getIdentifier(): string;

	/**
	 * @return string|null
	 */
	public function getName(): ?string;

	/**
	 * @return bool
	 */
	public function isSettable(): bool;

	/**
	 * @return bool
	 */
	public function isQueryable(): bool;

	/**
	 * @return Types\DataTypeType
	 */
	public function getDataType(): Types\DataTypeType;

	/**
	 * @return string|null
	 */
	public function getUnit(): ?string;

	/**
	 * @return Array<string>|Array<Array<string|null>>|Array<int|null>|Array<float|null>|null
	 */
	public function getFormat(): ?array;

	/**
	 * @return float|int|string|null
	 */
	public function getInvalid();

	/**
	 * @return int|null
	 */
	public function getNumberOfDecimals(): ?int;

}
