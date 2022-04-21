<?php declare(strict_types = 1);

/**
 * ConnectorPropertyNameType.php
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
 * Connector property name types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ConnectorPropertyNameType extends Consistence\Enum\Enum
{

	/**
	 * Define connector properties names
	 */
	public const NAME_STATE = 'state';
	public const NAME_SERVER = 'server';
	public const NAME_PORT = 'port';
	public const NAME_SECURED_PORT = 'secured_port';
	public const NAME_BAUD_RATE = 'baud_rate';
	public const NAME_INTERFACE = 'interface';
	public const NAME_ADDRESS = 'address';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
