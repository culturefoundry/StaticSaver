<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$modx->request->handleRequest(array(
    'processors_path' => $modx->getOption('core_path').'components/static_el_controller/processors/',
    'location' => ''
));