<?php declare(strict_types = 1);

/**
 * ChannelCategory.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Entities
 * @since          1.0.0
 *
 * @date           09.04.23
 */

namespace FastyBird\Library\Metadata\Types;

use Consistence;
use function strval;

/**
 * Device channel category
 *
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ChannelCategory extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const CATEGORY_GENERIC = 'generic';

	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
