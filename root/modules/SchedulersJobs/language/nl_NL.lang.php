<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

/**
 * Dutch Language file SuiteCRM version 7 
 * Copyright (c) 2014 Acniti (http:/www.acniti.com)
 * Copyright (c) 2007 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

$mod_strings = array (
  'LBL_NAME' => 'Taak naam',
  'LBL_EXECUTE_TIME' => 'Uitvoertijd',
  'LBL_SCHEDULER_ID' 	=> 'Planner',
'LBL_STATUS' 	=> 'Taak status',
'LBL_RESOLUTION' 	=> 'Resultaat',
'LBL_MESSAGE' 	=> 'Berichten',
'LBL_DATA' 	=> 'Taak Data',
'LBL_REQUEUE' 	=> 'Opnieuw proberen wanneer mislukt',
'LBL_RETRY_COUNT' 	=> 'Maximaal aantal keren opnieuw',
'LBL_FAIL_COUNT' 	=> 'Mislukkingen',
'LBL_INTERVAL' 	=> 'Minimale tijd tussen de pogingen',
'LBL_CLIENT' 	=> 'Owning client',
'LBL_PERCENT'	=> 'Pecentage compleet',
// Errors
'ERR_CALL' 	=> "Kan de functie niet oproepen: %s",
'ERR_CURL' => "Geen CURL - kan de taak niet uitvoeren Url",
'ERR_FAILED' => "Onverwachte fout, kijk in de PHP logs en sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s in %s on line %d",
'ERR_NOUSER' => "Geen gebruikers Id gedefinieerd voor de taak",
'ERR_NOSUCHUSER' => "Gebruikers Id %s niet gevonden",
'ERR_JOBTYPE' 	=> "Onbekend taak type: %s",
'ERR_TIMEOUT' => "Onvoldoende tijd daardoor mislukt",
'ERR_JOB_FAILED_VERBOSE' => 'Taak %1$s (%2$s) mislukt in CRON uitvoering',
);