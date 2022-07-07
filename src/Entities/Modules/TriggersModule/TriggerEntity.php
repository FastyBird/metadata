<?php declare(strict_types = 1);

/**
 * TriggerEntity.php
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

namespace FastyBird\Metadata\Entities\Modules\TriggersModule;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Trigger entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class TriggerEntity implements ITriggerEntity, Entities\IOwner
{

	use Entities\TOwner;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var Types\TriggerTypeType */
	private Types\TriggerTypeType $type;

	/** @var string */
	private string $name;

	/** @var string|null */
	private ?string $comment;

	/** @var bool */
	private bool $enabled;

	/** @var bool|null */
	private ?bool $triggered;

	public function __construct(
		string $id,
		string $type,
		string $name,
		bool $enabled,
		?string $comment = null,
		?bool $isTriggered = null,
		?string $owner = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->type = Types\TriggerTypeType::get($type);
		$this->name = $name;
		$this->comment = $comment;
		$this->enabled = $enabled;
		$this->triggered = $isTriggered;
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
	public function getType(): Types\TriggerTypeType
	{
		return $this->type;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getName(): string
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
	public function isEnabled(): bool
	{
		return $this->enabled;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isTriggered(): ?bool
	{
		return $this->triggered;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return [
			'id'           => $this->getId()->toString(),
			'type'         => $this->getType()->getValue(),
			'name'         => $this->getName(),
			'comment'      => $this->getComment(),
			'enabled'      => $this->isEnabled(),
			'is_triggered' => $this->isTriggered(),
			'owner'        => $this->getOwner()?->toString(),
		];
	}

}
