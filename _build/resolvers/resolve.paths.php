<?php
/**
 * Resolve paths. These are useful to change if you want to debug and/or develop
 * in a directory outside of the MODx webroot. They are not required to set
 * for basic usage.
 *
 * @package static_el_controller
 * @subpackage build
 */
function createSetting(&$modx,$key,$value) {
	$ct = $modx->getCount('modSystemSetting',array(
		'key' => 'static_el_controller.'.$key,
	));
	if (empty($ct)) {
		$setting = $modx->newObject('modSystemSetting');
		$setting->set('key','static_el_controller.'.$key);
		$setting->set('value',$value);
		$setting->set('namespace','static_el_controller');
		$setting->set('area','Paths');
		$setting->save();
	}
}
if ($object->xpdo) {
	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
		case xPDOTransport::ACTION_UPGRADE:
			$modx =& $object->xpdo;

			/* setup paths */
			createSetting($modx,'core_path',$modx->getOption('core_path').'components/static_el_controller/');
			createSetting($modx,'assets_path',$modx->getOption('assets_path').'components/static_el_controller/');

			/* setup urls */
			createSetting($modx,'assets_url',$modx->getOption('assets_url').'components/static_el_controller/');
		break;
	}
}
return true;