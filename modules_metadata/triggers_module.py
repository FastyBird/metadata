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
Sets of enums for Triggers Module
"""

# Library dependencies
from enum import Enum, unique


@unique
class TriggerControlAction(Enum):
    """
    Control trigger action

    @package        FastyBird:ModulesMetadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    TRIGGER_TRIGGER: str = "trigger"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


@unique
class TriggerType(Enum):
    """
    Trigger type

    @package        FastyBird:ModulesMetadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    MANUAL: str = "manual"
    AUTOMATIC: str = "automatic"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


@unique
class TriggerActionType(Enum):
    """
    Trigger action type

    @package        FastyBird:ModulesMetadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    DEVICE_PROPERTY: str = "device-property"
    CHANNEL_PROPERTY: str = "channel-property"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


@unique
class TriggerConditionType(Enum):
    """
    Trigger condition type

    @package        FastyBird:ModulesMetadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    DEVICE_PROPERTY: str = "device-property"
    CHANNEL_PROPERTY: str = "channel-property"
    TIME: str = "time"
    DATE: str = "date"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


@unique
class TriggerNotificationType(Enum):
    """
    Trigger notification type

    @package        FastyBird:ModulesMetadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    EMAIL: str = "email"
    SMS: str = "sms"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


@unique
class TriggerConditionOperator(Enum):
    """
    Condition operator

    @package        FastyBird:ModulesMetadata!
    @module         triggers_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    EQUAL: str = "eq"
    ABOVE: str = "above"
    BELOW: str = "below"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member
