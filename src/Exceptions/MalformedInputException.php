<?php declare(strict_types = 1);

/**
 * MalformedInputException.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Exceptions
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\ModulesMetadata\Exceptions;

use RuntimeException;

class MalformedInputException extends RuntimeException implements IException
{

}
