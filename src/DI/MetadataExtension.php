<?php declare(strict_types = 1);

/**
 * MetadataExtension.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     DI
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\Metadata\DI;

use FastyBird\Metadata\Loaders;
use FastyBird\Metadata\Schemas;
use Nette;
use Nette\DI;

/**
 * Metadata extension container
 *
 * @package        FastyBird:Metadata!
 * @subpackage     DI
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class MetadataExtension extends DI\CompilerExtension
{

	/**
	 * @param Nette\Configurator $config
	 * @param string $extensionName
	 *
	 * @return void
	 */
	public static function register(
		Nette\Configurator $config,
		string $extensionName = 'fbMetadata'
	): void {
		$config->onCompile[] = function (
			Nette\Configurator $config,
			DI\Compiler $compiler
		) use ($extensionName): void {
			$compiler->addExtension($extensionName, new MetadataExtension());
		};
	}

	/**
	 * {@inheritdoc}
	 */
	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();

		$builder->addDefinition('schema.validator', new DI\Definitions\ServiceDefinition())
			->setType(Schemas\Validator::class);

		$builder->addDefinition('loader.metadata', new DI\Definitions\ServiceDefinition())
			->setType(Loaders\MetadataLoader::class);

		$builder->addDefinition('loader.schema', new DI\Definitions\ServiceDefinition())
			->setType(Loaders\SchemaLoader::class);
	}

}
