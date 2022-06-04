<?php declare(strict_types = 1);

namespace Tests\Cases;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;
use Ramsey\Uuid;
use Tester\Assert;

require_once __DIR__ . '/../../../../bootstrap.php';
require_once __DIR__ . '/../../BaseTestCase.php';

/**
 * @testCase
 */
final class ChannelPropertyEntityTest extends BaseTestCase
{

	/**
	 * @param string $data
	 * @param Types\RoutingKeyType $routingKey
	 * @param string $class
	 *
	 * @dataProvider ./../../../../fixtures/Entities/Modules/channel.property.php
	 */
	public function testCreateEntity(string $data, Types\RoutingKeyType $routingKey, string $class): void
	{
		/** @var Entities\Modules\DevicesModule\ChannelPropertyEntityFactory $factory */
		$factory = $this->container->getByType(Entities\Modules\DevicesModule\ChannelPropertyEntityFactory::class);

		$entity = $factory->create($data, $routingKey);

		Assert::true($entity instanceof $class);
		Assert::type(Uuid\UuidInterface::class, $entity->getChannel());
	}

	/**
	 * @param string $data
	 * @param Types\RoutingKeyType $routingKey
	 *
	 * @dataProvider ./../../../../fixtures/Entities/Modules/channel.property.invalid.php
	 *
	 * @throws FastyBird\Metadata\Exceptions\IException
	 */
	public function testCreateEntityInvalid(string $data, Types\RoutingKeyType $routingKey): void
	{
		/** @var Entities\Modules\DevicesModule\ChannelPropertyEntityFactory $factory */
		$factory = $this->container->getByType(Entities\Modules\DevicesModule\ChannelPropertyEntityFactory::class);

		$factory->create($data, $routingKey);
	}

}

$test_case = new ChannelPropertyEntityTest();
$test_case->run();
