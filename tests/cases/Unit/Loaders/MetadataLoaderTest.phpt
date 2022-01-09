<?php declare(strict_types = 1);

namespace Tests\Cases;

use FastyBird\Metadata\Loaders;
use FastyBird\Metadata\Schemas;
use Nette\Utils;
use Ninjify\Nunjuck\TestCase\BaseTestCase;
use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';

/**
 * @testCase
 */
final class MetadataLoaderTest extends BaseTestCase
{

	public function testLoadMetadata(): void
	{
		$loader = new Loaders\MetadataLoader(new Schemas\Validator());

		$result = $loader->load();

		Assert::type(Utils\ArrayHash::class, $result);
	}

}

$test_case = new MetadataLoaderTest();
$test_case->run();
