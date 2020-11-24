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

		$result = $loader->load(ModulesMetadata\Constants::RESOURCES_FOLDER . '/schemas/devices-module/entity.channel.configuration.json');

		Assert::true($result !== null);
	}

	/**
	 * @throws FastyBird\ModulesMetadata\Exceptions\FileNotFoundException
	 */
	public function testValidateDevicePropertyInvalid(): void
	{
		$loader = new Loaders\SchemaLoader();

		$loader->load('unknown.file.json');
	}

}

$test_case = new SchemaLoaderTest();
$test_case->run();
