<?php

// https://www.advancedcustomfields.com/resources/register-fields-via-php/

return array (
    'key' => 'group_'.$blockName,
    'name' => $blockName,
    'label' => str_replace('-', ' ', ucfirst($blockName)),
    'display' => 'block',
    'sub_fields' => array(
        array(
            'key' => 'field_'.$blockName.'_hide',
            'label' => 'Hide this block',
            'name' => 'hide',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '48',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_'.$blockName.'_section_header',
            'label' => 'Section header',
            'name' => 'section_header',
            'type' => 'wysiwyg',
            'instructions' => 'Content displayed at the top',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 0,
            'delay' => 0,
        ),
    ),
    'min' => '',
    'max' => '',
);
