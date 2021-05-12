<?php declare(strict_types = 1);

/**
 * FileNotFoundException.php
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

use Exception as PHPException;

class FileNotFoundException extends PHPException implements IException
{

}
