<?php

namespace SS_ACF\BaseFields;

/**
 * Class BaseFields
 *
 * Define the base fields to include within flexible layouts
 *
 * @package SS_ACF\Components
 */
class BaseFields
{

    /**
     * Basic Text field
     * @param $prefix
     * @param string $label
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function text($prefix, $label = 'Title', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_text_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'text',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue
        ];
    }

    /**
     * Basic Textarea field
     * @param $prefix
     * @param string $label
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function textarea($prefix, $label = 'Content', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_textarea_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'textarea',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue
        ];
    }

    /**
     * Basic WYSIWYG content area
     * @param $prefix
     * @param string $label
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function wsiwyg($prefix, $label = 'Main content', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_main_content_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'wysiwyg',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 1
        ];
    }

    /**
     * Basic Select field
     * @param $prefix
     * @param string $label
     * @param array $choices
     * @param int $multiple
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function select($prefix, $label = 'Choices', $choices = [], $multiple = 0, $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_select_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'select',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'choices' => $choices,
            'multiple' => $multiple,
            'ui' => $multiple ? 1 : 0,
            'ajax' => $multiple ? 1 : 0
        ];
    }

    /**
     * Basic Select field
     * @param $prefix
     * @param string $label
     * @param array $choices
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function checkbox($prefix, $label = 'Choices', $choices = [], $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_checkbox_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'checkbox',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'choices' => $choices,
            'layout' => 0
        ];
    }

    /**
     * Basic Select field
     * @param $prefix
     * @param string $label
     * @param array $choices
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function radio($prefix, $label = 'Choices', $choices = [], $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_radio_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'checkbox',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'choices' => $choices,
            'layout' => 0
        ];
    }

    /**
     * True/False Choice field
     * @param $prefix
     * @param string $label
     * @param int|string $message
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function choice($prefix, $label = 'Choice', $message = 0, $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_choice_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'true_false',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'message' => $message,
            'ui' => 1,
        ];
    }

    /**
     * Basic Number field
     * @param $prefix
     * @param string $label
     * @param string $step
     * @param string $min
     * @param string $max
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function number($prefix, $label = 'Number', $step = '', $min = '', $max = '', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_number_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'text',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'step' => $step,
            'min' => $min,
            'max' => $max,
        ];
    }

    /**
     * Basic Image field
     * @param $prefix
     * @param string $label
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function image($prefix, $label = 'Image', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_image_'  . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'image',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'return_format' => 'ID',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => 0,
            'min_height' => 0,
            'max_width' => 0,
            'max_height' => 0
        ];
    }

    /**
     * Basic File field
     * @param $prefix
     * @param string $label
     * @param string $mimeTypes
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function file($prefix, $label = 'File', $mimeTypes = '', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_file_'  . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'file',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'return_format' => 'ID',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_size' => 0,
            'max_size' => 0,
            'mime_types' => $mimeTypes
        ];
    }

    /**
     * Basic Email field
     * @param $prefix
     * @param string $label
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function email($prefix, $label = 'Email', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_email_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'text',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue
        ];
    }

    /**
     * Basic Password field
     * @param $prefix
     * @param string $label
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function password($prefix, $label = 'Password', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_password_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'text',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue
        ];
    }

    /**
     * Basic URL field
     * @param $prefix
     * @param string $label
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function url($prefix, $label = 'URL', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_url_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'url',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue
        ];
    }

    /**
     * Basic Page Link field
     * @param $prefix
     * @param string $label
     * @param int $multiple
     * @param mixed $post_type
     * @param mixed $taxonomy
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function link($prefix, $label = 'Link', $multiple = 0, $post_type = '', $taxonomy = '', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_link_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'page_link',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'multiple' => $multiple,
            'post_type' => $post_type,
            'taxonomy' => $taxonomy
        ];
    }

    /**
     * Basic Relationship field
     * @param $prefix
     * @param string $label
     * @param int $multiple
     * @param mixed $postType
     * @param mixed $taxonomy
     * @param string $return
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function relationship($prefix, $label = 'Relationship', $multiple = 0, $postType = '', $taxonomy = '',  $return = 'object', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_relationship_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'relationship',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'multiple' => $multiple,
            'post_type' => $postType,
            'taxonomy' => $taxonomy,
            'return_format' => $return,
            'add_term' => 0
        ];
    }

    /**
     * Basic Post field
     * @param $prefix
     * @param string $label
     * @param int $multiple
     * @param string $return
     * @param mixed $postType
     * @param mixed $taxonomy
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function post($prefix, $label = 'Post', $multiple = 0, $postType = '', $taxonomy = '', $return = 'object', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_post_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'post_object',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'multiple' => $multiple,
            'post_type' => $postType,
            'taxonomy' => $taxonomy,
            'return_format' => $return
        ];
    }

    /**
     * Basic Taxonomy field
     * @param $prefix
     * @param string $label
     * @param int $multiple
     * @param string $return
     * @param mixed $fieldType
     * @param mixed $taxonomy
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function taxonomy($prefix, $label = 'Taxonomy', $multiple = 0, $fieldType = 'select', $taxonomy = '', $return = 'object', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_taxonomy_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'taxonomy',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'multiple' => $multiple,
            'field_type' => $fieldType,
            'taxonomy' => $taxonomy,
            'return_format' => $return,
            'add_term' => 0
        ];
    }

    /**
     * Google Map field
     * @param $prefix
     * @param string $label
     * @param int $zoom
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function map($prefix, $label = 'Map', $zoom = 16, $conditions = 0, $instructions = 'Centralise the map over the location (at any convenient zoom level).', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_map_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'google_map',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'zoom' => $zoom
        ];
    }

    /**
     * Date Picker field
     * @param $prefix
     * @param string $label
     * @param string $displayFormat
     * @param string $returnFormat
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function date($prefix, $label = 'Date', $displayFormat = 'd/m/Y', $returnFormat = 'd/m/Y', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_date_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'date_picker',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'display_format' => $displayFormat,
            'return_format' => $returnFormat
        ];
    }

    /**
     * Time Picker field
     * @param $prefix
     * @param string $label
     * @param string $displayFormat
     * @param string $returnFormat
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function time($prefix, $label = 'Time', $displayFormat = 'g:i a', $returnFormat = 'g:i a', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_time_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'time_picker',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'display_format' => $displayFormat,
            'return_format' => $returnFormat
        ];
    }

    /**
     * Date Time Picker field
     * @param $prefix
     * @param string $label
     * @param string $displayFormat
     * @param string $returnFormat
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function datetime($prefix, $label = 'Date Time', $displayFormat = 'd/m/Y g:i a', $returnFormat = 'd/m/Y g:i a', $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_date_time_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'date_time_picker',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'display_format' => $displayFormat,
            'return_format' => $returnFormat
        ];
    }

    /**
     * Repeater field
     * @param array $args
     * @return array
     */
    public function repeater($args)
    {
        $defaults = [
            'button_label' => '',
            'label' => '',
            'prefix' => 'ss_acf',
            'min' => '',
            'max' => '',
        ];

        $settings = array_merge($defaults, $args['settings']);

        return [
            'key' => 'field_repeater_' . $this->generateUniquePrefix($settings['prefix'], $settings['label']),
            'label' => $settings['label'],
            'name' => strtolower(str_replace(' ', '_', $settings['label'])),
            'type' => 'repeater',
            'sub_fields' => $args['elements'],
            'min' => $settings['min'],
            'max' => $settings['max'],
            'layout' => 'block',
            'collapsed' => 'true',
            'button_label' => $settings['button_label']
        ];
    }

    /**
     * Tab field
     * @param $prefix
     * @param $label
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function addTab($prefix, $label, $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'type' => 'tab',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue
        ];
    }

    /**
     * Icon Select field
     * @param $prefix
     * @param string $label
     * @param int $multiple
     * @param int $conditions
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function icon($prefix, $label = 'Icon', $multiple = 0, $conditions = 0, $instructions = '', $defaultValue = '', $required = 0)
    {
        return [
            'key' => 'field_icon_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'select',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue,
            'choices' => [
                '' => 'None',
                'icon-bicycle' => 'Bicycle',
                'icon-bowl' => 'Bowl',
                'icon-bus' => 'Bus',
                'icon-cctv' => 'CCTV',
                'icon-disabled' => 'Disabled',
                'icon-elevator' => 'Elevator',
                'icon-lightning' => 'Lightning',
                'icon-location' => 'Location',
                'icon-mail' => 'Mail',
                'icon-padlock' => 'Padlock',
                'icon-phone' => 'Phone',
                'icon-reception' => 'Reception',
                'icon-rocket' => 'Rocket',
                'icon-screen' => 'Screen',
                'icon-shower' => 'Shower',
                'icon-stairs' => 'Stairs',
                'icon-temperature' => 'Temperature',
                'icon-tube' => 'Tube',
                'icon-walking' => 'Walking',
            ],
            'multiple' => $multiple,
            'ui' => $multiple ? 1 : 0,
            'ajax' => $multiple ? 1 : 0
        ];
    }

    /**
     * Anchor Menu Text field
     * @param $prefix
     * @param string $label
     * @param string $instructions
     * @param string $defaultValue
     * @param int $required
     * @return array
     */
    public function anchorMenuText($prefix, $label = 'Anchor Menu Text', $instructions = '', $defaultValue = '', $required = 0)
    {
        $conditions = [
            [
                [
                    'field' => 'field_has_anchor_menu',
                    'operator' => '==',
                    'value' => '1',
                ]
            ]
        ];

        return [
            'key' => 'field_text_' . $this->generateUniquePrefix($prefix, $label),
            'label' => $label,
            'name' => strtolower(str_replace(' ', '_', $label)),
            'type' => 'text',
            'instructions' => $instructions,
            'required' => $required,
            'conditional_logic' => $conditions,
            'default_value' => $defaultValue
        ];
    }

    /**
     * @param $prefix
     * @param $label
     * @return string
     */
    public function generateUniquePrefix($prefix, $label)
    {
        return md5($prefix . strtolower(str_replace(' ', '_', $label)));
    }

}
