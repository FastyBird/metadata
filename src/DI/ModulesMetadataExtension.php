<?php declare(strict_types = 1);

/**
 * ModulesMetadataExtension.php
 *
 * @license        More in license.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     DI
 * @since          0.1.0
 *
 * @date           24.06.20
 */

namespace FastyBird\ModulesMetadata\DI;

use FastyBird\ModulesMetadata\Loaders;
use FastyBird\ModulesMetadata\Schemas;
use Nette;
use Nette\DI;

/**
 * Metadata extension container
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     DI
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ModulesMetadataExtension extends DI\CompilerExtension
{

	/**
	 * @param Nette\Configurator $config
	 * @param string $extensionName
	 *
	 * @return void
	 */
	public static function register(
		Nette\Configurator $config,
		string $extensionName = 'fbModulesMetadata'
	): void {
		$config->onCompile[] = function (
			Nette\Configurator $config,
			DI\Compiler $compiler
		) use ($extensionName): void {
			$compiler->addExtension($extensionName, new ModulesMetadataExtension());
		};
	}

	/**
	 * {@inheritdoc}
	 */
	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();

		$builder->addDefinition(null)
			->setType(Schemas\Validator::class);

		$builder->addDefinition(null)
			->setType(Loaders\MetadataLoader::class);

		$builder->addDefinition(null)
			->setType(Loaders\SchemaLoader::class);
	}

}
