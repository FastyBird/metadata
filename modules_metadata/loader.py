#!/usr/bin/python3

#     Copyright 2021. FastyBird s.r.o.
#
#     Licensed under the Apache License, Version 2.0 (the "License");
#     you may not use this file except in compliance with the License.
#     You may obtain a copy of the License at
#
#         http://www.apache.org/licenses/LICENSE-2.0
#
#     Unless required by applicable law or agreed to in writing, software
#     distributed under the License is distributed on an "AS IS" BASIS,
#     WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#     See the License for the specific language governing permissions and
#     limitations under the License.

# Library dependencies
from io import BytesIO
from pkg_resources import resource_string
from typing import Dict

# Library libs
from modules_metadata.exceptions import FileNotFoundException, InvalidArgumentException
from modules_metadata.routing import RoutingKey
from modules_metadata.types import ModuleOrigin
from modules_metadata.validator import validate

JSON_SCHEMAS_MAPPING = {
    ModuleOrigin(ModuleOrigin.NOT_SPECIFIED_ORIGIN).value: {
        RoutingKey(RoutingKey.DEVICES_CONTROLS_ROUTING_KEY).value: "resources/schemas/data/data.device.control.json",
        RoutingKey(RoutingKey.DEVICES_PROPERTIES_DATA_ROUTING_KEY).value: "resources/schemas/data/data.device.property.json",
        RoutingKey(RoutingKey.DEVICES_CONFIGURATION_DATA_ROUTING_KEY).value: "resources/schemas/data/data.device.configuration.json",
        RoutingKey(RoutingKey.CHANNELS_CONTROLS_ROUTING_KEY).value: "resources/schemas/data/data.channel.control.json",
        RoutingKey(RoutingKey.CHANNELS_PROPERTIES_DATA_ROUTING_KEY).value: "resources/schemas/data/data.channel.property.json",
        RoutingKey(RoutingKey.CHANNELS_CONFIGURATION_DATA_ROUTING_KEY).value: "resources/schemas/data/data.channel.configuration.json",
        RoutingKey(RoutingKey.CONNECTOR_CONTROLS_ROUTING_KEY).value: "resources/schemas/data/data.connector.control.json",
        RoutingKey(RoutingKey.TRIGGER_CONTROLS_ROUTING_KEY).value: "resources/schemas/data/data.trigger.control.json",
    },
    ModuleOrigin(ModuleOrigin.ACCOUNTS_MODULE).value: {
        RoutingKey(RoutingKey.ACCOUNTS_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/accounts-module/entity.account.json",
        RoutingKey(RoutingKey.ACCOUNTS_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/accounts-module/entity.account.json",
        RoutingKey(RoutingKey.ACCOUNTS_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/accounts-module/entity.account.json",

        RoutingKey(RoutingKey.EMAILS_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/accounts-module/entity.email.json",
        RoutingKey(RoutingKey.EMAILS_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/accounts-module/entity.email.json",
        RoutingKey(RoutingKey.EMAILS_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/accounts-module/entity.email.json",

        RoutingKey(RoutingKey.IDENTITIES_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/accounts-module/entity.identity.json",
        RoutingKey(RoutingKey.IDENTITIES_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/accounts-module/entity.identity.json",
        RoutingKey(RoutingKey.IDENTITIES_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/accounts-module/entity.identity.json",
    },
    ModuleOrigin(ModuleOrigin.DEVICES_MODULE).value: {
        RoutingKey(RoutingKey.DEVICES_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.json",
        RoutingKey(RoutingKey.DEVICES_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.json",
        RoutingKey(RoutingKey.DEVICES_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.json",

        RoutingKey(RoutingKey.DEVICES_PROPERTY_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.property.json",
        RoutingKey(RoutingKey.DEVICES_PROPERTY_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.property.json",
        RoutingKey(RoutingKey.DEVICES_PROPERTY_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.property.json",

        RoutingKey(RoutingKey.DEVICES_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.configuration.json",
        RoutingKey(RoutingKey.DEVICES_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.configuration.json",
        RoutingKey(RoutingKey.DEVICES_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.configuration.json",

        RoutingKey(RoutingKey.DEVICES_CONNECTOR_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.connector.json",
        RoutingKey(RoutingKey.DEVICES_CONNECTOR_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.connector.json",
        RoutingKey(RoutingKey.DEVICES_CONNECTOR_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.device.connector.json",

        RoutingKey(RoutingKey.CHANNELS_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.channel.json",
        RoutingKey(RoutingKey.CHANNELS_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.channel.json",
        RoutingKey(RoutingKey.CHANNELS_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.channel.json",

        RoutingKey(RoutingKey.CHANNELS_PROPERTY_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.channel.property.json",
        RoutingKey(RoutingKey.CHANNELS_PROPERTY_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.channel.property.json",
        RoutingKey(RoutingKey.CHANNELS_PROPERTY_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.channel.property.json",

        RoutingKey(RoutingKey.CHANNELS_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.channel.configuration.json",
        RoutingKey(RoutingKey.CHANNELS_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.channel.configuration.json",
        RoutingKey(RoutingKey.CHANNELS_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.channel.configuration.json",

        RoutingKey(RoutingKey.CONNECTOR_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.connector.json",
        RoutingKey(RoutingKey.CONNECTOR_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.connector.json",
        RoutingKey(RoutingKey.CONNECTOR_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/devices-module/entity.connector.json",
    },
    ModuleOrigin(ModuleOrigin.TRIGGERS_MODULE).value: {
        RoutingKey(RoutingKey.TRIGGERS_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.trigger.json",
        RoutingKey(RoutingKey.TRIGGERS_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.trigger.json",
        RoutingKey(RoutingKey.TRIGGERS_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.trigger.json",

        RoutingKey(RoutingKey.TRIGGERS_ACTIONS_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.action.json",
        RoutingKey(RoutingKey.TRIGGERS_ACTIONS_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.action.json",
        RoutingKey(RoutingKey.TRIGGERS_ACTIONS_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.action.json",

        RoutingKey(RoutingKey.TRIGGERS_NOTIFICATIONS_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.notification.json",
        RoutingKey(RoutingKey.TRIGGERS_NOTIFICATIONS_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.notification.json",
        RoutingKey(RoutingKey.TRIGGERS_NOTIFICATIONS_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.notification.json",

        RoutingKey(RoutingKey.TRIGGERS_CONDITIONS_CREATED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.condition.json",
        RoutingKey(RoutingKey.TRIGGERS_CONDITIONS_UPDATED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.condition.json",
        RoutingKey(RoutingKey.TRIGGERS_CONDITIONS_DELETED_ENTITY_ROUTING_KEY).value: "resources/schemas/triggers-module/entity.condition.json",
    },
}


def load_schema(origin: ModuleOrigin, routing_key: RoutingKey) -> str:
    if origin.value in JSON_SCHEMAS_MAPPING:
        mapping = JSON_SCHEMAS_MAPPING[origin.value]

        if routing_key.value in mapping:
            schema: str = JSON_SCHEMAS_MAPPING[origin.value][routing_key.value]

            schema_content = get_data_file_content(schema)

            if schema_content is not None:
                return schema_content

            raise FileNotFoundException("Schema could not be loaded")

    if routing_key.value in JSON_SCHEMAS_MAPPING[ModuleOrigin(ModuleOrigin.NOT_SPECIFIED_ORIGIN).value]:
        schema: str = JSON_SCHEMAS_MAPPING[ModuleOrigin(ModuleOrigin.NOT_SPECIFIED_ORIGIN).value][routing_key.value]

        schema_content = get_data_file_content(schema)

        if schema_content is not None:
            return schema_content

        raise FileNotFoundException("Schema could not be loaded")

    raise InvalidArgumentException("Schema for origin: {} and routing key: {} is not configured".format(
        origin.value,
        routing_key.value,
    ))


def load_metadata() -> Dict:
    schema_content = get_data_file_content("resources/schemas/modules.json")

    if schema_content is None:
        FileNotFoundException("Schema could not be loaded")

    metadata_content = get_data_file_content("resources/modules.json")

    if metadata_content is None:
        FileNotFoundException("Metadata could not be loaded")

    return validate(metadata_content, schema_content)


def get_data_file_content(filename: str) -> str or None:
    try:
        return BytesIO(resource_string(__name__, filename)).read().decode()

    except FileNotFoundError:
        return None
