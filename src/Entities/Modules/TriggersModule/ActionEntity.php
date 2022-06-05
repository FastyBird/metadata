<?php declare(strict_types = 1);

/**
 * ActionEntity.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           01.06.22
 */

namespace FastyBird\Metadata\Entities\Modules\TriggersModule;

use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class ActionEntity implements IActionEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $trigger;

	/** @var Types\TriggerActionTypeType */
	private Types\TriggerActionTypeType $type;

	/** @var bool */
	private bool $enabled;

	/** @var bool|null */
	private ?bool $triggered;

	public function __construct(
		string $id,
		string $trigger,
		string $type,
		bool $enabled,
		?bool $isTriggered = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->trigger = Uuid\Uuid::fromString($trigger);
		$this->type = Types\TriggerActionTypeType::get($type);
		$this->enabled = $enabled;
		$this->triggered = $isTriggered;
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
	public function getType(): Types\TriggerActionTypeType
	{
		return $this->type;
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
			'trigger'      => $this->getTrigger()->toString(),
			'type'         => $this->getType()->getValue(),
			'enabled'      => $this->isEnabled(),
			'is_triggered' => $this->isTriggered(),
		];
	}

}
