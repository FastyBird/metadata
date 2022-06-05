<?php declare(strict_types = 1);

/**
 * AutomaticTriggerEntity.php
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

/**
 * Automatic  trigger entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class AutomaticTriggerEntity extends TriggerEntity implements IAutomaticTriggerEntity
{

	/** @var bool|null */
	private ?bool $fulfilled;

	public function __construct(
		string $id,
		string $type,
		string $name,
		bool $enabled,
		?string $comment = null,
		?bool $isTriggered = null,
		?bool $isFulfilled = null
	) {
		parent::__construct($id, $type, $name, $enabled, $comment, $isTriggered);

		$this->fulfilled = $isFulfilled;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isFulfilled(): ?bool
	{
		return $this->fulfilled;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'is_fulfilled' => $this->isFulfilled(),
		]);
	}

	/**
	 * @return Array<string, mixed>
	 */
	public function __serialize(): array
	{
		return $this->toArray();
	}

}
