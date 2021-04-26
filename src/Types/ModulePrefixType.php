<?php declare(strict_types = 1);

/**
 * ModulePrefixType.php
 *
 * @license        More in license.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           26.04.21
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;
use FastyBird\ModulesMetadata;

/**
 * Modules origins types
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ModulePrefixType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const TYPE_MODULE_ACCOUNTS_PREFIX = ModulesMetadata\Constants::MODULE_ACCOUNTS_PREFIX;
	public const TYPE_MODULE_DEVICES_PREFIX = ModulesMetadata\Constants::MODULE_DEVICES_PREFIX;
	public const TYPE_MODULE_TRIGGERS_PREFIX = ModulesMetadata\Constants::MODULE_TRIGGERS_PREFIX;
	public const TYPE_MODULE_UI_PREFIX = ModulesMetadata\Constants::MODULE_UI_PREFIX;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
