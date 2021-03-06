<?php

// https://www.advancedcustomfields.com/resources/register-fields-via-php/

return array(		
	'key' => 'group_'.$blockName,
	'name' => $blockName,
	'label' => str_replace('-', ' ', ucfirst($blockName)),
	'display' => 'row',
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
			'key' => 'field_'.$blockName.'_tab1',
			'label' => 'Image',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_'.$blockName.'_image_images',
			'label' => 'Images',
			'name' => 'image_images',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 1,
			'max' => 3,
			'layout' => 'table',
			'button_label' => 'Add Image',
			'sub_fields' => array(
				array(
					'key' => 'field_'.$blockName.'_image',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_'.$blockName.'_breakpoints',
					'label' => 'Visible Breakpoints',
					'name' => 'breakpoints',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'all' => 'All breakpoints',
						'mobile' => 'Mobile (xs,sm)',
						'laptop' => 'Laptop (md, lg)',
						'desktop' => 'Desktop (xl)',
					),
					'default_value' => array(
						0 => 'all',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_'.$blockName.'_maximum_width',
					'label' => 'Maximum Width',
					'name' => 'maximum_width',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 1200,
					'prepend' => '',
					'append' => 'px',
					'maxlength' => '',
				),
				array(
					'key' => 'field_'.$blockName.'_image_height',
					'label' => 'Image Height',
					'name' => 'image_height',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'image-ratio' => 'Scale down',
						'keep-height' => 'Keep height',
					),
					'default_value' => array(
						0 => 'image-ratio',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
			),
		),
		array(
			'key' => 'field_'.$blockName.'_tab2',
			'label' => 'Settings',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_'.$blockName.'_image_wrapper',
			'label' => 'Image Wrapper',
			'name' => 'image_wrapper',
			'type' => 'select',
			'instructions' => 'The maximum width of the image in pixels.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'section' => 'Section (full width)',
				'container' => 'Container (content width)',
			),
			'default_value' => array(
				0 => 'section',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_'.$blockName.'_koro_color',
			'label' => 'Koro color',
			'name' => 'koro_color',
			'type' => 'select',
			'instructions' => 'Select the color of the Koro',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'yellow' => 'Yellow',
				'pink' => 'Pink',
				'turquoise' => 'Turquoise',
				'blue' => 'Blue',
				'white' => 'White'
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
	),
	'min' => '',
	'max' => '',
);
