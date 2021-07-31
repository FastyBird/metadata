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
import json
from fastjsonschema import JsonSchemaException, JsonSchemaDefinitionException, compile
from typing import Dict

# App libs
from modules_metadata.exceptions import InvalidDataException, LogicException, MalformedInputException


def validate(data: str, schema: str) -> Dict:
    try:
        decoded_data = json.loads(data)

    except json.JSONDecodeError:
        raise MalformedInputException("Failed to decode input data")

    try:
        decoded_schema = json.loads(schema)

    except json.JSONDecodeError:
        raise LogicException("Failed to decode schema")

    try:
        validator = compile(decoded_schema)

    except JsonSchemaDefinitionException:
        raise LogicException("Failed to decode schema")

    try:
        return validator(data)

    except JsonSchemaException as ex:
        raise InvalidDataException(ex.message)
