<?php declare(strict_types = 1);

use FastyBird\Metadata\Types;

return [
	'missing' => [
		file_get_contents(__DIR__ . '/data/channel.property.missing.json'),
		Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_REPORTED),
	],
	'invalid-routing' => [
		file_get_contents(__DIR__ . '/data/channel.property.dynamic.json'),
		Types\RoutingKeyType::get(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ENTITY_CREATED),
	],
];
