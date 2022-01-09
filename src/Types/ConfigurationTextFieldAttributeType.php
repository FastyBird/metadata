<?php declare(strict_types = 1);

/**
 * ConfigurationTextFieldAttributeType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.9.0
 *
 * @date           24.11.21
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Configuration text field attribute type
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ConfigurationTextFieldAttributeType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
    public const ATTRIBUTE_DEFAULT = 'default';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
