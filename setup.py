# -*- coding: utf-8 -*-

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

import codecs
import re
from setuptools import setup
from os import path

this_directory = path.abspath(path.dirname(__file__))

with open(path.join(this_directory, "README.md"), encoding="utf-8") as f:
    long_description = f.read()


def read(*parts):
    filename = path.join(path.dirname(__file__), *parts)

    with codecs.open(filename, encoding='utf-8') as fp:
        return fp.read()


def find_version(*file_paths):
    version_file = read(*file_paths)
    version_match = re.search(r"^__version__ = ['\"]([^'\"]*)['\"]", version_file, re.M)

    if version_match:
        return version_match.group(1)

    raise RuntimeError("Unable to find version string.")


VERSION: str = find_version("modules_metadata", "__init__.py")

setup(
    version=VERSION,
    name="fastybird-modules-metadata",
    author="FastyBird",
    author_email="code@fastybird.com",
    license="Apache Software License (Apache Software License 2.0)",
    description="FastyBird metadata for modules.",
    url="https://github.com/FastyBird/modules-metadata",
    long_description=long_description,
    long_description_content_type="text/markdown",
    include_package_data=True,
    python_requires=">=3.5",
    packages=[
        "modules_metadata",
    ],
    install_requires=[
        "fastjsonschema",
        "setuptools",
    ],
    download_url="https://github.com/FastyBird/modules-metadata/archive/%s.tar.gz" % VERSION,
    data_files=[
        ("modules-metadata-data/schemas/data", [
            "resources/schemas/data/data.channel.control.json",
            "resources/schemas/data/data.channel.property.json",
            "resources/schemas/data/data.connector.control.json",
            "resources/schemas/data/data.device.control.json",
            "resources/schemas/data/data.device.property.json",
            "resources/schemas/data/data.trigger.control.json",
        ]),
        ("modules-metadata-data/schemas/accounts-module", [
            "resources/schemas/accounts-module/entity.account.json",
            "resources/schemas/accounts-module/entity.email.json",
            "resources/schemas/accounts-module/entity.identity.json",
        ]),
        ("modules-metadata-data/schemas/devices-module", [
            "resources/schemas/devices-module/entity.channel.configuration.json",
            "resources/schemas/devices-module/entity.channel.json",
            "resources/schemas/devices-module/entity.channel.property.json",
            "resources/schemas/devices-module/entity.connector.json",
            "resources/schemas/devices-module/entity.device.configuration.json",
            "resources/schemas/devices-module/entity.device.connector.json",
            "resources/schemas/devices-module/entity.device.json",
            "resources/schemas/devices-module/entity.device.property.json",
        ]),
        ("modules-metadata-data/schemas/triggers-module", [
            "resources/schemas/triggers-module/entity.action.json",
            "resources/schemas/triggers-module/entity.condition.json",
            "resources/schemas/triggers-module/entity.notification.json",
            "resources/schemas/triggers-module/entity.trigger.json",
        ]),
        ("modules-metadata-data/schemas", [
            "resources/schemas/modules.json",
        ]),
        ("modules-metadata-data", [
            "resources/modules.json",
        ]),
    ],
    classifiers=[
        "Development Status :: 3 - Alpha",
        "Environment :: Console",
        "Intended Audience :: Developers",
        "Intended Audience :: Education",
        "Intended Audience :: Education",
        "License :: OSI Approved :: Apache Software License",
        "Operating System :: OS Independent",
        "Programming Language :: Python",
        "Programming Language :: Python :: 3.6",
        "Programming Language :: Python :: 3.7",
        "Programming Language :: Python :: 3.8",
        "Programming Language :: Python :: 3 :: Only",
        "Topic :: Communications",
        "Topic :: Home Automation",
        "Topic :: System :: Hardware",
    ])


