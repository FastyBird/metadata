<?php declare(strict_types = 1);

/**
 * TimeConditionEntity.php
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

use DateTimeInterface;
use FastyBird\Metadata\Exceptions;
use Nette\Utils;

/**
 * Time condition entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class TimeConditionEntity extends ConditionEntity implements ITimeConditionEntity
{

	/** @var DateTimeInterface */
	private DateTimeInterface $time;

	/** @var int[] */
	private array $days;

	/**
	 * @param string $id
	 * @param string $trigger
	 * @param string $type
	 * @param bool $enabled
	 * @param string $time
	 * @param int[] $days
	 * @param bool|null $isFulfilled
	 */
	public function __construct(
		string $id,
		string $trigger,
		string $type,
		bool $enabled,
		string $time,
		array $days,
		?bool $isFulfilled = null
	) {
		parent::__construct($id, $trigger, $type, $enabled, $isFulfilled);

		$time = Utils\DateTime::createFromFormat(DateTimeInterface::ATOM, $time);

		if ($time instanceof DateTimeInterface) {
			$this->time = $time;

		} else {
			throw new Exceptions\InvalidArgumentException('Provided time attribute is not valid');
		}

		$this->days = $days;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getTime(): DateTimeInterface
	{
		return $this->time;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDays(): array
	{
		return $this->days;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'time' => $this->getTime()->format(DateTimeInterface::ATOM),
			'days' => $this->getDays(),
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
