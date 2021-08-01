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
# Control connector actions
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class ConnectorControlAction(Enum):
    RESTART_CONNECTOR: str = "restart"
    SEARCH_DEVICES: str = "search"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Control device actions
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class DeviceControlAction(Enum):
    RESET_DEVICE: str = "reset"
    RECONNECT_DEVICE: str = "reconnect"
    DEVICE_FACTORY_RESET: str = "factory-reset"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Control channel actions
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class ChannelControlAction(Enum):
    RESET_CHANNEL: str = "reset"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Connector supported types
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class ConnectorType(Enum):
    FB_BUS: str = "fb-bus"
    FB_MQTT_V1: str = "fb-mqtt-v1"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Device states
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class DeviceConnectionState(Enum):
    # Device is connected to gateway
    STATE_CONNECTED: str = "connected"
    # Device is disconnected from gateway
    STATE_DISCONNECTED: str = "disconnected"
    # Device is in initialization process
    STATE_INIT: str = "init"
    # Device is ready to operate
    STATE_READY: str = "ready"
    # Device is in operating mode
    STATE_RUNNING: str = "running"
    # Device is in sleep mode - support fow low power devices
    STATE_SLEEPING: str = "sleeping"
    # Device is not ready for receiving commands
    STATE_STOPPED: str = "stopped"
    # Connection with device is lost
    STATE_LOST: str = "lost"
    # Device has some error
    STATE_ALERT: str = "alert"
    # Device is in unknown state
    STATE_UNKNOWN: str = "unknown"

    @classmethod
    def has_value(cls, value: int) -> bool:
        return value in cls._value2member_map_


#
# Device type
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class DeviceType(Enum):
    LOCAL: str = "local"
    NETWORK: str = "network"
    VIRTUAL: str = "virtual"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Device hardware manufacturer
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class HardwareManufacturer(Enum):
    GENERIC = "generic"
    FASTYBIRD = "fastybird"
    ITEAD = "itead"
    AI_THINKER = "ai_thinker"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Device firmware manufacturer
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class FirmwareManufacturer(Enum):
    GENERIC: str = "generic"
    FASTYBIRD: str = "fastybird"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Device known properties names
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class DevicePropertyName(Enum):
    STATE: str = "state"
    BATTERY: str = "battery"
    WIFI: str = "wifi"
    SIGNAL: str = "signal"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_
