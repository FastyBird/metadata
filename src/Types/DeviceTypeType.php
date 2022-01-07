<?php declare(strict_types = 1);

/**
 * DeviceTypeType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           26.11.20
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * Device type types
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class DeviceTypeType extends Consistence\Enum\Enum
{

	/**
	 * Define device states
	 */
	public const TYPE_LOCAL = 'local';
	public const TYPE_NETWORK = 'network';
	public const TYPE_VIRTUAL = 'virtual';
	public const TYPE_HOMEKIT = 'homekit';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
