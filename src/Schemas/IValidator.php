<?php declare(strict_types = 1);

/**
 * IValidator.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Schemas
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\Metadata\Schemas;

use Nette\Utils;

/**
 * JSON schema validator interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Schemas
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IValidator
{

	/**
	 * @param string $data
	 * @param string $schema
	 *
	 * @return Utils\ArrayHash
	 */
	public function validate(string $data, string $schema): Utils\ArrayHash;

}
