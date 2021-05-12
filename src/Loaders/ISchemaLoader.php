<?php declare(strict_types = 1);

/**
 * ISchemaLoader.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Loaders
 * @since          0.1.0
 *
 * @date           09.03.20
 */

namespace FastyBird\ModulesMetadata\Loaders;

/**
 * JSON schema loader interface
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Loaders
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface ISchemaLoader
{

	/**
	 * @param string $origin
	 * @param string $routingKey
	 *
	 * @return string
	 */
	public function load(string $origin, string $routingKey): string;

}
