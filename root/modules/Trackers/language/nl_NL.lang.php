<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');
/**
 * Copyright (c) 2010-2012 Prudento (http://www.prudento.com)
 * Copyright (c) 2007-2009 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */


$mod_strings = array (
    //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
  'ShowActiveUsers' => 'Toon actieve gebruiker',
  'ShowLastModifiedRecords' => 'Laatste 10 gewijzigde records',
  'ShowTopUser' => 'Top gebruiker',
  'ShowMyModuleUsage' => 'Mijn module gebruik',
  'ShowMyWeeklyActivities' => 'Mijn wekelijke activiteit',
  'ShowTop3ModulesUsed' => 'Mijn top 3 gebruikte modules',
  'ShowLoggedInUserCount' => 'Aantal actieve gebruikers',
  'ShowMyCumulativeLoggedInTime' => 'Mijn totaal ingelogde tijd (deze week)',
  'ShowUsersCumulativeLoggedInTime' => 'Gebruikers totaal ingelogde tijd (deze week)',

    //Column header mapping
  'action' => 'Actie',
  'active_users' => 'Aantal actieve gebruikers',
  'date_modified' => 'Datum laatste aktie',
  'different_modules_accessed' => 'Aantal modules benaderd',
  'first_name' => 'Voornaam',
  'item_id' => 'ID',
  'item_summary' => 'Naam',
  'last_action' => 'Laatste actie datum/tijd',
  'last_name' => 'Achternaam',
  'module_name' => 'Module naam',
  'records_modified' => 'Totaal aantal records gewijzigd',
  'top_module' => 'Top module',
  'total_count' => 'Totaal aantal page views',
  'total_login_time' => 'Tijd (hh:mm:ss)',
  'user_name' => 'Gebruikersnaam',
  'users' => 'Gebruikers',

    //Administration related labels
  'LBL_ENABLE' => 'Ingeschakeld',
  'LBL_MODULE_NAME_TITLE' => 'Trackers',
  'LBL_TRACKER_SETTINGS' => 'Tracker instellingen',
  'LBL_TRACKER_QUERIES_DESC' => 'Tracker Queries',
  'LBL_TRACKER_QUERIES_HELP' => 'Traceer SQL statements wanneer \'dump_slow_queries\' is ingeschakeld en query executie tijd is onder de \'slow_query_time_msec\' waarde',
  'LBL_TRACKER_PERF_DESC' => 'Traceer prestatie gegevens (geheugen-, database- en bestandsgebruik)',
  'LBL_TRACKER_PERF_HELP' => 'Traceer database toegang, bestandstoegang en geheugengebruik',
  'LBL_TRACKER_SESSIONS_HELP' => 'Track active users and users&rsquo; session information',
  'LBL_TRACKER_SESSIONS_DESC' => 'Traceer gebruiker sessie informatie',
  'LBL_TRACKER_DESC' => 'Traceer gebruiker acties',
  'LBL_TRACKER_HELP' => 'Traceer bekeken en opgeslagen items en modules van gebruikers',
  'LBL_TRACKER_PRUNE_INTERVAL' => 'Aantal dagen dat de Tracker data bewaard moet worden voordat de Scheduler deze verwijdert.',
  'LBL_TRACKER_PRUNE_RANGE' => 'Aantal dagen',
'LBL_MODULE_NAME' => 'Trackers',
);
