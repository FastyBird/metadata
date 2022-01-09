<?php declare(strict_types = 1);

/**
 * PropertyTypeType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.14.0
 *
 * @date           02.01.22
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Property type
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class PropertyTypeType extends Consistence\Enum\Enum
{

	/**
	 * Define states
	 */
	public const TYPE_STATIC = 'static';
	public const TYPE_DYNAMIC = 'dynamic';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
