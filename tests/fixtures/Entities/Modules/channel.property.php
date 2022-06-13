<?php declare(strict_types = 1);

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;

return [
	'dynamic'    => [
		file_get_contents(__DIR__ . '/data/channel.property.dynamic.json'),
		Entities\Modules\DevicesModule\ChannelDynamicPropertyEntity::class,
	],
	'static'    => [
		file_get_contents(__DIR__ . '/data/channel.property.static.json'),
		Entities\Modules\DevicesModule\ChannelStaticPropertyEntity::class,
	],
	'mapped' => [
		file_get_contents(__DIR__ . '/data/channel.property.mapped.json'),
		Entities\Modules\DevicesModule\ChannelMappedPropertyEntity::class,
	],
	'dynamic-created'    => [
		file_get_contents(__DIR__ . '/data/channel.property.dynamic.json'),
		Entities\Modules\DevicesModule\ChannelDynamicPropertyEntity::class,
	],
	'dynamic-updated'    => [
		file_get_contents(__DIR__ . '/data/channel.property.dynamic.json'),
		Entities\Modules\DevicesModule\ChannelDynamicPropertyEntity::class,
	],
	'dynamic-deleted'    => [
		file_get_contents(__DIR__ . '/data/channel.property.dynamic.json'),
		Entities\Modules\DevicesModule\ChannelDynamicPropertyEntity::class,
	],
];
