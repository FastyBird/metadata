<?php declare(strict_types = 1);

/**
 * InvalidArgumentException.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Exceptions
 * @since          0.1.0
 *
 * @date           19.12.20
 */

namespace FastyBird\ModulesMetadata\Exceptions;

use InvalidArgumentException as PHPInvalidArgumentException;

class InvalidArgumentException extends PHPInvalidArgumentException implements IException
{

}
