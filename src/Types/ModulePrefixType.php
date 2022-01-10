<?php declare(strict_types = 1);

/**
 * ModulePrefixType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           26.04.21
 */

namespace FastyBird\Metadata\Types;

use Consistence;
use FastyBird\Metadata;

/**
 * Modules origins types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ModulePrefixType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const PREFIX_MODULE_ACCOUNTS = Metadata\Constants::MODULE_ACCOUNTS_PREFIX;
	public const PREFIX_MODULE_DEVICES = Metadata\Constants::MODULE_DEVICES_PREFIX;
	public const PREFIX_MODULE_TRIGGERS = Metadata\Constants::MODULE_TRIGGERS_PREFIX;
	public const PREFIX_MODULE_UI = Metadata\Constants::MODULE_UI_PREFIX;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}
