<?php declare(strict_types = 1);

/**
 * PropertyEntity.php
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
 * Property entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class PropertyEntity implements IPropertyEntity, Entities\IOwner
{

	use Entities\TOwner;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var Types\PropertyTypeType */
	private Types\PropertyTypeType $type;

	/** @var string */
	private string $identifier;

	/** @var string|null */
	private ?string $name;

	/** @var bool */
	private bool $settable;

	/** @var bool */
	private bool $queryable;

	/** @var Types\DataTypeType */
	private Types\DataTypeType $dataType;

	/** @var string|null */
	private ?string $unit;

	/** @var Array<string>|Array<Array<string|null>>|Array<int|null>|Array<float|null>|null */
	private ?array $format;

	/** @var string|int|float|null */
	private string|int|null|float $invalid;

	/** @var int|null */
	private ?int $numberOfDecimals;

	/**
	 * @param string $id
	 * @param string $type
	 * @param string $identifier
	 * @param string|null $name
	 * @param bool $settable
	 * @param bool $queryable
	 * @param string $dataType
	 * @param string|null $unit
	 * @param Array<string>|Array<Array<string|null>>|Array<int|null>|Array<float|null>|null $format
	 * @param float|int|string|null $invalid
	 * @param int|null $numberOfDecimals
	 * @param string|null $owner
	 */
	public function __construct(
		string $id,
		string $type,
		string $identifier,
		?string $name,
		bool $settable,
		bool $queryable,
		string $dataType,
		?string $unit = null,
		?array $format = null,
		float|int|string|null $invalid = null,
		?int $numberOfDecimals = null,
		?string $owner = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->type = Types\PropertyTypeType::get($type);
		$this->identifier = $identifier;
		$this->name = $name;
		$this->settable = $settable;
		$this->queryable = $queryable;
		$this->dataType = Types\DataTypeType::get($dataType);
		$this->unit = $unit;
		$this->format = $format;
		$this->invalid = $invalid;
		$this->numberOfDecimals = $numberOfDecimals;
		$this->owner = $owner !== null ? Uuid\Uuid::fromString($owner) : null;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getId(): Uuid\UuidInterface
	{
		return $this->id;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getType(): Types\PropertyTypeType
	{
		return $this->type;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getIdentifier(): string
	{
		return $this->identifier;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isSettable(): bool
	{
		return $this->settable;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isQueryable(): bool
	{
		return $this->queryable;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDataType(): Types\DataTypeType
	{
		return $this->dataType;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getUnit(): ?string
	{
		return $this->unit;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getFormat(): ?array
	{
		return $this->format;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getInvalid(): float|int|string|null
	{
		return $this->invalid;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getNumberOfDecimals(): ?int
	{
		return $this->numberOfDecimals;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return [
			'id'                 => $this->getId()->toString(),
			'type'               => $this->getType()->getValue(),
			'identifier'         => $this->getIdentifier(),
			'name'               => $this->getName(),
			'queryable'          => $this->isQueryable(),
			'settable'           => $this->isSettable(),
			'data_type'          => $this->getDataType()->getValue(),
			'unit'               => $this->getUnit(),
			'format'             => $this->getFormat(),
			'invalid'            => $this->getInvalid(),
			'number_of_decimals' => $this->getNumberOfDecimals(),
			'owner'              => $this->getOwner()?->toString(),
		];
	}

	/**
	 * @return Array<string, mixed>
	 */
	public function __serialize(): array
	{
		return $this->toArray();
	}

}
