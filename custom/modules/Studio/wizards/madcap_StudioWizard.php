<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 * Copyright (c) 2007-2009 Madcap BV (http://madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

/**
 * @author Loek van Gool <l.vgool@madcap.nl>
 * @package MadDLP
 */

require_once 'modules/Studio/wizards/StudioWizard.php';

class madcap_StudioWizard extends StudioWizard {

  /**
   *
   * @param string $option
   */
  function process($option){
    $args = func_get_args();
    switch($option) {
      case 'moduleListSingular':

        //Fixing a bug..
        $default_language = $GLOBALS['sugar_config']['default_language'];
        include("include/language/en_us.lang.php");
        include("include/language/nl_NL.lang.php");
        include("custom/include/language/nl_NL.lang.php");
        $GLOBALS['app_list_strings'] = $app_list_strings;

      case 'moduleListGender':
        $_REQUEST['dropdown_name'] = $option;
        require_once 'custom/modules/Studio/wizards/madcap_EditDropDownWizard.php';
        $newWiz = new madcap_EditDropDownWizard();
        $newWiz->process('EditDropdown');
        break;
      default:
        // Call original function
        call_user_func_array(array('parent', __FUNCTION__), $args);
        break;
    }
  }
}
