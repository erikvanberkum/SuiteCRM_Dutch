<?php

/**
 * Copyright (c) 2007-2009 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

/**
 * @author Loek van Gool <l.vgool@madcap.nl>
 *
 * Global mod_strings include file.
 * Overwritten by module's own strings and custom strings.
 */

include_once 'custom/include/dutch/dutch_langpack_utils.php';

// RECORD STRINGS
$mod_strings_global['LBL_DATE_ENTERED']         = $GLOBALS['app_strings']['LBL_DATE_ENTERED'];
$mod_strings_global['LBL_DATE_MODIFIED']        = $GLOBALS['app_strings']['LBL_DATE_MODIFIED'];
$mod_strings_global['LBL_DELETED']              = $GLOBALS['app_strings']['LBL_DELETED'];
$mod_strings_global['LBL_MODIFIED']             = $GLOBALS['app_strings']['LBL_MODIFIED'];
$mod_strings_global['LBL_MODIFIED_USER']        = $GLOBALS['app_strings']['LBL_MODIFIED_USER'];
$mod_strings_global['LBL_MODIFIED_NAME']        = $GLOBALS['app_strings']['LBL_MODIFIED_USER'];
$mod_strings_global['LBL_CREATED']              = $GLOBALS['app_strings']['LBL_CREATED'];
$mod_strings_global['LBL_CREATED_USER']         = $GLOBALS['app_strings']['LBL_CREATED_USER'];
$mod_strings_global['LBL_MODIFIED_ID']          = 'Gewijzigd door ID';
$mod_strings_global['LBL_CREATED_ID']           = 'Gemaakt door ID';
$mod_strings_global['LBL_CREATED_BY']           = 'Gemaakt door';

// MENU STRINGS
//foreach($GLOBALS['app_list_strings']['moduleList'] AS $mod => $name) {
//  $singular = $GLOBALS['app_list_strings']['moduleListSingular'][$mod];
//  $mod_strings_global['LNK_NEW_'.strtoupper($mod)] = dpl_mod_get($mod, false, true, "new");
//}

// MENU LINKS
$mod_strings_global['LNK_NEW_CONTACT']          = dpl_mod_get("Contacts",       false, true, "new");
$mod_strings_global['LNK_NEW_ACCOUNT']          = dpl_mod_get("Accounts",       false, true, "new");
$mod_strings_global['LNK_NEW_OPPORTUNITY']      = dpl_mod_get("Opportunities",  false, true, "new");
$mod_strings_global['LNK_NEW_CASE']             = dpl_mod_get("Cases",          false, true, "new");
$mod_strings_global['LNK_NEW_NOTE']             = dpl_mod_get("Notes",          false, true, "new");
$mod_strings_global['LNK_NEW_CALL']             = dpl_mod_get("Calls",          false, true, "new");
$mod_strings_global['LNK_NEW_MEETING']          = dpl_mod_get("Meetings",       false, true, "new");
$mod_strings_global['LNK_NEW_TASK']             = dpl_mod_get("Tasks",          false, true, "new");
$mod_strings_global['LNK_NEW_LEAD']             = dpl_mod_get("Leads",          false, true, "new");
$mod_strings_global['LNK_NEW_BUG']              = dpl_mod_get("Bugs",           false, true, "new");
$mod_strings_global['LNK_NEW_EMAIL']            = "E-mail archiveren";
$mod_strings_global['LNK_NEW_APPOINTMENT']      = $mod_strings_global['LNK_NEW_MEETING'];
$mod_strings_global['LNK_NEW_ISSUE']            = $mod_strings_global['LNK_NEW_BUG'];
