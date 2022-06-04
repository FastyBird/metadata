<?php declare(strict_types = 1);

/**
 * ConnectorEntity.php
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
 * Connector entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ConnectorEntity implements IConnectorEntity
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

	/** @var bool */
	private bool $enabled;

	public function __construct(
		string $id,
		string $type,
		string $identifier,
		?string $name = null,
		?string $comment = null,
		bool $enabled = false
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->type = $type;
		$this->identifier = $identifier;
		$this->name = $name;
		$this->comment = $comment;
		$this->enabled = $enabled;
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
	public function isEnabled(): bool
	{
		return $this->enabled;
	}

}
