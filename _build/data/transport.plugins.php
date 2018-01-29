<?php

/**
 * Add plugins to build
 * 
 * @package static_el_controller
 * @subpackage build
 */
$plugins = array();

$plugins[0] = $modx->newObject('modPlugin');
$plugins[0]->fromArray(array(
    'id' => 1,
    'name' => 'StaticElController',
    'description' => 'Sets the path of the file and media 
    resource of element (template, chunk, snippet, or plugin) when the
    "isStatic" checkbox is checked, and locks code editor if the element
    is static.',
    'plugincode' => getSnippetContent($sources['source_core'] . '/elements/plugins/StaticElController.php'),
        ), '', true, true);

$events = array();

$events[0] = $modx->newObject('modPluginEvent');
$events[0]->fromArray(array(
    'pluginid' => 1,
    'event' => 'OnTempFormRender',
    'priority' => 0,
    'propertyset' => 0,
        ), '', true, true);

$events[1] = $modx->newObject('modPluginEvent');
$events[1]->fromArray(array(
    'pluginid' => 1,
    'event' => 'OnChunkFormRender',
    'priority' => 0,
    'propertyset' => 0,
        ), '', true, true);

$events[2] = $modx->newObject('modPluginEvent');
$events[2]->fromArray(array(
    'pluginid' => 1,
    'event' => 'OnSnipFormRender',
    'priority' => 0,
    'propertyset' => 0,
        ), '', true, true);

$events[3] = $modx->newObject('modPluginEvent');
$events[3]->fromArray(array(
    'pluginid' => 1,
    'event' => 'OnTVFormRender',
    'priority' => 0,
    'propertyset' => 0,
        ), '', true, true);

$events[4] = $modx->newObject('modPluginEvent');
$events[4]->fromArray(array(
    'pluginid' => 1,
    'event' => 'OnPluginFormRender',
    'priority' => 0,
    'propertyset' => 0,
        ), '', true, true);

if (is_array($events) && !empty($events))
{
    $plugins[0]->addMany($events);
    $modx->log(xPDO::LOG_LEVEL_INFO, 'Packaged in ' . count($events) . ' plugin events for StaticElController.');
    flush();
}
else
{
    $modx->log(xPDO::LOG_LEVEL_ERROR, 'Could not find plugin events for StaticElController!');
}
unset($events);

return $plugins;