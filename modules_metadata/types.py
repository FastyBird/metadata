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
Sets of universal enums for application
"""

# Library dependencies
from enum import Enum, unique


@unique
class ModuleOrigin(Enum):
    """
    Module origin

    @package        FastyBird:ModulesMetadata!
    @module         types

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    NOT_SPECIFIED_ORIGIN: str = "*"
    ACCOUNTS_MODULE: str = "com.fastybird.accounts-module"
    DEVICES_MODULE: str = "com.fastybird.devices-module"
    TRIGGERS_MODULE: str = "com.fastybird.triggers-module"
    UI_MODULE: str = "com.fastybird.ui-module"
    WEB_UI_MODULE: str = "com.fastybird.web-ui-module"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


@unique
class ModulePrefix(Enum):
    """
    Module prefix

    @package        FastyBird:ModulesMetadata!
    @module         types

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    ACCOUNTS_MODULE_PREFIX: str = "accounts-module"
    DEVICES_MODULE_PREFIX: str = "devices-module"
    TRIGGERS_MODULE_PREFIX: str = "triggers-module"
    UI_MODULE_PREFIX: str = "ui-module"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


@unique
class DataType(Enum):
    """
    Record data type

    @package        FastyBird:ModulesMetadata!
    @module         types

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    DATA_TYPE_CHAR: str = "char"
    DATA_TYPE_UCHAR: str = "uchar"
    DATA_TYPE_SHORT: str = "short"
    DATA_TYPE_USHORT: str = "ushort"
    DATA_TYPE_INT: str = "int"
    DATA_TYPE_UINT: str = "uint"
    DATA_TYPE_FLOAT: str = "float"
    DATA_TYPE_BOOLEAN: str = "bool"
    DATA_TYPE_STRING: str = "string"
    DATA_TYPE_ENUM: str = "enum"
    DATA_TYPE_COLOR: str = "color"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


@unique
class SwitchPayload(Enum):
    """
    Switch enum payload

    @package        FastyBird:ModulesMetadata!
    @module         types

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    ON: str = "on"
    OFF: str = "off"
    TOGGLE: str = "toggle"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member
