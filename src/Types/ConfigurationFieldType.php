<?php declare(strict_types = 1);

/**
 * ConfigurationFieldType.php
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
 * Configuration field type
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ConfigurationFieldType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
    public const FIELD_BOOLEAN = 'boolean';
    public const FIELD_NUMBER = 'number';
    public const FIELD_SELECT = 'select';
    public const FIELD_TEXT = 'text';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
