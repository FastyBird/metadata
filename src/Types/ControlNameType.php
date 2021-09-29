<?php declare(strict_types = 1);

/**
 * ControlNameType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.7.0
 *
 * @date           29.09.21
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * Control name types
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ControlNameType extends Consistence\Enum\Enum
{

	/**
	 * Define device states
	 */
	public const TYPE_CONFIGURATION = 'configuration';
	public const TYPE_RESET = 'reset';
	public const TYPE_REBOOT = 'reboot';
	public const TYPE_TRIGGER = 'trigger';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
