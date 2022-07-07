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

use FastyBird\Metadata\Entities;
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
final class DeviceEntity implements IDeviceEntity, Entities\IOwner
{

	use Entities\TOwner;

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
	 * @param string[]|Utils\ArrayHash<string> $parents
	 * @param string[]|Utils\ArrayHash<string> $children
	 * @param string|null $name
	 * @param string|null $comment
	 * @param string|null $owner
	 */
	public function __construct(
		string $id,
		string $type,
		string $identifier,
		string $connector,
		array|Utils\ArrayHash $parents,
		array|Utils\ArrayHash $children,
		?string $name = null,
		?string $comment = null,
		?string $owner = null
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
	public function getType(): string
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
	public function getComment(): ?string
	{
		return $this->comment;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getConnector(): Uuid\UuidInterface
	{
		return $this->connector;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getParents(): array
	{
		return $this->parents;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getChildren(): array
	{
		return $this->children;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return [
			'id'         => $this->getId()->toString(),
			'type'       => $this->getType(),
			'identifier' => $this->getIdentifier(),
			'name'       => $this->getName(),
			'comment'    => $this->getComment(),
			'connector'  => $this->getConnector()->toString(),
			'parents'    => array_map(function (Uuid\UuidInterface $parent): string {
				return $parent->toString();
			}, $this->getParents()),
			'children'   => array_map(function (Uuid\UuidInterface $child): string {
				return $child->toString();
			}, $this->getChildren()),
			'owner'      => $this->getOwner()?->toString(),
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
