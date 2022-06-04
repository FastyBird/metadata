<?php declare(strict_types = 1);

/**
 * IActionEntity.php
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

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Action entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IActionEntity extends Entities\IEntity
{

	/**
	 * @return Types\ControlActionType
	 */
	public function getAction(): Types\ControlActionType;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getControl(): Uuid\UuidInterface;

	/**
	 * @return bool|float|int|string|null
	 */
	public function getExpectedValue();

}
