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
class ConnectorType(Enum):
    """
    Connector type

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    FB_BUS: str = "fb-bus"
    FB_MQTT: str = "fb-mqtt"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


@unique
class DeviceConnectionState(Enum):
    """
    Device connection state

    @package        FastyBird:ModulesMetadata!
    @module         devices_module

    @author         Adam Kadlec <adam.kadlec@fastybird.com>
    """
    # Device is connected to gateway
    CONNECTED: str = "connected"
    # Device is disconnected from gateway
    DISCONNECTED: str = "disconnected"
    # Device is in initialization process
    INIT: str = "init"
    # Device is ready to operate
    READY: str = "ready"
    # Device is in operating mode
    RUNNING: str = "running"
    # Device is in sleep mode - support fow low power devices
    SLEEPING: str = "sleeping"
    # Device is not ready for receiving commands
    STOPPED: str = "stopped"
    # Connection with device is lost
    LOST: str = "lost"
    # Device has some error
    ALERT: str = "alert"
    # Device is in unknown state
    UNKNOWN: str = "unknown"

    @classmethod
    def has_value(cls, value: int) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


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

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


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

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


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

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member


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
    RSSI: str = "rssi"
    VCC: str = "vcc"
    CPU_LOAD: str = "cpu-load"
    UPTIME: str = "uptime"
    IP_ADDRESS: str = "ip-address"
    STATUS_LED: str = "status-led"
    FREE_HEAP: str = "free-heap"

    @classmethod
    def has_value(cls, value: str) -> bool:
        """Check if provided value is valid enum value"""
        return value in cls._value2member_map_  # pylint: disable=no-member
