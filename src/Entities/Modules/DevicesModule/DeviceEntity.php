<?php declare(strict_types = 1);

/**
 * DeviceEntity.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           04.06.22
 */

namespace FastyBird\Metadata\Entities\Modules\DevicesModule;

use Nette\Utils;
use Ramsey\Uuid;

/**
 * Device entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class DeviceEntity implements IDeviceEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var string */
	private string $type;

	/** @var string */
	private string $identifier;

	/** @var string|null */
	private ?string $name;

	/** @var string|null */
	private ?string $comment;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $connector;

	/** @var Uuid\UuidInterface[] */
	private array $parents;

	/** @var Uuid\UuidInterface[] */
	private array $children;

	/**
	 * @param string $id
	 * @param string $type
	 * @param string $identifier
	 * @param string $connector
	 * @param string[]|Utils\ArrayHash $parents
	 * @param string[]|Utils\ArrayHash $children
	 * @param string|null $name
	 * @param string|null $comment
	 */
	public function __construct(
		string $id,
		string $type,
		string $identifier,
		string $connector,
		$parents,
		$children,
		?string $name = null,
		?string $comment = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->type = $type;
		$this->identifier = $identifier;
		$this->name = $name;
		$this->comment = $comment;
		$this->connector = Uuid\Uuid::fromString($connector);
		$this->parents = array_map(function (string $item): Uuid\UuidInterface {
			return Uuid\Uuid::fromString($item);
		}, (array) $parents);
		$this->children = array_map(function (string $item): Uuid\UuidInterface {
			return Uuid\Uuid::fromString($item);
		}, (array) $children);
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
	public function getType(): string
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
	public function getComment(): ?string
	{
		return $this->comment;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getConnector(): Uuid\UuidInterface
	{
		return $this->connector;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getParents(): array
	{
		return $this->parents;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getChildren(): array
	{
		return $this->children;
	}

}
