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
    NOT_SPECIFIED: str = "*"
    ACCOUNTS_MODULE: str = "com.fastybird.accounts-module"
    DEVICES_MODULE: str = "com.fastybird.devices-module"
    TRIGGERS_MODULE: str = "com.fastybird.triggers-module"
    UI_MODULE: str = "com.fastybird.ui-module"
    WEB_UI_MODULE: str = "com.fastybird.web-ui-module"

    # -----------------------------------------------------------------------------

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member

    # -----------------------------------------------------------------------------

    def __str__(self):
        """Transform enum to string"""
        return str(self.value)


@unique
class ModulePrefix(Enum):
    """
    Module prefix

    @package        FastyBird:ModulesMetadata!
    @module         types

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    ACCOUNTS_MODULE: str = "accounts-module"
    DEVICES_MODULE: str = "devices-module"
    TRIGGERS_MODULE: str = "triggers-module"
    UI_MODULE: str = "ui-module"

    # -----------------------------------------------------------------------------

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member

    # -----------------------------------------------------------------------------

    def __str__(self):
        """Transform enum to string"""
        return str(self.value)


@unique
class DataType(Enum):
    """
    Record data type

    @package        FastyBird:ModulesMetadata!
    @module         types

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    CHAR: str = "char"
    UCHAR: str = "uchar"
    SHORT: str = "short"
    USHORT: str = "ushort"
    INT: str = "int"
    UINT: str = "uint"
    FLOAT: str = "float"
    BOOLEAN: str = "bool"
    STRING: str = "string"
    ENUM: str = "enum"
    COLOR: str = "color"
    BUTTON: str = "button"
    SWITCH: str = "switch"

    # -----------------------------------------------------------------------------

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member

    # -----------------------------------------------------------------------------

    def __str__(self):
        """Transform enum to string"""
        return str(self.value)


@unique
class SwitchPayload(Enum):
    """
    Switch enum payload

    @package        FastyBird:ModulesMetadata!
    @module         types

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    ON: str = "switch-on"
    OFF: str = "switch-off"
    TOGGLE: str = "switch-toggle"

    # -----------------------------------------------------------------------------

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member

    # -----------------------------------------------------------------------------

    def __str__(self):
        """Transform enum to string"""
        return str(self.value)


@unique
class ButtonPayload(Enum):
    """
    Switch enum payload

    @package        FastyBird:ModulesMetadata!
    @module         types

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    PRESSED: str = "btn-pressed"
    RELEASED: str = "btn-released"
    CLICKED: str = "btn-clicked"
    DOUBLE_CLICKED: str = "btn-double-clicked"
    TRIPLE_CLICKED: str = "btn-triple-clicked"
    LONG_CLICKED: str = "btn-long-clicked"
    EXTRA_LONG_CLICKED: str = "btn-extra-long-clicked"

    # -----------------------------------------------------------------------------

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member

    # -----------------------------------------------------------------------------

    def __str__(self):
        """Transform enum to string"""
        return str(self.value)


@unique
class ControlName(Enum):
    """
    Known control name

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    CONFIGURE: str = "configure"
    RESET: str = "reset"
    REBOOT: str = "reboot"
    RECONNECT: str = "reconnect"
    FACTORY_RESET: str = "factory-reset"
    OTA: str = "ota"
    TRIGGER: str = "trigger"

    # -----------------------------------------------------------------------------

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member

    # -----------------------------------------------------------------------------

    def __str__(self):
        """Transform enum to string"""
        return str(self.value)
