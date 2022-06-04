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
	private ?bool $isFulfilled;

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

		$this->isFulfilled = $isFulfilled;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isFulfilled(): ?bool
	{
		return $this->isFulfilled;
	}

}
