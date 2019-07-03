# Clear Requirements

## Maintainers

* Gordon Anderson (Nickname: nontgor)
	<gordon.b.anderson@gmail.com>

## Introduction

This module allows clearing of CSS and JS files from a template using a YML config file.  Use this
if you wish to manually combine and compress JS and CSS files.
 
## Documentation
### YML File
The YML config file, which can be named arbitrarily, simply consists of a list of JS and CSS
files that are to be cleared.  Note that a unique ID can also be provided, this is the only
way to clear custom scripts.

```yml
---
Name: jakayanrides-clear-requirements
After: clear-requirements-extensions
---
WebOfTalent\ClearRequirements\RequirementsClearer:
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

## Requirements
* SilverStripe 3,4

## Install
### SS4
```
composer require 'weboftalent/clearrequirements'
```

### SS3
```
composer require 'weboftalent/clearrequirements:^1'
```

## TODO
* Tests
