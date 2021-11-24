<?php declare(strict_types = 1);

/**
 * ConfigurationSelectFieldAttributeType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.9.0
 *
 * @date           24.11.21
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * Configuration boolean field attribute type
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ConfigurationSelectFieldAttributeType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
    public const ATTRIBUTE_VALUES = 'values';
    public const ATTRIBUTE_DEFAULT = 'default';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
