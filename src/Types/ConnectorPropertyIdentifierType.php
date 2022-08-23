<?php declare(strict_types = 1);

/**
 * ConnectorPropertyIdentifierType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.40.0
 *
 * @date           08.02.22
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Connector property identifier types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ConnectorPropertyIdentifierType extends Consistence\Enum\Enum
{

	/**
	 * Define connector properties identifiers
	 */
	public const IDENTIFIER_STATE = PropertyIdentifierType::IDENTIFIER_STATE;
	public const IDENTIFIER_SERVER = PropertyIdentifierType::IDENTIFIER_SERVER;
	public const IDENTIFIER_PORT = PropertyIdentifierType::IDENTIFIER_PORT;
	public const IDENTIFIER_SECURED_PORT = PropertyIdentifierType::IDENTIFIER_SECURED_PORT;
	public const IDENTIFIER_BAUD_RATE = PropertyIdentifierType::IDENTIFIER_BAUD_RATE;
	public const IDENTIFIER_INTERFACE = PropertyIdentifierType::IDENTIFIER_INTERFACE;
	public const IDENTIFIER_ADDRESS = PropertyIdentifierType::IDENTIFIER_ADDRESS;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
