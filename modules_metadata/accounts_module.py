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

# App dependencies
from enum import Enum, unique


#
# Account state types
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class AccountState(Enum):
    ACTIVE: str = "active"
    BLOCKED: str = "blocked"
    DELETED: str = "deleted"
    NOT_ACTIVATED: str = "notActivated"
    APPROVAL_WAITING: str = "approvalWaiting"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_


#
# Account identity state types
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Metadata
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
@unique
class IdentityState(Enum):
    ACTIVE: str = "active"
    BLOCKED: str = "blocked"
    DELETED: str = "deleted"
    INVALID: str = "invalid"

    @classmethod
    def has_value(cls, value: str) -> bool:
        return value in cls._value2member_map_
