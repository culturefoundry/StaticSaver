<?php
/**
 * Loads system settings into build
 *
 * @package static_el_controller
 * @subpackage build
 */
$settings = array();

$settings['enable_rewrite']= $modx->newObject('modSystemSetting');
$settings['enable_rewrite']->fromArray(array(
    'key' => 'static_el_controller.enable_rewrite',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);

$settings['chunk_file_extension']= $modx->newObject('modSystemSetting');
$settings['chunk_file_extension']->fromArray(array(
	'key' => 'static_el_controller.chunk_file_extension',
	'value' => 'html',
	'xtype' => 'textfield',
	'namespace' => 'static_el_controller',
	'area' => 'file',
),'',true,true);

$settings['snippet_file_extension']= $modx->newObject('modSystemSetting');
$settings['snippet_file_extension']->fromArray(array(
    'key' => 'static_el_controller.snippet_file_extension',
    'value' => 'php',
    'xtype' => 'textfield',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);


$settings['plugin_file_extension']= $modx->newObject('modSystemSetting');
$settings['plugin_file_extension']->fromArray(array(
    'key' => 'static_el_controller.plugin_file_extension',
    'value' => 'php',
    'xtype' => 'textfield',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);


$settings['template_file_extension']= $modx->newObject('modSystemSetting');
$settings['template_file_extension']->fromArray(array(
    'key' => 'static_el_controller.template_file_extension',
    'value' => 'html',
    'xtype' => 'textfield',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);

$settings['element_media_source']= $modx->newObject('modSystemSetting');
$settings['element_media_source']->fromArray(array(
	'key' => 'static_el_controller.element_media_source',
	'value' => '1',
	'xtype' => 'modx-combo-source',
	'namespace' => 'static_el_controller',
	'area' => 'file',
),'',true,true);

$settings['static_by_default']= $modx->newObject('modSystemSetting');
$settings['static_by_default']->fromArray(array(
    'key' => 'static_el_controller.static_by_default',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);

$settings['include_category']= $modx->newObject('modSystemSetting');
$settings['include_category']->fromArray(array(
    'key' => 'static_el_controller.include_category',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);

$settings['include_id']= $modx->newObject('modSystemSetting');
$settings['include_id']->fromArray(array(
    'key' => 'static_el_controller.include_id',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);

$settings['base_element_path']= $modx->newObject('modSystemSetting');
$settings['base_element_path']->fromArray(array(
    'key' => 'static_el_controller.base_element_path',
    'value' => 'static-elements/',
    'xtype' => 'textfield',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);

return $settings;