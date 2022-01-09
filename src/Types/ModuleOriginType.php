<?php declare(strict_types = 1);

/**
 * ModuleOriginType.php
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
class ModuleOriginType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const ORIGIN_NOT_SPECIFIED = Metadata\Constants::NOT_SPECIFIED_ORIGIN;
	public const ORIGIN_MODULE_ACCOUNTS = Metadata\Constants::MODULE_ACCOUNTS_ORIGIN;
	public const ORIGIN_MODULE_DEVICES = Metadata\Constants::MODULE_DEVICES_ORIGIN;
	public const ORIGIN_MODULE_TRIGGERS = Metadata\Constants::MODULE_TRIGGERS_ORIGIN;
	public const ORIGIN_MODULE_UI = Metadata\Constants::MODULE_UI_ORIGIN;
	public const ORIGIN_MODULE_WEB_UI = Metadata\Constants::MODULE_WEB_UI_ORIGIN;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
