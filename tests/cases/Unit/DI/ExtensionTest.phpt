<?php declare(strict_types = 1);

namespace Tests\Cases;

use FastyBird\Metadata;
use FastyBird\Metadata\Loaders;
use FastyBird\Metadata\Schemas;
use Nette;
use Ninjify\Nunjuck\TestCase\BaseTestCase;
use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';

/**
 * @testCase
 */
final class ExtensionTest extends BaseTestCase
{

	public function testCompilersServices(): void
	{
		$config = new Nette\Configurator();
		$config->setTempDirectory(TEMP_DIR);

		Metadata\DI\MetadataExtension::register($config);

		$container = $config->createContainer();

		Assert::notNull($container->getByType(Loaders\SchemaLoader::class));
		Assert::notNull($container->getByType(Loaders\MetadataLoader::class));
		Assert::notNull($container->getByType(Schemas\Validator::class));
	}

}

$test_case = new ExtensionTest();
$test_case->run();
