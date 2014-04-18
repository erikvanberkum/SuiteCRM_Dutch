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

require_once 'modules/Studio/wizards/EditDropDownWizard.php';

class madcap_EditDropDownWizard extends EditDropDownWizard {

	function process($option) {
    $option2 = $option;
		switch($option){
      case 'EditDropdown':
        $option2 = $option."1";
        parent::process($option2);
        require_once('custom/modules/Studio/DropDowns/EditView.php');
        break;
      case 'SaveDropDown':
        $option2 = $option."1";
        DropDownHelper::saveDropDown($_REQUEST);
        SugarApplication::redirect('index.php?module=Administration');
        sugar_cleanup(true);
        require_once('custom/modules/Studio/DropDowns/EditView.php');
        break;
      default:
        parent::process($option2);
		}
	}
}
