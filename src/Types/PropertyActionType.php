<?php declare(strict_types = 1);

/**
 * PropertyActionType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.22.0
 *
 * @date           08.01.22
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Property action
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class PropertyActionType extends Consistence\Enum\Enum
{

	/**
	 * Define actions
	 */
	public const ACTION_SET = 'set';
	public const ACTION_GET = 'get';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
