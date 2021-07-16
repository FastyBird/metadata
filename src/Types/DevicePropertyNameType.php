<?php declare(strict_types = 1);

/**
 * DevicePropertyNameType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.1.11
 *
 * @date           16.07.21
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * Device property name types
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class DevicePropertyNameType extends Consistence\Enum\Enum
{

	/**
	 * Define device states
	 */
	public const TYPE_STATE = 'state';
	public const TYPE_BATTERY = 'battery';
	public const TYPE_WIFI = 'wifi';
	public const TYPE_SIGNAL = 'signal';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
