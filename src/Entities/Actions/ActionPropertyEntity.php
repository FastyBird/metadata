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
	protected string|int|bool|null|float $expectedValue;

	/**
	 * @param string $action
	 * @param string $property
	 * @param float|bool|int|string|null $expectedValue
	 */
	public function __construct(
		string $action,
		string $property,
		float|bool|int|string|null $expectedValue = null
	) {
		$this->action = Types\PropertyActionType::get($action);

		$this->property = Uuid\Uuid::fromString($property);

		$this->expectedValue = $expectedValue;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAction(): Types\PropertyActionType
	{
		return $this->action;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getProperty(): Uuid\UuidInterface
	{
		return $this->property;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getExpectedValue(): float|bool|int|string|null
	{
		if (!$this->getAction()->equalsValue(Types\PropertyActionType::ACTION_SET)) {
			throw new Exceptions\InvalidStateException(
				sprintf('Expected value is available only for action: %s', Types\PropertyActionType::ACTION_SET)
			);
		}

		return $this->expectedValue;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		$data = [
			'action'   => $this->getAction()->getValue(),
			'property' => $this->getProperty()->toString(),
		];

		if ($this->getAction()->equalsValue(Types\PropertyActionType::ACTION_SET)) {
			$data = array_merge($data, [
				'expected_value' => $this->getExpectedValue(),
			]);
		}

		return $data;
	}

}
