<?php declare(strict_types = 1);

/**
 * SchemaLoader.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Helpers
 * @since          0.1.0
 *
 * @date           09.03.20
 */

namespace FastyBird\ModulesMetadata\Loaders;

use FastyBird\ModulesMetadata;
use FastyBird\ModulesMetadata\Exceptions;

/**
 * JSON schema loader
 *
 * @package        FastyBird:ModulesMetadata!
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
	public function load(string $origin, string $routingKey): string
	{
		if (isset(ModulesMetadata\Constants::JSON_SCHEMAS_MAPPING[$origin])) {
			$mapping = ModulesMetadata\Constants::JSON_SCHEMAS_MAPPING[$origin];

			if (isset($mapping[$routingKey])) {
				$schema = file_get_contents($mapping[$routingKey]);

				if ($schema === false) {
					throw new Exceptions\FileNotFoundException('Schema could not be loaded');
				}

				return $schema;
			}

		} elseif (isset(ModulesMetadata\Constants::JSON_SCHEMAS_MAPPING[ModulesMetadata\Constants::NOT_SPECIFIED_ORIGIN][$routingKey])) {
			$schema = file_get_contents(ModulesMetadata\Constants::JSON_SCHEMAS_MAPPING[ModulesMetadata\Constants::NOT_SPECIFIED_ORIGIN][$routingKey]);

			if ($schema === false) {
				throw new Exceptions\FileNotFoundException('Schema could not be loaded');
			}

			return $schema;
		}

		throw new Exceptions\InvalidArgumentException(sprintf('Schema for origin: %s and routing key: %s is not configured', $origin, $routingKey));
	}

}
