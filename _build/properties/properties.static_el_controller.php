<?php
/**
 * Properties for the StaticElController snippet.
 *
 * @package static_el_controller
 * @subpackage build
 */
$properties = array(
	array(
		'name' => 'tpl',
		'desc' => 'prop_static_el_controller.tpl_desc',
		'type' => 'textfield',
		'options' => '',
		'value' => 'tpl.StaticElController.item',
		'lexicon' => 'static_el_controller:properties',
	),
	array(
		'name' => 'sortBy',
		'desc' => 'prop_static_el_controller.sortby_desc',
		'type' => 'textfield',
		'options' => '',
		'value' => 'name',
		'lexicon' => 'static_el_controller:properties',
	),
	array(
		'name' => 'sortDir',
		'desc' => 'prop_static_el_controller.sortdir_desc',
		'type' => 'list',
		'options' => array(
			array('text' => 'ASC','value' => 'ASC'),
			array('text' => 'DESC','value' => 'DESC'),
		),
		'value' => 'ASC',
		'lexicon' => 'static_el_controller:properties',
	),
	array(
		'name' => 'limit',
		'desc' => 'prop_static_el_controller.limit_desc',
		'type' => 'numberfield',
		'options' => '',
		'value' => 5,
		'lexicon' => 'static_el_controller:properties',
	),
	array(
		'name' => 'outputSeparator',
		'desc' => 'prop_static_el_controller.outputseparator_desc',
		'type' => 'textfield',
		'options' => '',
		'value' => '',
		'lexicon' => 'static_el_controller:properties',
	),
	array(
		'name' => 'toPlaceholder',
		'desc' => 'prop_static_el_controller.toplaceholder_desc',
		'type' => 'combo-boolean',
		'options' => '',
		'value' => false,
		'lexicon' => 'static_el_controller:properties',
	),
);

return $properties;