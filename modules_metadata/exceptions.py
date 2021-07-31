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


#
# Error thrown when data could not be handled
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Exceptions
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
class MalformedInputException(Exception):
    pass


#
# Error thrown when data are not valid
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Exceptions
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
class InvalidDataException(Exception):
    pass


#
# Error thrown when data file could not be found
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Exceptions
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
class FileNotFoundException(Exception):
    pass


#
# Error thrown when provided argument is not valid
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Exceptions
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
class InvalidArgumentException(Exception):
    pass


#
# Error thrown when logic error occur
#
# @package        FastyBird:ModulesMetadata!
# @subpackage     Exceptions
#
# @author         Adam Kadlec <adam.kadlec@fastybird.com>
#
class LogicException(Exception):
    pass
