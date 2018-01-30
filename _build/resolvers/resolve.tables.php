<?php
/**
 * Resolve creating db tables
 *
 * @package static_el_controller
 * @subpackage build
 */
if ($object->xpdo) {
	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
			$modx =& $object->xpdo;
			$modelPath = $modx->getOption('static_el_controller.core_path',null,$modx->getOption('core_path').'components/static_el_controller/').'model/';
			$modx->addPackage('static_el_controller',$modelPath);

			$manager = $modx->getManager();

			$manager->createObjectContainer('StaticElControllerItem');

			break;
		case xPDOTransport::ACTION_UPGRADE:
			break;
	}
}
return true;