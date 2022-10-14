<?php declare(strict_types = 1);

namespace Tests\Cases\Unit\Loaders;

use FastyBird\Metadata;
use FastyBird\Metadata\Loaders;
use Tests\Cases\Unit\BaseTestCase;

final class SchemaLoaderTest extends BaseTestCase
{

	/**
	 * @throws Metadata\Exceptions\FileNotFound
	 * @throws Metadata\Exceptions\InvalidArgument
	 */
	public function testValidateValidInput(): void
	{
		$loader = new Loaders\SchemaLoader();

		$result = $loader->loadByRoutingKey(
			Metadata\Types\RoutingKey::get(Metadata\Types\RoutingKey::ROUTE_DEVICE_ENTITY_CREATED),
		);

		self::assertNotSame('', $result);
	}

}
