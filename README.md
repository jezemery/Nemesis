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

### Using ACF Base fields

When creating a field group you are able to utilise the base fields provided by Nemesis by doing
the following:

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
This will then make all the base fieds available to you so you can then register a field group 
using these fields like this:

```
<?php

namespace ACF\FieldGroups;

use NanoSoup\Nemesis\ACF\BaseFields;

/**
 * Class Testimonials
 * @package ACF\FieldGroups
 */
class Testimonials extends BaseFields
{
    /**
     *
     */
    public function init()
    {
        add_action('acf/init', [$this, 'registerFieldGroup']);
    }

    /**
     *
     */
    public function registerFieldGroup()
    {
        acf_add_local_field_group([
            'key' => 'group_block_testimonial',
            'title' => 'Block: Testimonial',
            'fields' => [
                $this->textarea('block_testimonial', 'Testimonial'),
                $this->text('block_testimonial', 'Author'),
                $this->image('block_testimonial', 'Avatar')
            ],
            'location' => [
                [
                    [
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/testimonial',
                    ]
                ]
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ]);
    }
}

```

### Using Blocks (Gutenberg)
We have included helpers for programmatically creating blocks to be used within the Gutenberg editor
within Nemesis.

The interface defines what methods need to be available in your new "Block" and the Block class
makes the base "Add Block" functionality available to you.

To create a new block you would do something like this:

```
<?php

namespace ACF\Blocks;

use ACF\Block;
use ACF\BlockInterface;
use Timber\Timber;

/**
 * Class Testimonials
 * @package ACF\Blocks
 */
class Testimonials extends Block implements BlockInterface
{
    /**
     * @return mixed|void
     */
    public function init()
    {
        add_action('init', [$this, 'registerBlock']);
    }

    /**
     * @return mixed|void
     */
    public function registerBlock()
    {
        $this->newBlock('testimonial', 'Testimonial', [$this, 'renderBlock']);
    }

    /**
     * @param $block
     * @return mixed|void
     */
    public function renderBlock($block)
    {
        $vars['block'] = $block;
        $vars['fields'] = get_fields();

        $vars['fields']['avatar'] = new \Timber\Image($vars['fields']['avatar']);

        Timber::render( get_stylesheet_directory() . '/classes/ACF/Blocks/views/content-testimonials.twig', $vars );
    }
}
```
**Note:** this above example is built with the assumption you are using Timber - if not you
would just need to modify your render method to either output HTML or locate your template a 
different way.

## Structure of this package
The folder structure of this package is an outline for how you should be laying out the classes in your website.

Everything should be in dedicated folders to keep everything distinctly separate. The only class outside of a directory should
be the Setup class.

## Contributing
To contribute to this package please fork this repor and then submit your pull request to be reviewed