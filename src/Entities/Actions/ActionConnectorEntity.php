<?php declare(strict_types = 1);

/**
 * ActionConnectorEntity.php
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

use Ramsey\Uuid;

/**
 * Connector action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ActionConnectorEntity extends ActionEntity implements IActionConnectorEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $connector;

	/**
	 * @param string $action
	 * @param string $connector
	 * @param string $control
	 * @param string|int|float|bool|null $expectedValue
	 */
	public function __construct(
		string $action,
		string $connector,
		string $control,
		$expectedValue = null
	) {
		parent::__construct($action, $control, $expectedValue);

		$this->connector = Uuid\Uuid::fromString($connector);
	}

	/**
	 * {@inheritDoc}
	 */
	public function getConnector(): Uuid\UuidInterface
	{
		return $this->connector;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'connector' => $this->getConnector()->toString(),
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
