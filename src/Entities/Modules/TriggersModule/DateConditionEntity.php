<?php declare(strict_types = 1);

/**
 * DateConditionEntity.php
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
 * Date condition entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class DateConditionEntity extends ConditionEntity implements IDateConditionEntity
{

	/** @var DateTimeInterface */
	private DateTimeInterface $date;

	public function __construct(
		string $id,
		string $trigger,
		string $type,
		bool $enabled,
		string $date,
		?bool $isFulfilled = null
	) {
		parent::__construct($id, $trigger, $type, $enabled, $isFulfilled);

		$date = Utils\DateTime::createFromFormat(DateTimeInterface::ATOM, $date);

		if ($date instanceof DateTimeInterface) {
			$this->date = $date;

		} else {
			throw new Exceptions\InvalidArgumentException('Provided time attribute is not valid');
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDate(): DateTimeInterface
	{
		return $this->date;
	}

}
