<?php declare(strict_types = 1);

/**
 * AttributeReader.php
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
use ReflectionAttribute;
use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;
use function is_subclass_of;

/**
 * Document mapping attribute reader
 *
 * @template T of Documents\Mapping\MappingAttribute
 *
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Documents
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @interal
 */
final class AttributeReader
{

	/**
	 * @param ReflectionClass<object> $class
	 *
	 * @return array<class-string<T>, T>
	 */
	public function getClassAttributes(ReflectionClass $class): array
	{
		return $this->convertToAttributeInstances($class->getAttributes());
	}

	/**
	 * @return array<class-string<T>, T>
	 */
	public function getMethodAttributes(ReflectionMethod $method): array
	{
		return $this->convertToAttributeInstances($method->getAttributes());
	}

	/**
	 * @return array<class-string<T>, T>
	 */
	public function getPropertyAttributes(ReflectionProperty $property): array
	{
		return $this->convertToAttributeInstances($property->getAttributes());
	}

	/**
	 * @param class-string<T> $attributeName The name of the annotation.
	 *
	 * @return T|null
	 */
	public function getPropertyAttribute(ReflectionProperty $property, $attributeName)
	{
		return $this->getPropertyAttributes($property)[$attributeName] ?? null;
	}

	/**
	 * @param array<ReflectionAttribute<object>> $attributes
	 *
	 * @return array<class-string<T>, T>
	 */
	private function convertToAttributeInstances(array $attributes): array
	{
		$instances = [];

		foreach ($attributes as $attribute) {
			$attributeName = $attribute->getName();

			// Make sure we only get Metadata Attributes
			if (!is_subclass_of($attributeName, Documents\Mapping\MappingAttribute::class)) {
				continue;
			}

			/** @phpstan-var T $instance */
			$instance = $attribute->newInstance();

			/** @phpstan-var class-string<T> $attributeName */
			$instances[$attributeName] = $instance;
		}

		return $instances;
	}

}
