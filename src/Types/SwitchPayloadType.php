<?php declare(strict_types = 1);

/**
 * SwitchPayloadType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           03.03.20
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Switch supported payload types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class SwitchPayloadType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const PAYLOAD_ON = 'switch-on';
	public const PAYLOAD_OFF = 'switch-off';
	public const PAYLOAD_TOGGLE = 'switch-toggle';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
