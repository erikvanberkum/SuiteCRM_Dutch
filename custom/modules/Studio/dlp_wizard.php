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
 *
 * Copied and edited from ./modules/Studio/wizard.php
 */

require_once 'modules/Studio/config.php';
require_once 'custom/modules/Studio/wizards/madcap_StudioWizard.php';
require_once 'include/Sugar_Smarty.php';

$wizard = !empty($_REQUEST['wizard'])? $_REQUEST['wizard']: 'madcap_StudioWizard';

if(file_exists('custom/modules/Studio/wizards/'. $wizard . '.php')) {
	require_once('custom/modules/Studio/wizards/'. $wizard . '.php');
	$thewiz = new $wizard();
} else {
	unset($_SESSION['studio']['lastWizard']);
	$thewiz = new madcap_StudioWizard();
}

if(!empty($_REQUEST['back'])) {
    $thewiz->back();
}
if(!empty($_REQUEST['option'])) {
	$thewiz->process($_REQUEST['option']);
} else {
	$thewiz->display();
}
