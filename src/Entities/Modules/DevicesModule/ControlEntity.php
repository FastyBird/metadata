<?php declare(strict_types = 1);

/**
 * ControlEntity.php
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
 * Control entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class ControlEntity implements IControlEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $id;

	/** @var string */
	private string $name;

	public function __construct(
		string $id,
		string $name
	) {
		$this->id = Uuid\Uuid::fromString($id);
		$this->name = $name;
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
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * {@inheritdoc}
	 */
	public function toArray(): array
	{
		return [
			'id'   => $this->getId()->toString(),
			'name' => $this->getName(),
		];
	}

}
