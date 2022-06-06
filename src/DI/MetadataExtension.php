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

use FastyBird\Metadata\Entities;
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
	 * {@inheritDoc}
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

		// Entity factories
		$builder->addDefinition('entity.factory.actions.connector.action', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Actions\ActionConnectorEntityFactory::class);

		$builder->addDefinition('entity.factory.actions.connector.property.action', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Actions\ActionConnectorPropertyEntityFactory::class);

		$builder->addDefinition('entity.factory.actions.device.action', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Actions\ActionDeviceEntityFactory::class);

		$builder->addDefinition('entity.factory.actions.device.property.action', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Actions\ActionDevicePropertyEntityFactory::class);

		$builder->addDefinition('entity.factory.actions.channel.action', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Actions\ActionChannelEntityFactory::class);

		$builder->addDefinition('entity.factory.actions.channel.property.action', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Actions\ActionChannelPropertyEntityFactory::class);

		$builder->addDefinition('entity.factory.actions.trigger.action', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Actions\ActionTriggerEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.accountsModule.account', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\AccountsModule\AccountEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.accountsModule.email', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\AccountsModule\EmailEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.accountsModule.identity', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\AccountsModule\IdentityEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.accountsModule.role', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\AccountsModule\RoleEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.triggersModule.action', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\TriggersModule\ActionEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.triggersModule.condition', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\TriggersModule\ConditionEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.triggersModule.notification', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\TriggersModule\NotificationEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.triggersModule.triggerControl', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\TriggersModule\TriggerControlEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.triggersModule.trigger', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\TriggersModule\TriggerEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.connector', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\ConnectorEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.connector.control', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\ConnectorControlEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.connector.property', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\ConnectorPropertyEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.device', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\DeviceEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.device.control', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\DeviceControlEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.device.property', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\DevicePropertyEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.device.attribute', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\DeviceAttributeEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.channel', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\ChannelEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.channel.control', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\ChannelControlEntityFactory::class);

		$builder->addDefinition('entity.factory.modules.devicesModule.channel.property', new DI\Definitions\ServiceDefinition())
			->setType(Entities\Modules\DevicesModule\ChannelPropertyEntityFactory::class);

		$builder->addDefinition('entity.factory.global', new DI\Definitions\ServiceDefinition())
			->setType(Entities\GlobalEntityFactory::class);
	}

}
