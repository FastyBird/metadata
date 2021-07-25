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

from glob import glob
from setuptools import setup
from os import path

this_directory = path.abspath(path.dirname(__file__))

with open(path.join(this_directory, "README.md"), encoding="utf-8") as f:
    long_description = f.read()

VERSION = "0.2.2"

setup(
    version=VERSION,
    name="modules-metadata",
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
        "setuptools",
        "simplejson>=3.17.2"
    ],
    download_url="https://github.com/FastyBird/modules-metadata/archive/%s.tar.gz" % VERSION,
    package_dir={
        "resources": "resources",
    },
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


