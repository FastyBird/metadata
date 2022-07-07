<?php declare(strict_types = 1);

/**
 * ActionTriggerEntity.php
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

namespace FastyBird\Metadata\Entities\Actions;

use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Trigger action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ActionTriggerEntity implements IActionTriggerEntity
{

	/** @var Types\TriggerActionType */
	private Types\TriggerActionType $action;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $trigger;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $control;

	/** @var string|int|float|bool|null */
	private string|int|bool|null|float $expectedValue;

	/**
	 * @param string $action
	 * @param string $trigger
	 * @param string $control
	 * @param float|bool|int|string|null $expectedValue
	 */
	public function __construct(
		string $action,
		string $trigger,
		string $control,
		float|bool|int|string|null $expectedValue = null
	) {
		$this->action = Types\TriggerActionType::get($action);

		$this->trigger = Uuid\Uuid::fromString($trigger);
		$this->control = Uuid\Uuid::fromString($control);

		$this->expectedValue = $expectedValue;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAction(): Types\TriggerActionType
	{
		return $this->action;
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
	public function getControl(): Uuid\UuidInterface
	{
		return $this->control;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getExpectedValue(): float|bool|int|string|null
	{
		return $this->expectedValue;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return [
			'action'         => $this->getAction()->getValue(),
			'trigger'        => $this->getTrigger()->toString(),
			'control'        => $this->getControl()->toString(),
			'expected_value' => $this->getExpectedValue(),
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
