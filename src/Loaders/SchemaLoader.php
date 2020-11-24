<?php declare(strict_types = 1);

/**
 * SchemaLoader.php
 *
 * @license        More in license.md
 * @copyright      https://fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Helpers
 * @since          0.1.0
 *
 * @date           09.03.20
 */

namespace FastyBird\ModulesMetadata\Loaders;

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
	 */
	public function load(string $filename): string
	{
		if (is_file($filename)) {
			$schema = $filename;

		} elseif (defined('FB_RESOURCES_DIR') === true) {
			$schema = FB_RESOURCES_DIR . '/schemas/' . $filename;

		} else {
			throw new Exceptions\FileNotFoundException('Schema could not be loaded');
		}

		$schema = file_get_contents($schema);

		if ($schema === false) {
			throw new Exceptions\FileNotFoundException('Schema could not be loaded');
		}

		return $schema;
	}

}
