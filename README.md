# Nemesis Package

## What is this package?
This package is to provide base classes for use when developing new websites with ACF.

Common classes will include
- Base fields for ACF

## Using this package
To use this package you will need to run the following.

```
composer require nanosoup/nemesis
```

This will install the package based on the current state of the master branch.

You can then use the classes within your website like this:

```
<?php
/**
 * Setup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ThemeName
 */

namespace ThemeName\Namespace;

use NanoSoup\Nemesis\BaseFields;

/**
 * Class ACFFields
 */
class ACFFields extends BaseFields
{
    ...
}

```

## Structure of this package
The folder structure of this package is an outline for how you should be laying out the classes in your website.

Everything should be in dedicated folders to keep everything distinctly separate. The only class outside of a directory should
be the Setup class.

## Contributing
To contribute to this package please branch off using the format `feature/XXXXXXXX`

Once complete submit this as a pull request for review.