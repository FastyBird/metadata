<?php declare(strict_types = 1);

/**
 * ChannelEntity.php
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

use Ramsey\Uuid;

/**
 * Channel entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ChannelEntity implements IChannelEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var string */
	private string $identifier;

	/** @var string|null */
	private ?string $name;

	/** @var string|null */
	private ?string $comment;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $device;

	public function __construct(
		string $id,
		string $identifier,
		string $device,
		?string $name = null,
		?string $comment = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->identifier = $identifier;
		$this->name = $name;
		$this->comment = $comment;
		$this->device = Uuid\Uuid::fromString($device);
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
	public function getDevice(): Uuid\UuidInterface
	{
		return $this->device;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return [
			'id'         => $this->getId()->toString(),
			'identifier' => $this->getIdentifier(),
			'name'       => $this->getName(),
			'comment'    => $this->getComment(),
			'device'     => $this->getDevice()->toString(),
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
