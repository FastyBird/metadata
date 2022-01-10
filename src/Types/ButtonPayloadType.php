<?php declare(strict_types = 1);

/**
 * ButtonPayloadType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.7.6
 *
 * @date           17.11.21
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Button supported payload types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ButtonPayloadType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const PAYLOAD_PRESSED = 'btn-pressed';
	public const PAYLOAD_RELEASED = 'btn-released';
	public const PAYLOAD_CLICKED = 'btn-clicked';
	public const PAYLOAD_DOUBLE_CLICKED = 'btn-double-clicked';
	public const PAYLOAD_TRIPLE_CLICKED = 'btn-triple-clicked';
	public const PAYLOAD_LONG_CLICKED = 'btn-long-clicked';
	public const PAYLOAD_EXTRA_LONG_CLICKED = 'btn-extra-long-clicked';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
