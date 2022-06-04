<?php declare(strict_types = 1);

/**
 * ActionPropertyEntity.php
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

use FastyBird\Metadata\Exceptions;
use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Property action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class ActionPropertyEntity implements IActionPropertyEntity
{

	/** @var Types\PropertyActionType */
	protected Types\PropertyActionType $action;

	/** @var Uuid\UuidInterface */
	protected Uuid\UuidInterface $property;

	/** @var string|int|float|bool|null */
	protected $expectedValue;

	/** @var string|int|float|bool|null */
	protected $actualValue;

	/** @var bool */
	protected bool $pending;

	/**
	 * @param string $action
	 * @param string $property
	 * @param string|int|float|bool|null $expectedValue
	 * @param string|int|float|bool|null $actualValue
	 * @param bool $pending
	 */
	public function __construct(
		string $action,
		string $property,
		$expectedValue = null,
		$actualValue = null,
		bool $pending = false
	) {
		$this->action = Types\PropertyActionType::get($action);

		$this->property = Uuid\Uuid::fromString($property);

		$this->expectedValue = $expectedValue;
		$this->actualValue = $actualValue;
		$this->pending = $pending;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAction(): Types\PropertyActionType
	{
		return $this->action;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getProperty(): Uuid\UuidInterface
	{
		return $this->property;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getExpectedValue()
	{
		if (!$this->action->equalsValue(Types\PropertyActionType::ACTION_SET)) {
			throw new Exceptions\InvalidStateException(
				sprintf('Expected value is available only for action: %s', Types\PropertyActionType::ACTION_SET)
			);
		}

		return $this->expectedValue;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getActualValue()
	{
		if (!$this->action->equalsValue(Types\PropertyActionType::ACTION_REPORT)) {
			throw new Exceptions\InvalidStateException(
				sprintf('Expected value is available only for action: %s', Types\PropertyActionType::ACTION_SET)
			);
		}

		return $this->actualValue;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isPending(): bool
	{
		if (!$this->action->equalsValue(Types\PropertyActionType::ACTION_REPORT)) {
			throw new Exceptions\InvalidStateException(
				sprintf('Expected value is available only for action: %s', Types\PropertyActionType::ACTION_SET)
			);
		}

		return $this->pending;
	}

}
