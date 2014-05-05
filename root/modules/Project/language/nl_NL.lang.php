<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

/**
 * Copyright (c) 2007 Madcap BV (http://www.madcap.nl)
 * Copyright (c) 2010 Prudento (http://www.prudento.com)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Project',
  'LBL_MODULE_TITLE' => 'Projecten: Start',
  'LBL_SEARCH_FORM_TITLE' => 'Projecten zoeken',
  'LBL_LIST_FORM_TITLE' => 'Projecten lijst',
  'LBL_HISTORY_TITLE' => 'Geschiedenis',

  'LBL_ID' => 'Id:',
  'LBL_DATE_ENTERED' => 'Ingevoerd:',
  'LBL_DATE_MODIFIED' => 'Laatste wijziging:',
  'LBL_ASSIGNED_USER_ID' => 'Toegewezen aan:',
  'LBL_ASSIGNED_USER_NAME' => 'Toegewezen aan:',
  'LBL_MODIFIED_USER_ID' => 'Gewijzigde gebruikers ID:',
  'LBL_CREATED_BY' => 'Aangemaakt door:',
  'LBL_TEAM_ID' => 'Team:',
  'LBL_NAME' => 'Naam:',
  'LBL_PDF_PROJECT_NAME' => 'Project naam:',
  'LBL_DESCRIPTION' => 'Omschrijving:',
  'LBL_DELETED' => 'Verwijderd:',
  'LBL_DATE' => 'Datum:',
  'LBL_DATE_START' => 'Begindatum:',
  'LBL_DATE_END' => 'Einddatum:',
  'LBL_PRIORITY' => 'Prioriteit:',
  'LBL_STATUS' => 'Status:',
  'LBL_MY_PROJECTS' => 'Mijn Projecten',
  'LBL_MY_PROJECT_TASKS' => 'Mijn openstaande projecttaken',

  'LBL_TOTAL_ESTIMATED_EFFORT' => 'Totaal geschatte uren:',
  'LBL_TOTAL_ACTUAL_EFFORT' => 'Totaal werkelijke uren:',

  'LBL_LIST_NAME' => 'Naam',
  'LBL_LIST_DAYS' => 'dagen',
  'LBL_LIST_ASSIGNED_USER_ID' => 'Toegewezen aan',
  'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Totaal geschatte uren',
  'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Totaal werkelijke uren',
  'LBL_LIST_UPCOMING_TASKS' => 'Opkomende taken (1 week)',
  'LBL_LIST_OVERDUE_TASKS' => 'Opkomende taken',
  'LBL_LIST_OPEN_CASES' => 'Open verzoeken',
  'LBL_LIST_END_DATE' => 'Einddatum',
  'LBL_LIST_TEAM_ID' => 'Team',


  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Project taak',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Contactpersonen',
  'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Relatie',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Kansen',
  'LBL_QUOTE_SUBPANEL_TITLE' => 'Prijsopgaven',

  // quick create label
  'LBL_NEW_FORM_TITLE' => 'Nieuw project',

  'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Weet je zeker dat je deze contactpersoon wilt verwijderen uit dit project?',

  'LNK_NEW_PROJECT' => 'Nieuw project',
  'LNK_PROJECT_LIST' => 'Projecten lijst',
  'LNK_NEW_PROJECT_TASK' => 'Nieuwe projecttaak',
  'LNK_PROJECT_TASK_LIST' => 'Project taak',

  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projecten',
  'LBL_ACTIVITIES_TITLE' => 'Activiteiten',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
  'LBL_QUICK_NEW_PROJECT' => 'Nieuw project',

  'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project taak',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Relaties',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Kansen',
  'LBL_CASES_SUBPANEL_TITLE' => 'Verzoeken',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Producten',


  'LBL_TASK_ID' => 'ID',
  'LBL_TASK_NAME' => 'Naam taak',
  'LBL_DURATION' => 'Duur',
  'LBL_ACTUAL_DURATION' => 'Werkelijke duur',
  'LBL_START' => 'Start',
  'LBL_FINISH' => 'Einde',
  'LBL_PREDECESSORS' => 'Voorgangers',
  'LBL_PERCENT_COMPLETE' => '% compleet',
  'LBL_MORE' => 'Meer...',

  'LBL_PERCENT_BUSY' => '% bezig',
  'LBL_TASK_ID_WIDGET' => 'id',
  'LBL_TASK_NAME_WIDGET' => 'description',
  'LBL_DURATION_WIDGET' => 'duration',
  'LBL_START_WIDGET' => 'date_start',
  'LBL_FINISH_WIDGET' => 'date_finish',
  'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
  'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
  'LBL_EDITLAYOUT' => 'Wijzig lay-out',

'LBL_OPPORTUNITIES' => 'Kansen',
'LBL_LAST_WEEK' => 'Vorige',
'LBL_NEXT_WEEK' => 'Volgende',
'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Project resources',
'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Project taken',
'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Vakanties',
'LBL_PROJECT_INFORMATION' => 'Project overzicht',
'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
'LBL_INSERTROWS' => 'Rijen invoegen', /*for 508 compliance fix*/,
'LBL_PROJECT_INFORMATION' => 'Overzicht',
//obsolate
'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Wijzig projecttaken',

);
