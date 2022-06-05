<?php declare(strict_types = 1);

/**
 * DeviceAttributeEntity.php
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

use Ramsey\Uuid;

/**
 * Device attribute entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class DeviceAttributeEntity implements IDeviceAttributeEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $device;

	/** @var string */
	private string $identifier;

	/** @var string|null */
	private ?string $name;

	/** @var string|null */
	private ?string $content;

	public function __construct(
		string $id,
		string $device,
		string $identifier,
		?string $name,
		?string $content
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->device = Uuid\Uuid::fromString($device);
		$this->identifier = $identifier;
		$this->name = $name;
		$this->content = $content;
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
	public function getDevice(): Uuid\UuidInterface
	{
		return $this->device;
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
	public function getContent(): ?string
	{
		return $this->content;
	}

	/**
	 * {@inheritdoc}
	 */
	public function toArray(): array
	{
		return [
			'id'         => $this->getId()->toString(),
			'device'     => $this->getDevice()->toString(),
			'identifier' => $this->getIdentifier(),
			'name'       => $this->getName(),
			'content'    => $this->getContent(),
		];
	}

}
