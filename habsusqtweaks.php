<?php

require_once 'habsusqtweaks.civix.php';
// phpcs:disable
use CRM_Habsusqtweaks_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_pageRun().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_pageRun/
 */
function habsusqtweaks_civicrm_pageRun(&$page) {
  // Don't bother with any of this if the user is already logged in.
  $contactId = CRM_Core_Session::getLoggedInContactID();
  if (!$contactId) {
    $pageName = $page->getVar('_name');
    if ($pageName == 'CRM_Event_Page_EventInfo') {
      // Get option value for event type 'Construction'
      $optionValue = \Civi\Api4\OptionValue::get()
        ->setCheckPermissions(FALSE)
        ->addSelect('value')
        ->addWhere('option_group_id:name', '=', 'event_type')
        ->addWhere('name', '=', 'Construction')
        ->setLimit(1)
        ->execute()
        ->first();
      $constructionEventTypeId = ($optionValue['value'] ?? NULL);
      if ($constructionEventTypeId) {
        $eventId = $page->getVar('_id');
        $event = \Civi\Api4\Event::get()
          ->setCheckPermissions(FALSE)
          ->addWhere('id', '=', $eventId)
          ->setLimit(1)
          ->execute()
          ->first();
        if ($event['event_type_id'] == $constructionEventTypeId) {
          $resource = CRM_Core_Resources::singleton()->addScriptFile('com.joineryhq.habsusqtweaks', 'js/CRM_Event_Page_EventInfo_construction_anonymous.js');
        }
      }
    }
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function habsusqtweaks_civicrm_config(&$config) {
  _habsusqtweaks_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function habsusqtweaks_civicrm_xmlMenu(&$files) {
  _habsusqtweaks_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function habsusqtweaks_civicrm_install() {
  _habsusqtweaks_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function habsusqtweaks_civicrm_postInstall() {
  _habsusqtweaks_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function habsusqtweaks_civicrm_uninstall() {
  _habsusqtweaks_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function habsusqtweaks_civicrm_enable() {
  _habsusqtweaks_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function habsusqtweaks_civicrm_disable() {
  _habsusqtweaks_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function habsusqtweaks_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _habsusqtweaks_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function habsusqtweaks_civicrm_managed(&$entities) {
  _habsusqtweaks_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function habsusqtweaks_civicrm_caseTypes(&$caseTypes) {
  _habsusqtweaks_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function habsusqtweaks_civicrm_angularModules(&$angularModules) {
  _habsusqtweaks_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function habsusqtweaks_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _habsusqtweaks_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function habsusqtweaks_civicrm_entityTypes(&$entityTypes) {
  _habsusqtweaks_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function habsusqtweaks_civicrm_themes(&$themes) {
  _habsusqtweaks_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function habsusqtweaks_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function habsusqtweaks_civicrm_navigationMenu(&$menu) {
//  _habsusqtweaks_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _habsusqtweaks_civix_navigationMenu($menu);
//}
