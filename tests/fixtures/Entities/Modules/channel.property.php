<?php declare(strict_types = 1);

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;

return [
	'dynamic'    => [
		file_get_contents(__DIR__ . '/data/channel.property.dynamic.json'),
		Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_REPORTED),
		Entities\Modules\DevicesModule\ChannelDynamicPropertyEntity::class,
	],
	'static'    => [
		file_get_contents(__DIR__ . '/data/channel.property.static.json'),
		Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_REPORTED),
		Entities\Modules\DevicesModule\ChannelStaticPropertyEntity::class,
	],
	'mapped' => [
		file_get_contents(__DIR__ . '/data/channel.property.mapped.json'),
		Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_REPORTED),
		Entities\Modules\DevicesModule\ChannelMappedPropertyEntity::class,
	],
	'dynamic-created'    => [
		file_get_contents(__DIR__ . '/data/channel.property.dynamic.json'),
		Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_CREATED),
		Entities\Modules\DevicesModule\ChannelDynamicPropertyEntity::class,
	],
	'dynamic-updated'    => [
		file_get_contents(__DIR__ . '/data/channel.property.dynamic.json'),
		Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_UPDATED),
		Entities\Modules\DevicesModule\ChannelDynamicPropertyEntity::class,
	],
	'dynamic-deleted'    => [
		file_get_contents(__DIR__ . '/data/channel.property.dynamic.json'),
		Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_DELETED),
		Entities\Modules\DevicesModule\ChannelDynamicPropertyEntity::class,
	],
];
