<?php declare(strict_types = 1);

/**
 * DummyAction.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Entities
 * @since          1.0.0
 *
 * @date           12.11.23
 */

namespace FastyBird\Library\Metadata\Entities\TriggersModule;

use FastyBird\Library\Bootstrap\ObjectMapper as BootstrapObjectMapper;
use FastyBird\Library\Metadata\Types;
use Orisai\ObjectMapper;
use Ramsey\Uuid;
use function array_merge;

/**
 * Dummy action entity
 *
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class DummyAction extends Action
{

	public function __construct(
		Uuid\UuidInterface $id,
		Uuid\UuidInterface $trigger,
		Types\TriggerActionType $type,
		bool $enabled,
		#[BootstrapObjectMapper\Rules\UuidValue()]
		#[ObjectMapper\Modifiers\FieldName('do_item')]
		private readonly Uuid\UuidInterface $doItem,
		#[ObjectMapper\Rules\AnyOf([
			new ObjectMapper\Rules\BoolValue(),
			new ObjectMapper\Rules\StringValue(notEmpty: true),
		])]
		private readonly string|bool $value,
		bool|null $isTriggered = null,
		Uuid\UuidInterface|null $owner = null,
	)
	{
		parent::__construct($id, $trigger, $type, $enabled, $isTriggered, $owner);
	}

	public function getDoItem(): Uuid\UuidInterface
	{
		return $this->doItem;
	}

	public function getValue(): string|bool
	{
		return $this->value;
	}

	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'do_item' => $this->getDoItem()->toString(),
			'value' => $this->getValue(),
		]);
	}

	/**
	 * @return array<string, mixed>
	 */
	public function __serialize(): array
	{
		return $this->toArray();
	}

}
