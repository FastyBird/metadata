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
from enum import Enum, unique


#
# Modules origins string
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class ModuleOrigin(Enum):
    NOT_SPECIFIED_ORIGIN: str = "*"
    ACCOUNTS_MODULE: str = "com.fastybird.accounts-module"
    DEVICES_MODULE: str = "com.fastybird.devices-module"
    TRIGGERS_MODULE: str = "com.fastybird.triggers-module"
    UI_MODULE: str = "com.fastybird.ui-module"
    WEB_UI_MODULE: str = "com.fastybird.web-ui-module"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Modules prefixes string
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class ModulePrefix(Enum):
    ACCOUNTS_MODULE_PREFIX: str = "accounts-module"
    DEVICES_MODULE_PREFIX: str = "devices-module"
    TRIGGERS_MODULE_PREFIX: str = "triggers-module"
    UI_MODULE_PREFIX: str = "ui-module"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Record data types
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class DataType(Enum):
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


#
# Switch payloads string
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class SwitchPayload(Enum):
    ON: str = "on"
    OFF: str = "off"
    TOGGLE: str = "toggle"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_
