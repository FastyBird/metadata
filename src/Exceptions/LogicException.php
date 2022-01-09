<?php declare(strict_types = 1);

/**
 * LogicException.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Exceptions
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\Metadata\Exceptions;

use LogicException as PHPLogicException;

class LogicException extends PHPLogicException implements IException
{

}
