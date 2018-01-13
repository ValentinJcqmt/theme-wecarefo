<?php
acf_add_local_field_group(array(
	'key' => 'group_5a58c8373b681',
	'title' => 'Contents v2',
	'fields' => array(
		array(
			'key' => 'field_5a58c8453d08b',
			'label' => '',
			'name' => 'content_type',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'5a58c96586ee8' => array(
					'key' => '5a58c96586ee8',
					'name' => 'heading_2',
					'label' => 'Heading 2',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58caa962c35',
							'label' => 'Title',
							'name' => 'title',
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
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5a58cab262c36',
							'label' => 'Number',
							'name' => 'number',
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
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a58cabd62c37' => array(
					'key' => '5a58cabd62c37',
					'name' => 'one_column',
					'label' => 'One column',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58cb7aebcb5',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'qtranslate_wysiwyg',
							'instructions' => '',
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
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a5a32381b59e' => array(
					'key' => '5a5a32381b59e',
					'name' => 'pdf-file',
					'label' => 'Bloc file download',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a5a32381b59f',
							'label' => 'File title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5a5a32381b5a0',
							'label' => 'File',
							'name' => 'file',
							'type' => 'file',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_size' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a5a30020fa57' => array(
					'key' => '5a5a30020fa57',
					'name' => 'linked_btns',
					'label' => 'Two column - Push Buttons',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a5a30380fa5d',
							'label' => 'Button list',
							'name' => 'btn_list',
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
							'min' => 0,
							'max' => 4,
							'layout' => 'table',
							'button_label' => 'Ajouter un bouton',
							'sub_fields' => array(
								array(
									'key' => 'field_5a5a306c0fa5e',
									'label' => 'Texte',
									'name' => 'texte',
									'type' => 'text',
									'instructions' => '',
									'required' => 1,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5a5a308e0fa5f',
									'label' => 'Page link',
									'name' => 'page_link',
									'type' => 'page_link',
									'instructions' => '',
									'required' => 1,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'post_type' => array(
									),
									'taxonomy' => array(
									),
									'allow_null' => 0,
									'allow_archives' => 0,
									'multiple' => 0,
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a58cdb8c3ac0' => array(
					'key' => '5a58cdb8c3ac0',
					'name' => 'one_column_slider',
					'label' => 'One column : slider',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58cdc9c3ac1',
							'label' => 'Slider',
							'name' => 'slider',
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
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => '',
							'sub_fields' => array(
								array(
									'key' => 'field_5a58cddbc3ac2',
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
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a58cdf6c3ac3' => array(
					'key' => '5a58cdf6c3ac3',
					'name' => 'one_column_video_centered',
					'label' => 'One column : video centered',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58cdffc3ac4',
							'label' => 'Video',
							'name' => 'video',
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
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a58ce0ac3ac5' => array(
					'key' => '5a58ce0ac3ac5',
					'name' => 'one_column_citation',
					'label' => 'One column : citation',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58ce30c3ac8',
							'label' => 'Citation',
							'name' => 'citation',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'new_lines' => '',
						),
						array(
							'key' => 'field_5a58ce40c3ac9',
							'label' => 'Name',
							'name' => 'name',
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
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5a58ce4bc3aca',
							'label' => 'Company',
							'name' => 'company',
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
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a58ce57c3acb' => array(
					'key' => '5a58ce57c3acb',
					'name' => 'two_columns_text',
					'label' => 'Two columns : text',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58ce67c3acc',
							'label' => 'Text left',
							'name' => 'text_left',
							'type' => 'qtranslate_wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_5a58ce80c3acd',
							'label' => 'Text right',
							'name' => 'text_right',
							'type' => 'qtranslate_wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a58ce1cc3ac7' => array(
					'key' => '5a58ce1cc3ac7',
					'name' => 'two_colums_citation_content',
					'label' => 'Two colums : citation - content',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58ce99c3ace',
							'label' => 'Citation',
							'name' => 'citation',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5a58ceabc3acf',
									'label' => 'Text',
									'name' => 'text',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => '',
								),
								array(
									'key' => 'field_5a58cebbc3ad0',
									'label' => 'Name',
									'name' => 'name',
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
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5a58cec0c3ad1',
									'label' => 'Company',
									'name' => 'company',
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
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
							),
						),
						array(
							'key' => 'field_5a58ced3c3ad2',
							'label' => 'Content',
							'name' => 'content',
							'type' => 'qtranslate_wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a58ceefc3ad3' => array(
					'key' => '5a58ceefc3ad3',
					'name' => 'two_colums_content_citation',
					'label' => 'Two colums : content - citation',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58cef7c3ad4',
							'label' => 'Content',
							'name' => 'content',
							'type' => 'qtranslate_wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_5a58cf04c3ad5',
							'label' => 'Citation',
							'name' => 'citation',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5a58cf15c3ad6',
									'label' => 'Text',
									'name' => 'text',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => '',
								),
								array(
									'key' => 'field_5a58cf23c3ad7',
									'label' => 'Name',
									'name' => 'name',
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
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5a58cf29c3ad8',
									'label' => 'Company',
									'name' => 'company',
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
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a58cf55c3ada' => array(
					'key' => '5a58cf55c3ada',
					'name' => 'two_colums_image_content',
					'label' => 'Two colums : image - content',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58cf61c3adb',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'return_format' => '',
							'preview_size' => 'thumbnail',
							'library' => '',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5a58cf92c3adc',
							'label' => 'Content',
							'name' => 'content',
							'type' => 'qtranslate_wysiwyg',
							'instructions' => '',
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
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_5a58cfdac3ae0',
							'label' => 'Credits',
							'name' => 'credits',
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
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'5a58cfa9c3add' => array(
					'key' => '5a58cfa9c3add',
					'name' => 'two_colums_content_image',
					'label' => 'Two colums : content- image',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5a58cfa9c3adf',
							'label' => 'Content',
							'name' => 'content',
							'type' => 'qtranslate_wysiwyg',
							'instructions' => '',
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
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_5a58cfa9c3ade',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
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
							'key' => 'field_5a58cfe1c3ae1',
							'label' => 'Credits',
							'name' => 'credits',
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
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Choose a layout',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '7',
			),
			array(
				'param' => 'page',
				'operator' => '!=',
				'value' => '5',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'page_attributes',
	),
	'active' => 1,
	'description' => '',
));

