<?php declare(strict_types = 1);

/**
 * MappingDriver.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Documents
 * @since          1.0.0
 *
 * @date           10.02.24
 */

namespace FastyBird\Library\Metadata\Documents\Mapping\Driver;

use FastyBird\Library\Metadata\Documents;

/**
 * Contract for metadata drivers
 *
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Documents
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface MappingDriver
{

	/**
	 * Loads the metadata for the specified class into the provided container
	 *
	 * @template T of Documents\Document
	 *
	 * @param Documents\Mapping\ClassMetadata<T> $metadata
	 */
	public function loadMetadataForClass(Documents\Mapping\ClassMetadata $metadata): void;

	/**
	 * Gets the names of all mapped classes known to this driver
	 *
	 * @return array<int, class-string<object>>
	 */
	public function getAllClassNames(): array;

	/**
	 * Returns whether the class with the specified name should have its metadata loaded.
	 * This is only the case if it is either mapped as an Entity or a MappedSuperclass.
	 *
	 * @template T of object
	 *
	 * @param class-string<T> $className
	 */
	public function isTransient(string $className): bool;

}
