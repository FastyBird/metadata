<?php declare(strict_types = 1);

/**
 * ConditionEntity.php
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

use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Condition entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class ConditionEntity implements IConditionEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $trigger;

	/** @var Types\TriggerConditionTypeType */
	private Types\TriggerConditionTypeType $type;

	/** @var bool */
	private bool $enabled;

	/** @var bool|null */
	private ?bool $fulfilled;

	public function __construct(
		string $id,
		string $trigger,
		string $type,
		bool $enabled,
		?bool $isFulfilled = null
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->trigger = Uuid\Uuid::fromString($trigger);
		$this->type = Types\TriggerConditionTypeType::get($type);
		$this->enabled = $enabled;
		$this->fulfilled = $isFulfilled;
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
	public function getTrigger(): Uuid\UuidInterface
	{
		return $this->trigger;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getType(): Types\TriggerConditionTypeType
	{
		return $this->type;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isEnabled(): bool
	{
		return $this->enabled;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isFulfilled(): ?bool
	{
		return $this->fulfilled;
	}

	/**
	 * {@inheritdoc}
	 */
	public function toArray(): array
	{
		return [
			'id'           => $this->getId()->toString(),
			'trigger'      => $this->getTrigger()->toString(),
			'type'         => $this->getType()->getValue(),
			'enabled'      => $this->isEnabled(),
			'is_fulfilled' => $this->isFulfilled(),
		];
	}

}
