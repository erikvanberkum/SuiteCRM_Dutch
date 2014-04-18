<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

/**
 * Copyright (c) 2007-2009 Madcap B.V. (http://madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

/**
 * @author Loek van Gool <l.vgool@madcap.nl>
 */

include_once 'custom/include/dutch/dutch_langpack_utils.php';

$dashletStrings['OpportunitiesByLeadSourceByOutcomeDashlet'] = array(
  'LBL_TITLE'                             => 'Alle '.dpl_mod_get("Opportunities", true, false).' op '.dpl_mod_get("Leads", true, true).' bron op uitkomst',
  'LBL_DESCRIPTION'                       => 'Horizontale grafiek met '.dpl_mod_get("Leads", true, false).' op bron en op uitkomst',
  'LBL_REFRESH'                           => 'Ververs grafiek'
);
