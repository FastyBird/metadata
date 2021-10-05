<?php declare(strict_types = 1);

/**
 * ModuleOriginType.php
 *
 * @license        More in LICENSE.md
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
	public const ORIGIN_NOT_SPECIFIED = ModulesMetadata\Constants::NOT_SPECIFIED_ORIGIN;
	public const ORIGIN_MODULE_ACCOUNTS = ModulesMetadata\Constants::MODULE_ACCOUNTS_ORIGIN;
	public const ORIGIN_MODULE_DEVICES = ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN;
	public const ORIGIN_MODULE_TRIGGERS = ModulesMetadata\Constants::MODULE_TRIGGERS_ORIGIN;
	public const ORIGIN_MODULE_UI = ModulesMetadata\Constants::MODULE_UI_ORIGIN;
	public const ORIGIN_MODULE_WEB_UI = ModulesMetadata\Constants::MODULE_WEB_UI_ORIGIN;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
