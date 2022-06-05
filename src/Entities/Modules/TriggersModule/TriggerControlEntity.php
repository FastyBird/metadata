<?php declare(strict_types = 1);

/**
 * TriggerControlEntity.php
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
use Ramsey\Uuid;

/**
 * Trigger control entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class TriggerControlEntity implements ITriggerControlEntity, Entities\IOwner
{

	use Entities\TOwner;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $trigger;

	/** @var string */
	private string $name;

	public function __construct(
		string $id,
		string $trigger,
		string $name,
		?string $owner = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->trigger = Uuid\Uuid::fromString($trigger);
		$this->name = $name;
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
	public function getTrigger(): Uuid\UuidInterface
	{
		return $this->trigger;
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
	public function toArray(): array
	{
		return [
			'id'      => $this->getId()->toString(),
			'trigger' => $this->getTrigger()->toString(),
			'name'    => $this->getName(),
			'owner'   => $this->getOwner() !== null ? $this->getOwner()->toString() : null,
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
