<a name="unreleased"></a>
## [Unreleased]


<a name="1.1.2"></a>
## [1.1.2] - 2022-07-21
### 🐞 Fixed
- phpstan errors in CardDeck


<a name="1.1.1"></a>
## [1.1.1] - 2022-07-21
### 🐞 Fixed
- correct files are installed in a project


<a name="1.1.0"></a>
## [1.1.0] - 2022-07-21
### 🐞 Fixed
- comply with composer checks

### 🔧 Changed
- code directory follows convention (`src`)


<a name="1.0.0"></a>
## [1.0.0] - 2021-09-29
### 🍰 Added
- card deck template
- default templates for content block & holder
- syntro/silverstripe-elemental-baseitem to provide a default block

### 🔧 Changed
- update readme

### 🗑 Removed
- unnecessary travis build step (will be replaced by a github action)
- namespaced template directory
- outdated bootstrap elemental block modules

### BREAKING CHANGE

Removal of blocks as dependencies might break existing
installations. In order to keep existing installations working, you
should reinstall the following modules manually:
- syntro/silverstripe-elemental-bootstrap-accordionsection
- syntro/silverstripe-elemental-bootstrap-alertsection
- syntro/silverstripe-elemental-bootstrap-featuresection
- syntro/silverstripe-elemental-bootstrap-gallerysection
- syntro/silverstripe-elemental-bootstrap-listgroupsection
- syntro/silverstripe-elemental-bootstrap-spotlightsection
- syntro/silverstripe-elemental-bootstrap-staffsection
- syntro/silverstripe-elemental-bootstrap-testimonialsection


<a name="0.4.1"></a>
## [0.4.1] - 2020-11-29
### 🧬 Dependencies
- syntro/silverstripe-elemental-bootstrap-gallerysection 0.4.0 -> 0.4.1


<a name="0.4.0"></a>
## [0.4.0] - 2020-11-28
### 🍰 Added
- automatic changelog script

### 🗑 Removed
- baseitem requirement

### 🧬 Dependencies
- syntro/silverstripe-elemental-bootstrap-accordionsection 0.3.1 -> 0.4.0
- syntro/silverstripe-elemental-bootstrap-alertsection 0.3.1 -> 0.4.0
- syntro/silverstripe-elemental-bootstrap-featuresection 0.3.1 -> 0.4.0
- syntro/silverstripe-elemental-bootstrap-gallerysection 0.3.1 -> 0.4.0
- syntro/silverstripe-elemental-bootstrap-listgroupsection 0.3.1 -> 0.4.0
- syntro/silverstripe-elemental-bootstrap-spotlightsection 0.3.1 -> 0.4.0
- syntro/silverstripe-elemental-bootstrap-staffsection 0.3.1 -> 0.4.0
- syntro/silverstripe-elemental-bootstrap-testimonialsection 0.3.1 -> 0.4.0


<a name="0.3.1"></a>
## [0.3.1] - 2020-10-26
### 🧬 Dependencies
- modules to 0.3.1


<a name="0.3.0"></a>
## [0.3.0] - 2020-10-26
### 🧬 Dependencies
- modules to ~0.3


<a name="0.2.1"></a>
## [0.2.1] - 2020-10-20
### 🧬 Dependencies
- spotlightsection from 0.2.0 to 0.2.1


<a name="0.2.0"></a>
## [0.2.0] - 2020-10-09
### 🍰 Added
- chglog config

### 🔧 Changed
- use new template locations for baseitems 0.2.0
- remove fixed version for base elements
- set minimum stability to dev

### 🧬 Dependencies
- updated baseitems and sections


<a name="0.1.1"></a>
## [0.1.1] - 2020-08-31

<a name="0.1.0"></a>
## 0.1.0 - 2020-08-31

[Unreleased]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/1.1.2...HEAD
[1.1.2]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/1.1.1...1.1.2
[1.1.1]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/1.1.0...1.1.1
[1.1.0]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/1.0.0...1.1.0
[1.0.0]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/0.4.1...1.0.0
[0.4.1]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/0.4.0...0.4.1
[0.4.0]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/0.3.1...0.4.0
[0.3.1]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/0.3.0...0.3.1
[0.3.0]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/0.2.1...0.3.0
[0.2.1]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/0.2.0...0.2.1
[0.2.0]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/0.1.1...0.2.0
[0.1.1]: https://github.com/syntro-opensource/recipe-elemental-bootstrap/compare/0.1.0...0.1.1
