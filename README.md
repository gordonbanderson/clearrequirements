# Mappable
[![Build Status](https://travis-ci.org/gordonbanderson/clearrequirements.svg?branch=master)](https://travis-ci.org/gordonbanderson/clearrequirements)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/clearrequirements/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/clearrequirements/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/clearrequirements/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/clearrequirements/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/clearrequirements/badges/build.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/clearrequirements/build-status/master)
[![codecov.io](https://codecov.io/github/gordonbanderson/clearrequirements/coverage.svg?branch=master)](https://codecov.io/github/gordonbanderson/clearrequirements?branch=master)

[![Latest Stable Version](https://poser.pugx.org/weboftalent/clearrequirements/version)](https://packagist.org/packages/weboftalent/clearrequirements)
[![Latest Unstable Version](https://poser.pugx.org/weboftalent/clearrequirements/v/unstable)](//packagist.org/packages/weboftalent/clearrequirements)
[![Total Downloads](https://poser.pugx.org/weboftalent/clearrequirements/downloads)](https://packagist.org/packages/weboftalent/clearrequirements)
[![License](https://poser.pugx.org/weboftalent/clearrequirements/license)](https://packagist.org/packages/weboftalent/clearrequirements)
[![Monthly Downloads](https://poser.pugx.org/weboftalent/clearrequirements/d/monthly)](https://packagist.org/packages/weboftalent/clearrequirements)
[![Daily Downloads](https://poser.pugx.org/weboftalent/clearrequirements/d/daily)](https://packagist.org/packages/weboftalent/clearrequirements)

[![Dependency Status](https://www.versioneye.com/php/weboftalent:clearrequirements/badge.svg)](https://www.versioneye.com/php/weboftalent:clearrequirements)
[![Reference Status](https://www.versioneye.com/php/weboftalent:clearrequirements/reference_badge.svg?style=flat)](https://www.versioneye.com/php/weboftalent:clearrequirements/references)

![codecov.io](https://codecov.io/github/gordonbanderson/clearrequirements/branch.svg?branch=master)

## Maintainers

* Gordon Anderson (Nickname: nontgor)
	<gordon.b.anderson@gmail.com>

##Introduction

This module allows clearing of CSS and JS files from a template using a YML config file.  Use this
if you wish to manually combine and compress JS and CSS files.
 
##Documentation
### YML File
The YML config file, which can be named arbitrarily, simply consists of a list of JS and CSS
files that are to be cleared.  Note that a unique ID can also be provided, this is the only
way to clear custom scripts.

```yml
---
Name: jakayanrides-clear-requirements
After: clear-requirements-extensions
---
RequirementsClearer:
  JavaScript:
    - framework/thirdparty/jquery/jquery.js
    - framework/thirdparty/jquery-validate/lib/jquery.form.js
    - framework/thirdparty/jquery-validate/jquery.validate.pack.js
    - comments/javascript/CommentsInterface.js
    - mappable/javascript/google/FullScreenControl.js
    - mappable/javascript/google/markerclusterer.js
    - mappable/javascript/google/maputil.js
  CSS:
    - foundationforms/css/foundationforms.css
```

### Executing Requirements Clearning
Prior to including your JavaScript call this in your template:
```
$ClearCustomRequirements
```

### Clear All Requirements
This does not use the above configuration file and simply removes all requirements.  Note this
includes custom scripts as well.

If this functionality is desired add this to your template prior to including JavaScript.
```
$ClearAllRequirements
```

##Requirements
* SilverStripe 3.1

##TODO
* Tests
