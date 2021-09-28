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

"""
JSON schema & modules metadata loaders
"""

# Library dependencies
from io import BytesIO
from typing import Dict
from pkg_resources import resource_string

# Library libs
from modules_metadata.exceptions import (
    FileNotFoundException,
    InvalidArgumentException,
    InvalidDataException,
    InvalidStateException,
    LogicException,
    MalformedInputException,
)
from modules_metadata.routing import RoutingKey
from modules_metadata.types import ModuleOrigin
from modules_metadata.validator import validate


def load_schema(origin: ModuleOrigin, routing_key: RoutingKey) -> str:
    """Load JSON schema for module origin and routing key"""

    if origin.value in JSON_SCHEMAS_MAPPING:
        mapping = JSON_SCHEMAS_MAPPING[origin.value]

        if routing_key.value in mapping:
            schema: str = JSON_SCHEMAS_MAPPING[origin.value][routing_key.value]

            schema_content = get_data_file_content(schema)

            if schema_content is not None:
                return schema_content

            raise FileNotFoundException("Schema could not be loaded")

    no_modules_routes = JSON_SCHEMAS_MAPPING[ModuleOrigin(ModuleOrigin.NOT_SPECIFIED_ORIGIN).value]

    if routing_key.value in no_modules_routes:
        schema: str = no_modules_routes[routing_key.value]

        schema_content = get_data_file_content(schema)

        if schema_content is not None:
            return schema_content

        raise FileNotFoundException("Schema could not be loaded")

    raise InvalidArgumentException(
        f"Schema for origin: {origin.value} and routing key: {routing_key.value} is not configured",
    )


def load_metadata() -> Dict:
    """Load modules metadata"""

    schema_content = get_data_file_content("resources/schemas/modules.json")

    if schema_content is None:
        InvalidStateException("Metadata schema could not be loaded")

    metadata_content = get_data_file_content("resources/modules.json")

    if metadata_content is None:
        InvalidStateException("Metadata content could not be loaded")

    try:
        return validate(metadata_content, schema_content)

    except (MalformedInputException, LogicException, InvalidDataException) as ex:
        raise InvalidStateException(
            "Modules metadata could not be loaded. Metadata files are corrupted or could not be loaded"
        ) from ex


def get_data_file_content(filename: str) -> str or None:
    """Load file content from package resources"""

    try:
        return BytesIO(resource_string(__name__, filename)).read().decode()

    except FileNotFoundError:
        return None


JSON_SCHEMAS_MAPPING = {
    ModuleOrigin(ModuleOrigin.NOT_SPECIFIED_ORIGIN).value: {
        RoutingKey(RoutingKey.DEVICES_PROPERTIES_DATA_ROUTING_KEY).value:
            "resources/schemas/data/data.device.property.json",
        RoutingKey(RoutingKey.DEVICES_CONFIGURATION_DATA_ROUTING_KEY).value:
            "resources/schemas/data/data.device.configuration.json",
        RoutingKey(RoutingKey.DEVICES_CONTROL_ENTITY_DATA_ROUTING_KEY).value:
            "resources/schemas/data/data.device.control.json",
        RoutingKey(RoutingKey.CHANNELS_PROPERTIES_DATA_ROUTING_KEY).value:
            "resources/schemas/data/data.channel.property.json",
        RoutingKey(RoutingKey.CHANNELS_CONFIGURATION_DATA_ROUTING_KEY).value:
            "resources/schemas/data/data.channel.configuration.json",
        RoutingKey(RoutingKey.CHANNELS_CONTROL_ENTITY_DATA_ROUTING_KEY).value:
            "resources/schemas/data/data.channel.control.json",
        RoutingKey(RoutingKey.CONNECTORS_CONTROL_ENTITY_DATA_ROUTING_KEY).value:
            "resources/schemas/data/data.connector.control.json",
        RoutingKey(RoutingKey.TRIGGERS_CONTROL_ENTITY_DATA_ROUTING_KEY).value:
            "resources/schemas/data/data.trigger.control.json",
    },
    ModuleOrigin(ModuleOrigin.ACCOUNTS_MODULE).value: {
        RoutingKey(RoutingKey.ACCOUNTS_ENTITY_CREATED).value:
            "resources/schemas/accounts-module/entity.account.json",
        RoutingKey(RoutingKey.ACCOUNTS_ENTITY_UPDATED).value:
            "resources/schemas/accounts-module/entity.account.json",
        RoutingKey(RoutingKey.ACCOUNTS_ENTITY_DELETED).value:
            "resources/schemas/accounts-module/entity.account.json",

        RoutingKey(RoutingKey.EMAILS_ENTITY_CREATED).value:
            "resources/schemas/accounts-module/entity.email.json",
        RoutingKey(RoutingKey.EMAILS_ENTITY_UPDATED).value:
            "resources/schemas/accounts-module/entity.email.json",
        RoutingKey(RoutingKey.EMAILS_ENTITY_DELETED).value:
            "resources/schemas/accounts-module/entity.email.json",

        RoutingKey(RoutingKey.IDENTITIES_ENTITY_CREATED).value:
            "resources/schemas/accounts-module/entity.identity.json",
        RoutingKey(RoutingKey.IDENTITIES_ENTITY_UPDATED).value:
            "resources/schemas/accounts-module/entity.identity.json",
        RoutingKey(RoutingKey.IDENTITIES_ENTITY_DELETED).value:
            "resources/schemas/accounts-module/entity.identity.json",
    },
    ModuleOrigin(ModuleOrigin.DEVICES_MODULE).value: {
        RoutingKey(RoutingKey.DEVICES_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.device.json",
        RoutingKey(RoutingKey.DEVICES_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.device.json",
        RoutingKey(RoutingKey.DEVICES_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.device.json",

        RoutingKey(RoutingKey.DEVICES_PROPERTY_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.device.property.json",
        RoutingKey(RoutingKey.DEVICES_PROPERTY_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.device.property.json",
        RoutingKey(RoutingKey.DEVICES_PROPERTY_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.device.property.json",

        RoutingKey(RoutingKey.DEVICES_CONFIGURATION_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.device.configuration.json",
        RoutingKey(RoutingKey.DEVICES_CONFIGURATION_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.device.configuration.json",
        RoutingKey(RoutingKey.DEVICES_CONFIGURATION_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.device.configuration.json",

        RoutingKey(RoutingKey.DEVICES_CONTROL_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.device.control.json",
        RoutingKey(RoutingKey.DEVICES_CONTROL_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.device.control.json",
        RoutingKey(RoutingKey.DEVICES_CONTROL_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.device.control.json",

        RoutingKey(RoutingKey.DEVICES_CONNECTOR_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.device.connector.json",
        RoutingKey(RoutingKey.DEVICES_CONNECTOR_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.device.connector.json",
        RoutingKey(RoutingKey.DEVICES_CONNECTOR_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.device.connector.json",

        RoutingKey(RoutingKey.CHANNELS_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.channel.json",
        RoutingKey(RoutingKey.CHANNELS_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.channel.json",
        RoutingKey(RoutingKey.CHANNELS_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.channel.json",

        RoutingKey(RoutingKey.CHANNELS_PROPERTY_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.channel.property.json",
        RoutingKey(RoutingKey.CHANNELS_PROPERTY_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.channel.property.json",
        RoutingKey(RoutingKey.CHANNELS_PROPERTY_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.channel.property.json",

        RoutingKey(RoutingKey.CHANNELS_CONFIGURATION_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.channel.configuration.json",
        RoutingKey(RoutingKey.CHANNELS_CONFIGURATION_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.channel.configuration.json",
        RoutingKey(RoutingKey.CHANNELS_CONFIGURATION_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.channel.configuration.json",

        RoutingKey(RoutingKey.CHANNELS_CONTROL_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.channel.control.json",
        RoutingKey(RoutingKey.CHANNELS_CONTROL_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.channel.control.json",
        RoutingKey(RoutingKey.CHANNELS_CONTROL_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.channel.control.json",

        RoutingKey(RoutingKey.CONNECTORS_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.connector.json",
        RoutingKey(RoutingKey.CONNECTORS_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.connector.json",
        RoutingKey(RoutingKey.CONNECTORS_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.connector.json",

        RoutingKey(RoutingKey.CONNECTORS_CONTROL_ENTITY_CREATED).value:
            "resources/schemas/devices-module/entity.connector.control.json",
        RoutingKey(RoutingKey.CONNECTORS_CONTROL_ENTITY_UPDATED).value:
            "resources/schemas/devices-module/entity.connector.control.json",
        RoutingKey(RoutingKey.CONNECTORS_CONTROL_ENTITY_DELETED).value:
            "resources/schemas/devices-module/entity.connector.control.json",
    },
    ModuleOrigin(ModuleOrigin.TRIGGERS_MODULE).value: {
        RoutingKey(RoutingKey.TRIGGERS_ENTITY_CREATED).value:
            "resources/schemas/triggers-module/entity.trigger.json",
        RoutingKey(RoutingKey.TRIGGERS_ENTITY_UPDATED).value:
            "resources/schemas/triggers-module/entity.trigger.json",
        RoutingKey(RoutingKey.TRIGGERS_ENTITY_DELETED).value:
            "resources/schemas/triggers-module/entity.trigger.json",

        RoutingKey(RoutingKey.TRIGGERS_CONTROL_ENTITY_CREATED).value:
            "resources/schemas/triggers-module/entity.trigger.control.json",
        RoutingKey(RoutingKey.TRIGGERS_CONTROL_ENTITY_UPDATED).value:
            "resources/schemas/triggers-module/entity.trigger.control.json",
        RoutingKey(RoutingKey.TRIGGERS_CONTROL_ENTITY_DELETED).value:
            "resources/schemas/triggers-module/entity.trigger.control.json",

        RoutingKey(RoutingKey.TRIGGERS_ACTIONS_ENTITY_CREATED).value:
            "resources/schemas/triggers-module/entity.action.json",
        RoutingKey(RoutingKey.TRIGGERS_ACTIONS_ENTITY_UPDATED).value:
            "resources/schemas/triggers-module/entity.action.json",
        RoutingKey(RoutingKey.TRIGGERS_ACTIONS_ENTITY_DELETED).value:
            "resources/schemas/triggers-module/entity.action.json",

        RoutingKey(RoutingKey.TRIGGERS_NOTIFICATIONS_ENTITY_CREATED).value:
            "resources/schemas/triggers-module/entity.notification.json",
        RoutingKey(RoutingKey.TRIGGERS_NOTIFICATIONS_ENTITY_UPDATED).value:
            "resources/schemas/triggers-module/entity.notification.json",
        RoutingKey(RoutingKey.TRIGGERS_NOTIFICATIONS_ENTITY_DELETED).value:
            "resources/schemas/triggers-module/entity.notification.json",

        RoutingKey(RoutingKey.TRIGGERS_CONDITIONS_ENTITY_CREATED).value:
            "resources/schemas/triggers-module/entity.condition.json",
        RoutingKey(RoutingKey.TRIGGERS_CONDITIONS_ENTITY_UPDATED).value:
            "resources/schemas/triggers-module/entity.condition.json",
        RoutingKey(RoutingKey.TRIGGERS_CONDITIONS_ENTITY_DELETED).value:
            "resources/schemas/triggers-module/entity.condition.json",
    },
}
