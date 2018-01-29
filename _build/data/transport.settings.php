<?php
/**
 * Loads system settings into build
 *
 * @package static_el_controller
 * @subpackage build
 */
$settings = array();

$settings['static_enable_rewrite']= $modx->newObject('modSystemSetting');
$settings['static_enable_rewrite']->fromArray(array(
    'key' => 'static_el_controller.enable_rewrite',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);

$settings['static_file_extension']= $modx->newObject('modSystemSetting');
$settings['static_file_extension']->fromArray(array(
    'key' => 'static_el_controller.static_file_extension',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);

$settings['static_chunk_file_extension']= $modx->newObject('modSystemSetting');
$settings['static_chunk_file_extension']->fromArray(array(
	'key' => 'static_el_controller.static_chunk_file_extension',
	'value' => 'php',
	'xtype' => 'textfield',
	'namespace' => 'static_el_controller',
	'area' => 'file',
),'',true,true);

$settings['static_snippet_file_extension']= $modx->newObject('modSystemSetting');
$settings['static_snippet_file_extension']->fromArray(array(
    'key' => 'static_el_controller.static_snippet_file_extension',
    'value' => 'php',
    'xtype' => 'textfield',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);


$settings['static_plugin_file_extension']= $modx->newObject('modSystemSetting');
$settings['static_plugin_file_extension']->fromArray(array(
    'key' => 'static_el_controller.static_plugin_file_extension',
    'value' => 'php',
    'xtype' => 'textfield',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);


$settings['static_template_file_extension']= $modx->newObject('modSystemSetting');
$settings['static_template_file_extension']->fromArray(array(
    'key' => 'static_el_controller.static_template_file_extension',
    'value' => 'php',
    'xtype' => 'textfield',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);


$settings['static_tv_file_extension']= $modx->newObject('modSystemSetting');
$settings['static_tv_file_extension']->fromArray(array(
    'key' => 'static_el_controller.static_tv_file_extension',
    'value' => 'php',
    'xtype' => 'textfield',
    'namespace' => 'static_el_controller',
    'area' => 'file',
),'',true,true);


$settings['static_plugin_media_source']= $modx->newObject('modSystemSetting');
$settings['static_plugin_media_source']->fromArray(array(
	'key' => 'static_el_controller.static_plugin_media_source',
	'value' => '1',
	'xtype' => 'modx-combo-source',
	'namespace' => 'static_el_controller',
	'area' => 'file',
),'',true,true);

$settings['static_snippet_media_source']= $modx->newObject('modSystemSetting');
$settings['static_snippet_media_source']->fromArray(array(
	'key' => 'static_el_controller.static_snippet_media_source',
	'value' => '1',
	'xtype' => 'modx-combo-source',
	'namespace' => 'static_el_controller',
	'area' => 'file',
),'',true,true);

$settings['static_template_media_source']= $modx->newObject('modSystemSetting');
$settings['static_template_media_source']->fromArray(array(
	'key' => 'static_el_controller.static_template_media_source',
	'value' => '1',
	'xtype' => 'modx-combo-source',
	'namespace' => 'static_el_controller',
	'area' => 'file',
),'',true,true);

$settings['static_tv_media_source']= $modx->newObject('modSystemSetting');
$settings['static_tv_media_source']->fromArray(array(
	'key' => 'static_el_controller.static_tv_media_source',
	'value' => '1',
	'xtype' => 'modx-combo-source',
	'namespace' => 'static_el_controller',
	'area' => 'file',
),'',true,true);

$settings['static_chunk_media_source']= $modx->newObject('modSystemSetting');
$settings['static_chunk_media_source']->fromArray(array(
	'key' => 'static_el_controller.static_chunk_media_source',
	'value' => '1',
	'xtype' => 'modx-combo-source',
	'namespace' => 'static_el_controller',
	'area' => 'file',
),'',true,true);

$settings['static_default']= $modx->newObject('modSystemSetting');
$settings['static_default']->fromArray(array(
    'key' => 'static_el_controller.static_default',
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

return $settings;