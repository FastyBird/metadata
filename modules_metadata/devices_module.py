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
Sets of enums for Devices Module
"""

# Library dependencies
from enum import Enum, unique


@unique
class ConnectorControlAction(Enum):
    """
    Control connector action

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    RESTART_CONNECTOR: str = "restart"
    SEARCH_DEVICES: str = "search"

    value: str

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_


@unique
class DeviceControlAction(Enum):
    """
    Control device action

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    RESET_DEVICE: str = "reset"
    RECONNECT_DEVICE: str = "reconnect"
    DEVICE_FACTORY_RESET: str = "factory-reset"

    value: str

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_


@unique
class ChannelControlAction(Enum):
    """
    Control channel action

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    RESET_CHANNEL: str = "reset"

    value: str

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_


@unique
class ConnectorType(Enum):
    """
    Connector type

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    FB_BUS: str = "fb-bus"
    FB_MQTT_V1: str = "fb-mqtt-v1"

    value: str

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_


@unique
class DeviceConnectionState(Enum):
    """
    Device connection state

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
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

    value: str

    @classmethod
    def has_value(cls, value: int) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_


@unique
class DeviceType(Enum):
    """
    Device type

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    LOCAL: str = "local"
    NETWORK: str = "network"
    VIRTUAL: str = "virtual"

    value: str

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_


@unique
class HardwareManufacturer(Enum):
    """
    Device hardware manufacturer

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    GENERIC = "generic"
    FASTYBIRD = "fastybird"
    ITEAD = "itead"
    AI_THINKER = "ai_thinker"

    value: str

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_


@unique
class FirmwareManufacturer(Enum):
    """
    Device firmware manufacturer

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    GENERIC: str = "generic"
    FASTYBIRD: str = "fastybird"

    value: str

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_


@unique
class DevicePropertyName(Enum):
    """
    Device known property name

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    STATE: str = "state"
    BATTERY: str = "battery"
    WIFI: str = "wifi"
    SIGNAL: str = "signal"

    value: str

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_
