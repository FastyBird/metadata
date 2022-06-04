<?php declare(strict_types = 1);

/**
 * ITimeConditionEntity.php
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

/**
 * Time condition entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface ITimeConditionEntity extends IConditionEntity
{

	/**
	 * @return DateTimeInterface
	 */
	public function getTime(): DateTimeInterface;

	/**
	 * @return int[]
	 */
	public function getDays(): array;

}
