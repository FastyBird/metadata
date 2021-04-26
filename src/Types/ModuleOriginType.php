<?php declare(strict_types = 1);

/**
 * ModuleOriginType.php
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
class ModuleOriginType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const TYPE_NOT_SPECIFIED_ORIGIN = ModulesMetadata\Constants::NOT_SPECIFIED_ORIGIN;
	public const TYPE_MODULE_ACCOUNTS_ORIGIN = ModulesMetadata\Constants::MODULE_ACCOUNTS_ORIGIN;
	public const TYPE_MODULE_DEVICES_ORIGIN = ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN;
	public const TYPE_MODULE_TRIGGERS_ORIGIN = ModulesMetadata\Constants::MODULE_TRIGGERS_ORIGIN;
	public const TYPE_MODULE_UI_ORIGIN = ModulesMetadata\Constants::MODULE_UI_ORIGIN;
	public const TYPE_MODULE_WEB_UI_ORIGIN = ModulesMetadata\Constants::MODULE_WEB_UI_ORIGIN;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
