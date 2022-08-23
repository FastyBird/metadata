<?php declare(strict_types = 1);

/**
 * ChannelPropertyIdentifierType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.75.0
 *
 * @date           23.08.22
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Channel property identifier types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ChannelPropertyIdentifierType extends Consistence\Enum\Enum
{

	/**
	 * Define device properties identifiers
	 */
	public const IDENTIFIER_ADDRESS = PropertyIdentifierType::IDENTIFIER_ADDRESS;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
