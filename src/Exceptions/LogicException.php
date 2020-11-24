<?php declare(strict_types = 1);

/**
 * LogicException.php
 *
 * @license        More in license.md
 * @copyright      https://fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Exceptions
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\ModulesMetadata\Exceptions;

use LogicException as PHPLogicException;

class LogicException extends PHPLogicException implements IException
{

}
