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
abstract class PropertyEntity implements IPropertyEntity
{

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
	private $invalid;

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
	 * @param string|int|float|null $invalid
	 * @param int|null $numberOfDecimals
	 */
	public function __construct(
		string $id,
		string $type,
		string $identifier,
		?string $name,
		bool $settable,
		bool $queryable,
		string $dataType,
		?string $unit,
		?array $format,
		$invalid,
		?int $numberOfDecimals
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
	}

	/**
	 * {@inheritdoc}
	 */
	public function getId(): Uuid\UuidInterface
	{
		return $this->id;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getType(): Types\PropertyTypeType
	{
		return $this->type;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getIdentifier(): string
	{
		return $this->identifier;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isSettable(): bool
	{
		return $this->settable;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isQueryable(): bool
	{
		return $this->queryable;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDataType(): Types\DataTypeType
	{
		return $this->dataType;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getUnit(): ?string
	{
		return $this->unit;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getFormat(): ?array
	{
		return $this->format;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getInvalid()
	{
		return $this->invalid;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getNumberOfDecimals(): ?int
	{
		return $this->numberOfDecimals;
	}

}
