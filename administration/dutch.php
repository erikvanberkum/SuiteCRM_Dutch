<?php
if(!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');
/**
 * Copyright (c) 2010-12 Prudento (http://www.prudento.com) 
 * Copyright (c) 2007-2009 Madcap BV (http://madcap.nl)(no langer active)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

/**
 * @package DutchLanguagePack
 * @author Wichard Noppert <w.noppert@prudento.com>
 * @author Loek van Gool <l.vgool@madcap.nl>
 */

require_once 'modules/Administration/UpgradeHistory.php';

$admin_option_defs = array();

/* Info page */
$admin_option_defs[] = array(
  'Administration',
  'LBL_DUTCH_ABOUT_TITLE',
  'LBL_DUTCH_ABOUT',
  'index.php?module=Home&action=AboutDLP',
);

/* Rename singulars */
$admin_option_defs[] = array(
  'RenameTabs',
  'LBL_DUTCH_REN_SINGULARS_TITLE',
  'LBL_DUTCH_REN_SINGULARS',
  'index.php?action=dlp_wizard&module=Studio&wizard=StudioWizard&option=moduleListSingular',
);

/* Rename genders */
$admin_option_defs[] = array(
  'RenameTabs',
  'LBL_DUTCH_REN_GENDERS_TITLE',
  'LBL_DUTCH_REN_GENDERS',
  'index.php?action=dlp_wizard&module=Studio&wizard=StudioWizard&option=moduleListGender',
);

/* Rename plurals */
$admin_option_defs[] = array(
  'RenameTabs',
  'LBL_DUTCH_REN_PLURAL_TITLE',
  'LBL_DUTCH_REN_PLURAL',
  'index.php?action=wizard&module=Studio&wizard=StudioWizard&option=RenameTabs',
);

/*
 * Add administration options to page
 * Supports:
 *  4.5 - 5.1
 *  5.2
 *  5.5
 */
$US = new UpgradeHistory;

/*
 * Prepare for < 6.0.3
 */
$minimal = explode(".", "6.0.3");
$current = explode(".", $GLOBALS['sugar_version']);
if (!$US->is_right_version_greater($minimal, $current, true)) {
  foreach($admin_option_defs AS $key=>$val) {
    //Add $image_path
    $admin_option_defs[$key][0] = $image_path.$admin_option_defs[$key][0];
  }
}

$minimal = explode(".", "5.2.0");
$current = explode(".", $GLOBALS['sugar_version']);
// 5.2 and later
if ($US->is_right_version_greater($minimal, $current, true)) {
  $admin_group_header[] = array(
    'LBL_DUTCH',
    '',
    false,
    array(
      "Administration" => $admin_option_defs,
    ),
    'LBL_DUTCH_DESC',
  );
//5.1 and earlier
} else {
  $admin_group_header[] = array(
    'LBL_DUTCH',
    '',
    false,
    $admin_option_defs,
    'LBL_DUTCH_DESC',
  );
}
