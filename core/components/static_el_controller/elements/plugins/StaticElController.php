<?php
/**
* StaticElController plugin
*
* Copyright 2018 by Culture Foundry <andrew@culturefoundry.com>
*
* StaticElController is free software; you can redistribute it and/or modify it under the
* terms of the GNU General Public License as published by the Free Software
* Foundation; either version 2 of the License, or (at your option) any later
* version.
*
* StaticElController is distributed in the hope that it will be useful, but WITHOUT ANY
* WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
* A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with
* miniShop; if not, write to the Free Software Foundation, Inc., 59 Temple
* Place, Suite 330, Boston, MA 02111-1307 USA
*
* @package static_el_controller
*/

switch ($modx->event->name)
{
    case 'OnTempFormRender':
        $type = 'template';
        $name_selector = 'templatename';
		$content_input = 'content';
        break;
    case 'OnChunkFormRender':
        $type = 'chunk';
        break;
    case 'OnSnipFormRender':
        $type = 'snippet';
        break;
    case 'OnPluginFormRender':
        $type = 'plugin';
		$content_input = 'plugincode';
        break;
    default: $type = null;
        break;
}

$config = array(
    'type' => $type,
    'nameInput' => 'modx-' . $type . '-' . (isset($name_selector) ? $name_selector : 'name'),
    'staticFile' => 'modx-' . $type . '-static-file',
    'sourceInput' => 'modx-' . $type . '-static-source',
    'categoryInput' => 'modx-' . $type . '-category',
    'contentInput' => 'x-form-el-modx-' . $type . '-' . (isset($content_input) ? $content_input : 'snippet'),
    'isStatic' => 'modx-' . $type . '-static',
    'source' => $modx->getOption('static_el_controller.element_media_source'),
    'fileExt' => 'static_el_controller.' . $type . '_file_extension',
    'basePath' => $modx->getOption('static_el_controller.base_element_path'),
);

if (isset($type))
{
    $json_config = json_encode($config);
    $modx->regClientStartupScript('<script src="' . $modx->getOption('assets_url') . 'components/static_el_controller/js/static_el_controller.js"></script>');
    $modx->regClientStartupScript('<script>StaticElController = new StaticElController(' . $json_config . ');</script>', true);
	$modx->regClientCSS($modx->getOption('assets_url') . 'components/static_el_controller/css/static_el_controller.css');
}