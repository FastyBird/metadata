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
# Control trigger actions
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class TriggerControlAction(Enum):
    TRIGGER_TRIGGER: str = "trigger"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Triggers types
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class TriggerType(Enum):
    MANUAL: str = "manual"
    AUTOMATIC: str = "automatic"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Trigger actions types
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class TriggerActionType(Enum):
    CHANNEL_PROPERTY: str = "channel-property"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Trigger conditions types
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class TriggerConditionType(Enum):
    CHANNEL_PROPERTY: str = "channel-property"
    DEVICE_PROPERTY: str = "device-property"
    TIME: str = "time"
    DATE: str = "date"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Trigger notifications types
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class TriggerNotificationType(Enum):
    EMAIL: str = "email"
    SMS: str = "sms"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Conditions operators
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class TriggerConditionOperator(Enum):
    EQUAL: str = "eq"
    ABOVE: str = "above"
    BELOW: str = "below"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_
