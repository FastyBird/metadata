<?php declare(strict_types = 1);

/**
 * ChannelControlEntity.php
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

namespace FastyBird\Metadata\Entities\Modules\DevicesModule;

use Ramsey\Uuid;

/**
 * Channel control entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ChannelControlEntity extends ControlEntity implements IChannelControlEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $channel;

	public function __construct(
		string $id,
		string $channel,
		string $name
	) {
		parent::__construct($id, $name);

		$this->channel = Uuid\Uuid::fromString($channel);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getChannel(): Uuid\UuidInterface
	{
		return $this->channel;
	}

	/**
	 * {@inheritdoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'channel' => $this->getChannel()->toString(),
		]);
	}

}
