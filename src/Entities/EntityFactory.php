<?php declare(strict_types = 1);

/**
 * EntityFactory.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           02.06.22
 */

namespace FastyBird\Metadata\Entities;

use FastyBird\Metadata\Exceptions;
use Nette\Utils;
use phpDocumentor;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionParameter;
use ReflectionProperty;
use ReflectionType;
use Reflector;
use stdClass;
use Throwable;

/**
 * Data entity factory
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class EntityFactory
{

	/**
	 * @param string $entityClass
	 * @param Utils\ArrayHash $data
	 *
	 * @return IEntity
	 */
	protected function build(
		string $entityClass,
		Utils\ArrayHash $data
	): IEntity {
		if (!class_exists($entityClass)) {
			throw new Exceptions\InvalidStateException('Entity could not be created');
		}

		try {
			$decoded = $this->convertKeys($data);
			$decoded = Utils\Json::decode(Utils\Json::encode($decoded), Utils\Json::FORCE_ARRAY);

			if (is_array($decoded)) {
				$decoded = $this->convertToObject($decoded);
			}
		} catch (Utils\JsonException $ex) {
			throw new Exceptions\InvalidArgumentException('Provided entity content is not valid JSON.');
		}

		if (!$decoded instanceof stdClass) {
			throw new Exceptions\InvalidStateException('Data for entity could not be prepared');
		}

		try {
			$rc = new ReflectionClass($entityClass);

			$constructor = $rc->getConstructor();

			if ($constructor !== null) {
				$entity = $rc->newInstanceArgs($this->autowireArguments($constructor, $decoded));
			} else {
				$entity = new $entityClass();
			}
		} catch (Throwable $ex) {
			throw new Exceptions\InvalidStateException('Entity could not be created', 0, $ex);
		}

		$properties = $this->getProperties($rc);

		foreach ($properties as $rp) {
			$varAnnotation = $this->parseAnnotation($rp, 'var');

			if (
				in_array($rp->getName(), array_keys(get_object_vars($decoded)), true) === true
				&& property_exists($decoded, $rp->getName())
			) {
				$value = $decoded->{$rp->getName()};

				$methodName = 'set' . ucfirst($rp->getName());

				if ($varAnnotation === 'int') {
					$value = (int) $value;
				} elseif ($varAnnotation === 'float') {
					$value = (float) $value;
				} elseif ($varAnnotation === 'bool') {
					$value = (bool) $value;
				} elseif ($varAnnotation === 'string') {
					$value = (string) $value;
				}

				try {
					$rm = new ReflectionMethod($entityClass, $methodName);

					if ($rm->isPublic()) {
						$callback = [$entity, $methodName];

						// Try to call entity setter
						if (is_callable($callback)) {
							call_user_func_array($callback, [$value]);
						}
					}
				} catch (ReflectionException $ex) {
					continue;

				} catch (Throwable $ex) {
					throw new Exceptions\InvalidStateException('Entity could not be created', 0, $ex);
				}
			}
		}

		if ($entity instanceof IEntity) {
			return $entity;
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

	/**
	 * @param Utils\ArrayHash $data
	 *
	 * @return Array<string, mixed>
	 */
	protected function convertKeys(Utils\ArrayHash $data): array
	{
		$keys = preg_replace_callback('/_(.)/', function (array $m): string {
			return strtoupper($m[1]);
		}, array_keys((array) $data));

		if ($keys === null) {
			return [];
		}

		$converted = array_combine($keys, (array) $data);

		return $converted !== false ? $converted : [];
	}

	/**
	 * This method was inspired by same method in Nette framework
	 *
	 * @param ReflectionMethod $method
	 * @param stdClass $decoded
	 *
	 * @return mixed[]
	 */
	private function autowireArguments(
		ReflectionMethod $method,
		stdClass $decoded
	): array {
		$res = [];

		foreach ($method->getParameters() as $num => $parameter) {
			$parameterName = $parameter->getName();
			$parameterType = $this->getParameterType($parameter);

			if (
				!$parameter->isVariadic()
				&& in_array($parameterName, array_keys(get_object_vars($decoded)), true) === true
			) {
				$res[$num] = $decoded->{$parameterName};

			} elseif ($parameterName === 'id' && property_exists($decoded, 'id')) {
				$res[$num] = $decoded->id;

			} elseif (
				(
					$parameterType !== null
					&& $parameter->allowsNull()
				)
				|| $parameter->isOptional()
				|| $parameter->isDefaultValueAvailable()
			) {
				// !optional + defaultAvailable = func($a = NULL, $b) since 5.4.7
				// optional + !defaultAvailable = i.e. Exception::__construct, mysqli::mysqli, ...
				$res[$num] = $parameter->isDefaultValueAvailable() ? $parameter->getDefaultValue() : null;
			}
		}

		return $res;
	}

	/**
	 * @param ReflectionParameter $param
	 *
	 * @return string|NULL
	 */
	private function getParameterType(ReflectionParameter $param): ?string
	{
		if ($param->hasType()) {
			$rt = $param->getType();

			if ($rt instanceof ReflectionType && method_exists($rt, 'getName')) {
				$type = $rt->getName();

				return strtolower($type) === 'self' && $param->getDeclaringClass() !== null ? $param->getDeclaringClass()
					->getName() : $type;
			}
		}

		return null;
	}

	/**
	 * @param Reflector $rc
	 *
	 * @return ReflectionProperty[]
	 */
	private function getProperties(Reflector $rc): array
	{
		if (!$rc instanceof ReflectionClass) {
			return [];
		}

		$properties = [];

		foreach ($rc->getProperties() as $rcProperty) {
			$properties[] = $rcProperty;
		}

		if ($rc->getParentClass() !== false) {
			$properties = array_merge($properties, $this->getProperties($rc->getParentClass()));
		}

		return $properties;
	}

	/**
	 * @param ReflectionProperty $rp
	 * @param string $name
	 *
	 * @return string|NULL
	 */
	private function parseAnnotation(ReflectionProperty $rp, string $name): ?string
	{
		if ($rp->getDocComment() === false) {
			return null;
		}

		$factory = phpDocumentor\Reflection\DocBlockFactory::createInstance();
		$docblock = $factory->create($rp->getDocComment());

		foreach ($docblock->getTags() as $tag) {
			if ($tag->getName() === $name) {
				return trim((string) $tag);
			}
		}

		return null;
	}

	/**
	 * @param Array<string, mixed> $array
	 *
	 * @return stdClass
	 */
	private function convertToObject(array $array): stdClass
	{
		$converted = new stdClass();

		foreach ($array as $key => $value) {
			$converted->{$key} = $value;
		}

		return $converted;
	}

}
