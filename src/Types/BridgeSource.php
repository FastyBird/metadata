<?php declare(strict_types = 1);

/**
 * BridgeSource.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Types
 * @since          1.0.0
 *
 * @date           21.10.22
 */

namespace FastyBird\Library\Metadata\Types;

use Consistence;
use FastyBird\Library\Metadata;
use function strval;

/**
 * Bridges sources types
 *
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class BridgeSource extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const SOURCE_NOT_SPECIFIED = Metadata\Constants::NOT_SPECIFIED_SOURCE;

	public const SOURCE_BRIDGE_REDISDB_DEVICES_MODULE = Metadata\Constants::BRIDGE_REDISDB_DEVICES_MODULE;

	public const SOURCE_BRIDGE_REDISDB_TRIGGERS_MODULE = Metadata\Constants::BRIDGE_REDISDB_TRIGGERS_MODULE;

	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
