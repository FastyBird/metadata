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

namespace FastyBird\Metadata\Entities\Actions;

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

	/** @var Types\ControlActionType */
	protected Types\ControlActionType $action;

	/** @var Uuid\UuidInterface */
	protected Uuid\UuidInterface $control;

	/** @var string|int|float|bool|null */
	protected $expectedValue;

	/**
	 * @param string $action
	 * @param string $control
	 * @param string|int|float|bool|null $expectedValue
	 */
	public function __construct(
		string $action,
		string $control,
		$expectedValue = null
	) {
		$this->action = Types\ControlActionType::get($action);

		$this->control = Uuid\Uuid::fromString($control);

		$this->expectedValue = $expectedValue;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAction(): Types\ControlActionType
	{
		return $this->action;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getControl(): Uuid\UuidInterface
	{
		return $this->control;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getExpectedValue()
	{
		return $this->expectedValue;
	}

}
