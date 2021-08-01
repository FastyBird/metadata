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
import sys
from os.path import abspath, dirname, exists, join, normpath

# This logic has been adapted from that of PyInstaller
# https://github.com/pyinstaller/pyinstaller/

PACKAGE_PATH = abspath(dirname(__file__))

DIST_SPEC = 'modules_metadata'

# Base version, which will be augmented with Git information
BASE_VERSION = '0.3.0'

# This string will be replaced by `git-archive`
# with the abbreviated commit hash
git_archive_rev = "$Format:%h$"


def git_describe():
    from subprocess import check_call, check_output

    # Get the version from the local Git repository
    check_call(['git', 'update-index', '-q', '--refresh'], cwd=PACKAGE_PATH)

    desc = check_output(['git', 'describe', '--long', '--dirty', '--tag'], cwd=PACKAGE_PATH)
    desc = desc.decode('utf-8').strip()

    tag, commits, rev = desc.split('-', 2)
    tag = tag.lstrip('v')
    commits = int(commits)

    return tag, commits, rev


def get_version():
    # Git repo
    # If a local git repository is present, use `git describe` to provide a rich version
    git_dir = normpath(join(PACKAGE_PATH, '.git'))

    if exists(git_dir):
        tag, commits, rev = git_describe()

        # Ensure the base version matches the Git tag
        if tag != BASE_VERSION:
            raise Exception('Git revision different from base version')

        # No local version if we're on a tag
        if commits == 0 and not rev.endswith('dirty'):
            return BASE_VERSION

        return '{}+{}-{}'.format(BASE_VERSION, commits, rev)

    # Git archive
    # If this was produced via `git archive`, we'll use the version it provides
    if not git_archive_rev.startswith('$'):
        return '{}+g{}'.format(BASE_VERSION, git_archive_rev)

    # Package resource
    # Otherwise, we're either installed (e.g. via pip), or running from
    # an 'sdist' source distribution, and have a local PKG_INFO file.
    import pkg_resources

    try:
        return pkg_resources.get_distribution(DIST_SPEC).version

    except pkg_resources.DistributionNotFound:
        pass

    # This shouldn't be able to happen
    sys.stderr.write('WARNING: Failed to determine version!\n')

    return BASE_VERSION


__version__ = get_version()

if __name__ == '__main__':
    print(__version__)
