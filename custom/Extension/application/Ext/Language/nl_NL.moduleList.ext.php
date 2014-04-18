<?php

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

require_once 'custom/include/dutch/dutch_langpack_utils.php';

if(!isset($app_list_strings)) {
  $app_list_strings = array();
}

/**
 * Gender list for moduleList.
 *
 * Genders are used to format short sentences for a module.
 */
$app_list_strings['moduleListGender'] = array(
  'Contacts'            => 'de',
  'Accounts'            => 'de',
  'Opportunities'       => 'de',
  'Cases'               => 'de',
  'Notes'               => 'de',
  'Calls'               => 'het',
  'Emails'              => 'de',
  'Meetings'            => 'de',
  'Tasks'               => 'de',
  'Leads'               => 'de',
  'Activities'          => 'de',
  'Bugs'                => 'de',
  'Feeds'               => 'de',
  'TimePeriods'         => 'het',
  'Project'             => 'het',
  'ProjectTask'         => 'de',
  'Campaigns'           => 'de',
  'Documents'           => 'het',
  'Users'               => 'de',
  'ProspectLists'       => 'de',
  'Prospects'           => 'de',
  'EmailTemplates'      => 'de',
  'Newsletters'         => 'de',
  'Releases'            => 'de',
  'Currencies'          => 'de',
);

/**
 * Place custom module renames here
 */

/*
 * Voorbeeld: (Organisaties hernoemen naar Bedrijven)
 */
//$app_list_strings['moduleList']['Accounts']         = 'Bedrijven';
//$app_list_strings['moduleListSingular']['Accounts'] = 'Bedrijf';
//$app_list_strings['moduleListGender']['Accounts']   = 'het';

/**
 * End custom module renames
 */

/*
 * Reading ahead in order to update dropdowns
 */
if(is_file('custom/include/language/nl_NL.lang.php')) {
  include('custom/include/language/nl_NL.lang.php');
}

/**
 * Rebuild dropdowns using updated module names
 */

if(isset($app_list_strings['parent_type_display'])
  && is_array($app_list_strings['parent_type_display'])
  ) {
    $app_list_strings['parent_type_display'] = dlp_update($app_list_strings['parent_type_display'], $app_list_strings['moduleListSingular']);
}

if(isset($app_list_strings['product_category_dom'])
  && is_array($app_list_strings['product_category_dom'])
  ) {
    $app_list_strings['product_category_dom'] = dlp_update($app_list_strings['product_category_dom'], $app_list_strings['moduleList']);
}

if(isset($app_list_strings['record_type_display'])
  && is_array($app_list_strings['record_type_display'])
  ) {
    $app_list_strings['record_type_display'] = dlp_update($app_list_strings['record_type_display'], $app_list_strings['moduleListSingular']);
}

if(isset($app_list_strings['record_type_display_notes'])
  && is_array($app_list_strings['record_type_display_notes'])
  ) {
    $app_list_strings['record_type_display_notes'] = dlp_update($app_list_strings['record_type_display_notes'], $app_list_strings['moduleListSingular']);
}

/**
 * Sorting lists
 */
if(isset($app_list_strings['countries_dom'])
  && is_array($app_list_strings['countries_dom'])
  ) {
    $app_list_strings['countries_dom'] = asort($app_list_strings['countries_dom']);
}
