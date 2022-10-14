<?php declare(strict_types = 1);

/**
 * ActionChannelProperty.php
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
use Ramsey\Uuid;
use function array_merge;

/**
 * Channel property action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ActionChannelProperty extends ActionProperty
{

	private Uuid\UuidInterface $device;

	private Uuid\UuidInterface $channel;

	public function __construct(
		string $action,
		string $device,
		string $channel,
		string $property,
		float|bool|int|string|null $expectedValue = null,
	)
	{
		parent::__construct($action, $property, $expectedValue);

		$this->device = Uuid\Uuid::fromString($device);
		$this->channel = Uuid\Uuid::fromString($channel);
	}

	public function getDevice(): Uuid\UuidInterface
	{
		return $this->device;
	}

	public function getChannel(): Uuid\UuidInterface
	{
		return $this->channel;
	}

	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'device' => $this->getDevice()->toString(),
			'channel' => $this->getChannel()->toString(),
		]);
	}

	/**
	 * @return Array<string, mixed>
	 *
	 * @throws Exceptions\InvalidState
	 */
	public function __serialize(): array
	{
		return $this->toArray();
	}

}
