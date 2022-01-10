<?php declare(strict_types = 1);

/**
 * SchemaLoader.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Helpers
 * @since          0.1.0
 *
 * @date           09.03.20
 */

namespace FastyBird\Metadata\Loaders;

use FastyBird\Metadata;
use FastyBird\Metadata\Exceptions;
use FastyBird\Metadata\Types;

/**
 * JSON schema loader
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Helpers
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class SchemaLoader implements ISchemaLoader
{

	/**
	 * {@inheritDoc}
	 *
	 * @throws Exceptions\FileNotFoundException
	 * @throws Exceptions\InvalidArgumentException
	 */
	public function loadByRoutingKey(Types\RoutingKeyType $routingKey): string
	{
		if (isset(Metadata\Constants::JSON_SCHEMAS_MAPPING[$routingKey->getValue()])) {
			$schema = file_get_contents(Metadata\Constants::JSON_SCHEMAS_MAPPING[$routingKey->getValue()]);

			if ($schema === false) {
				throw new Exceptions\FileNotFoundException('Schema could not be loaded');
			}

			return $schema;
		}

		throw new Exceptions\InvalidArgumentException(sprintf('Schema for routing key: %s is not configured', strval($routingKey->getValue())));
	}

	/**
	 * {@inheritDoc}
	 *
	 * @throws Exceptions\FileNotFoundException
	 * @throws Exceptions\InvalidArgumentException
	 */
	public function loadByNamespace(string $namespace, string $schemaFile): string
	{
		$filePath = Metadata\Constants::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR . $schemaFile;

		if (file_exists($filePath)) {
			$schema = file_get_contents($filePath);

			if ($schema === false) {
				throw new Exceptions\FileNotFoundException('Schema could not be loaded');
			}

			return $schema;
		}

		throw new Exceptions\InvalidArgumentException(sprintf('Schema for namespace: %s and file: %s is not configured', $namespace, $schemaFile));
	}

}
