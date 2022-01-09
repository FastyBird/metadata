<?php declare(strict_types = 1);

/**
 * ISchemaLoader.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Loaders
 * @since          0.1.0
 *
 * @date           09.03.20
 */

namespace FastyBird\Metadata\Loaders;

use FastyBird\Metadata\Types;

/**
 * JSON schema loader interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Loaders
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface ISchemaLoader
{

	/**
	 * @param Types\RoutingKeyType $routingKey
	 *
	 * @return string
	 */
	public function loadByRoutingKey(Types\RoutingKeyType $routingKey): string;

	/**
	 * @param string $namespace
	 * @param string $schemaFile
	 *
	 * @return string
	 */
	public function loadByNamespace(string $namespace, string $schemaFile): string;

}
