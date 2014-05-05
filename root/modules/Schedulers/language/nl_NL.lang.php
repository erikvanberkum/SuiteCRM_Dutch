<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');
/**
 * Dutch Language file SuiteCRM version 7 
 * Copyright (c) 2014 Acniti (http:/www.acniti.com) 
 * Copyright (c) 2010-2012 Prudento (http://www.prudento.com)
 * Copyright (c) 2007-2009 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

$mod_strings = array (
// OOTB Scheduler Job Names:
  'LBL_OOTB_WORKFLOW' => 'Voer workflow taken uit',
  'LBL_OOTB_REPORTS' => 'Run Report Generation Scheduled Tasks',
  'LBL_OOTB_IE' => 'Contreer inkomende e-mailboxen',
  'LBL_OOTB_BOUNCE' => 'Draai \'s nachts opgestuurde teruggekomen campagne e-mails',
  'LBL_OOTB_CAMPAIGN' => 'Verstuur \'s nachts campagnes e-mails',
  'LBL_OOTB_PRUNE' => 'Schoon database elke 1e van de maand op',
  'LBL_OOTB_TRACKER' => 'Schoon gebruikers geschiedenis tabel elke 1e van de maand op',
  'LBL_OOTB_SUGARFEEDS'   => 'Schoon SugarFeed Tables op',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Update tracker_sessions Tabel',
  'LBL_OOTB_SEND_EMAIL_REMINDERS'	=> 'Draai e-mail herinnering notificaties',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Schoon taken rij op',
  'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Verwijderen van documenten van het bestandssysteem',
  
  // List Labels
  'LBL_LIST_JOB_INTERVAL' => 'Interval:',
  'LBL_LIST_LIST_ORDER' => 'Taakplanners:',
  'LBL_LIST_NAME' => 'Taakplanner:',
  'LBL_LIST_RANGE' => 'Bereik:',
  'LBL_LIST_REMOVE' => 'Verwijderen:',
  'LBL_LIST_STATUS' => 'Status:',
  'LBL_LIST_TITLE' => 'Taaklijst:',
  'LBL_LIST_EXECUTE_TIME' => 'Wordt uitgevoerd om:',
  // human readable:
  'LBL_SUN' => 'Zondag',
  'LBL_MON' => 'Maandag',
  'LBL_TUE' => 'Dinsdag',
  'LBL_WED' => 'Woensdag',
  'LBL_THU' => 'Donderdag',
  'LBL_FRI' => 'Vrijdag',
  'LBL_SAT' => 'Zaterdag',
  'LBL_ALL' => 'Elke dag',
  'LBL_EVERY_DAY' => 'Elke dag ',
  'LBL_AT_THE' => 'op ',
  'LBL_EVERY' => 'elke ',
  'LBL_FROM' => 'Van ',
  'LBL_ON_THE' => 'op ',
  'LBL_RANGE' => ' to ',
  'LBL_AT' => 'op ',
  'LBL_IN' => 'in ',
  'LBL_AND' => 'en ',
  'LBL_MINUTES' => 'minuten ',
  'LBL_HOUR' => ' uren',
  'LBL_HOUR_SING' => ' uur',
  'LBL_MONTH' => ' maand',
  'LBL_OFTEN' => ' Zo vaak mogelijk',
  'LBL_MIN_MARK' => ' minuutaanwijzing',
  
  
  // crontabs
  'LBL_MINS' => 'min',
  'LBL_HOURS' => 'uur',
  'LBL_DAY_OF_MONTH' => 'datum',
  'LBL_MONTHS' => 'ma',
  'LBL_DAY_OF_WEEK' => 'dag',
  'LBL_CRONTAB_EXAMPLES' => 'Bovenstaand kan de standaard CRONTAB notatie gebruikt worden.',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'De cron specificaties worden uitgevoerd op basis van  de server tijdzone (',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Specificeer de scheduler uitvoer overeenkomstig.',
  // Labels
  'LBL_ALWAYS' => 'Altijd',
  'LBL_CATCH_UP' => 'Uitvoeren wanneer gemist',
  'LBL_CATCH_UP_WARNING' => 'Uitvinken als deze taak vrij lang gaat duren',
  'LBL_DATE_TIME_END' => 'Einddatum en tijd',
  'LBL_DATE_TIME_START' => 'Startdatum en tijd',
  'LBL_INTERVAL' => 'Interval',
  'LBL_JOB' => 'Taak',
  'LBL_JOB_URL' => 'Taak Url',
  'LBL_LAST_RUN' => 'Laatste succesvolle run',
  'LBL_MODULE_NAME' => 'Sugar taakplanner',
  'LBL_MODULE_TITLE' => 'Taakplanners',
  'LBL_NAME' => 'Taaknaam',
  'LBL_NEVER' => 'Never',
  'LBL_NEW_FORM_TITLE' => 'Nieuwe taak',
  'LBL_PERENNIAL' => 'oneindig',
  'LBL_SEARCH_FORM_TITLE' => 'Taak zoeken',
  'LBL_SCHEDULER' => 'Taakplanner:',
  'LBL_STATUS' 												=> 'Status',
  'LBL_TIME_FROM' 										=> 'Actief van',
  'LBL_TIME_TO' 											=> 'Actief tot',
  'LBL_WARN_CURL_TITLE' 							=> 'cURL waarschuwing:',
  'LBL_WARN_CURL' 										=> 'Waarschuwing:',
  'LBL_WARN_NO_CURL' 									=> 'Dit systeem heeft geen cURL libraries geactiveerd/gecompileerd in de PHP module (--with-curl=/path/to/curl_library). Neem contact op met je systeembeheerder om dit probleem op te lossen. Zonder cURL functionaliteit werkt de Taakplanner in Sugar niet.',
  'LBL_BASIC_OPTIONS' 								=> 'Standaard setup',
  'LBL_ADV_OPTIONS'										=> 'Geavanceeerde opties',
  'LBL_TOGGLE_ADV' 										=> 'Geavanceeerde opties',
  'LBL_TOGGLE_BASIC' 									=> 'Standaard opties',
  // Links
  'LNK_LIST_SCHEDULER' 								=> 'Taakplanners',
  'LNK_NEW_SCHEDULER' 								=> 'Nieuwe taak',
  'LNK_LIST_SCHEDULED' 								=> 'Geplande taken',
  // Messages
  'SOCK_GREETING' 										=> 'Dit is de interface voor de SugarCRM taakplanner service. De beschikbare deamon commandos zijn: [start|restart|shutdown|status] Om te stoppen, type \'quit\'. Om de Service te stoppen type \'shutdown\'.',
  'ERR_DELETE_RECORD' 								=> 'Een recordnummer moet worden opgegeven om de taak te verwijderen.',
  'ERR_CRON_SYNTAX'										=> 'Ongeldige CRON syntax',
  'NTC_DELETE_CONFIRMATION' 					=> 'Weet u zeker dat u dit record wilt verwijderen?',
  'NTC_STATUS' 												=> 'Zet de status op inactief om deze taak uit de takenlijst te verwijderen.',
  'NTC_LIST_ORDER' 										=> 'Zet de volgorde van de taken in de takenlijst',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' 		=> 'Configureer windows taakplanner',
  'LBL_CRON_INSTRUCTIONS_LINUX' 			=> 'Configureer crontab',
  'LBL_CRON_LINUX_DESC' 							=> 'Voeg deze regel toe aan je CRONTAB (crontab -e): ',
  'LBL_CRON_WINDOWS_DESC' 						=> 'Maar een batch-file aan met de volgende commando\'s: ',
  'LBL_NO_PHP_CLI' 										=> 'Als je host geen PHP binary heeft, dan kun je wget of curl gebruiken om je taakplanner aan te sturen.<br />wget: * * * * *    wget --quiet --non-verbose /cron.php > /dev/null 2>&1<br />curl: * * * * *    curl --silent /cron.php > /dev/null 2>&1',
 // Subpanels
  'LBL_JOBS_SUBPANEL_TITLE' 					=> 'Taaklog',
  'LBL_EXECUTE_TIME' 									=> 'Uitvoertijd',

  //jobstrings
 'LBL_REFRESHJOBS' => 'Vernieuwen Jobs',
 'LBL_POLLMONITOREDINBOXES' => 'Controleer inkomende e-mail accounts',
 'LBL_PERFORMFULLFTSINDEX' => 'Volledige tekst zoek index systeem',
 
 'LBL_RUNMASSEMAILCAMPAIGN' => 'Draai Nightly Massa E-mail campagnes', 
 'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Draao Nightly Proces Bounced Campagne e-mails',
 'LBL_PRUNEDATABASE' => 'Opschonen database op de 1e van de maand',
 'LBL_TRIMTRACKER' => 'Opschonen tracker Tabellen',
 'LBL_TRIMSUGARFEEDS'   => 'Schoon SugarFeed Tabellen op',
 'LBL_SENDEMAILREMINDERS'=> 'Draai e-mail herrinering verzending',
 'LBL_CLEANJOBQUEUE' => 'Schoon taken rij op',
 'LBL_REMOVEDOCUMENTSFROMFS' => 'Verwijderen van documenten van het bestandssysteem',

);
