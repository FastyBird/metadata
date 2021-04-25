<?php declare(strict_types = 1);

/**
 * TriggersConditionOperatorType.php
 *
 * @license        More in license.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           04.04.20
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * Trigger condition operator type
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class TriggersConditionOperatorType extends Consistence\Enum\Enum
{

	/**
	 * Define states
	 */
	public const OPERATOR_VALUE_EQUAL = 'eq';
	public const OPERATOR_VALUE_ABOVE = 'above';
	public const OPERATOR_VALUE_BELOW = 'below';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}
