# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [0.3.0] - 2017-04-11
### Changed
- Changed licensing from GPL 2.0+ to MIT. See [LICENSE file](LICENSE).

## [0.2.5] - 2016-06-08
### Removed
- Remove `beberlei/assert` and all assertions until a better replacement has been found.

## [0.2.4] - 2016-04-05
### Changed
- Update Composer dependencies.

## [0.2.3] - 2016-03-22
### Fixed
- Switch `beberlei/assert` back to official branch. Issue [#138](https://github.com/beberlei/assert/issues/138) has been fixed with v2.5.

## [0.2.2] - 2016-03-04
### Fixed
- Switch `beberlei/assert` to own fork until [#138](https://github.com/beberlei/assert/issues/138) has been fixed.

## [0.2.1] - 2016-03-04
### Added
- Added `AssertionFailedException` to be used with the `Assert\Assertion` class.
- Adapted unit tests.

## [0.2.0] - 2016-02-18
### Fixed
- Removed constructor from `ModuleExceptionTrait`. It was causing conflicts.
- Adapted unit tests.
- Several PSR2 fixes.

## [0.1.1] - 2016-02-17
### Fixed
- Renamed `$module` property to `$_bn_module` to avoid conflicts.

## [0.1.0] - 2016-02-16
### Added
- Initial release to GitHub.

[0.3.0]: https://github.com/brightnucleus/exceptions/compare/v0.2.5...v0.3.0
[0.2.5]: https://github.com/brightnucleus/exceptions/compare/v0.2.4...v0.2.5
[0.2.4]: https://github.com/brightnucleus/exceptions/compare/v0.2.3...v0.2.4
[0.2.3]: https://github.com/brightnucleus/exceptions/compare/v0.2.2...v0.2.3
[0.2.2]: https://github.com/brightnucleus/exceptions/compare/v0.2.1...v0.2.2
[0.2.1]: https://github.com/brightnucleus/exceptions/compare/v0.2.0...v0.2.1
[0.2.0]: https://github.com/brightnucleus/exceptions/compare/v0.1.1...v0.2.0
[0.1.1]: https://github.com/brightnucleus/exceptions/compare/v0.1.0...v0.1.1
[0.1.0]: https://github.com/brightnucleus/exceptions/compare/v0.0.0...v0.1.0
