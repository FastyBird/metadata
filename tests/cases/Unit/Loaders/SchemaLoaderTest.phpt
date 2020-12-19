<?php declare(strict_types = 1);

namespace Tests\Cases;

use FastyBird\ModulesMetadata;
use FastyBird\ModulesMetadata\Loaders;
use Ninjify\Nunjuck\TestCase\BaseTestCase;
use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';

/**
 * @testCase
 */
final class SchemaLoaderTest extends BaseTestCase
{

	public function testValidateValidInput(): void
	{
		$loader = new Loaders\SchemaLoader();

		$result = $loader->load(ModulesMetadata\Constants::MODULE_DEVICES_ORIGIN, ModulesMetadata\Constants::MESSAGE_BUS_DEVICES_CREATED_ENTITY_ROUTING_KEY);

		Assert::true($result !== null);
	}

	/**
	 * @throws FastyBird\ModulesMetadata\Exceptions\InvalidArgumentException
	 */
	public function testValidateDevicePropertyInvalid(): void
	{
		$loader = new Loaders\SchemaLoader();

		$result = $loader->load(ModulesMetadata\Constants::MODULE_TRIGGERS_ORIGIN, ModulesMetadata\Constants::MESSAGE_BUS_DEVICES_CREATED_ENTITY_ROUTING_KEY);
	}

}

$test_case = new SchemaLoaderTest();
$test_case->run();
