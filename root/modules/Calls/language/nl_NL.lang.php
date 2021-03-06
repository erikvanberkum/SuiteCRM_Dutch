<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');
/*********************************************************************************
 * 
 * Copyright (c) 2014-2015 Hortindustrias Ltd. 
 * Copyright (c) 2010-2012 Prudento (http://www.prudento.com)
 * Copyright (c) 2007-2009 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included. 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 *
 *
 *
 *
 *
 *
 *
 *        
 *
 *  
 ********************************************************************************/

$mod_strings = array (
  "LBL_BLANK" => "  ",
  'LBL_MODULE_NAME' => 'Telefoongesprekken',
  'LBL_MODULE_TITLE' => 'Telefoongesprekken: Start',
  'LBL_SEARCH_FORM_TITLE' => 'Telefoongesprek zoeken',
  'LBL_LIST_FORM_TITLE' => 'Telefoongesprekken',
  'LBL_NEW_FORM_TITLE' => 'Nieuwe afspraak',
  'LBL_LIST_CLOSE' => 'Sluiten',
  'LBL_LIST_SUBJECT' => 'Onderwerp',
  'LBL_LIST_CONTACT' => 'Contactpersoon',
  'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
  'LBL_LIST_RELATED_TO_ID' => 'Gerelateerd aan ID',
  'LBL_LIST_DATE' => 'Begindatum',
  'LBL_LIST_TIME' => 'Aanvangstijd',
  'LBL_LIST_DURATION' => 'Gespreksduur',
  'LBL_LIST_DIRECTION' => 'Richting',
  'LBL_SUBJECT' => 'Onderwerp:',
  'LBL_REMINDER' => 'Herinnering:',
  'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beschrijving',
  'LBL_DESCRIPTION' => 'Omschrijving:',
  'LBL_STATUS' => 'Status:',
  'LBL_DIRECTION' => 'Richting:',
  'LBL_DATE' => 'Begindatum:',
  'LBL_DURATION' => 'Gespreksduur:',
  'LBL_DURATION_HOURS' => 'Duur (uren):',
  'LBL_DURATION_MINUTES' => 'Duur (minuten):',
  'LBL_HOURS_MINUTES' => '(uren/minuten)',
  'LBL_CALL' => 'Telefoongesprek:',
  'LBL_DATE_TIME' => 'Begindatum & tijd:',
  'LBL_TIME' => 'Aanvangstijd:',
  'LBL_HOURS_ABBREV' => 'uur',
  'LBL_MINSS_ABBREV' => 'min',
  'LBL_COLON' => ':',
  'LNK_NEW_CALL' => 'Nieuw telefoongesprek',
  'LNK_NEW_MEETING' => 'Nieuwe afspraak',
  'LNK_CALL_LIST' => 'Telefoongesprekken',
  'LNK_IMPORT_CALLS' => 'Importeer telefoongesprekken',
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'NTC_REMOVE_INVITEE' => 'Weet u zeker dat u deze uitgenodigde persoon wilt verwijderen voor dit telefoon gesprek?',
  'LBL_INVITEE' => 'Genodigden',
  'LBL_RELATED_TO' => 'Gerelateerd aan:',
  'LNK_NEW_APPOINTMENT' => 'Nieuwe afspraak',
  'LBL_SCHEDULING_FORM_TITLE' => 'Inplannen',
  'LBL_ADD_INVITEE' => 'Uitnodigen',
  'LBL_NAME' => 'Naam',
  'LBL_FIRST_NAME' => 'Voornaam',
  'LBL_LAST_NAME' => 'Achternaam',
  'LBL_EMAIL' => 'E-mail',
  'LBL_PHONE' => 'Telefoon',
  'LBL_REMINDER' => 'Herinnering:',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_EMAIL' => 'E-mail',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail alle genodigden',
  'LBL_EMAIL_REMINDER' => 'E-mail herinnering',
  'LBL_EMAIL_REMINDER_TIME' => 'E-mail herinnering tijd',
  'LBL_SEND_BUTTON_TITLE' => 'Verstuur uitnodiging [ALT+I]',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Verstuur uitnodiging',
  'LBL_DATE_END' => 'Einddatum',
  'LBL_TIME_END' => 'Eindtijd',
  'LBL_REMINDER_TIME' => 'Herrinneringstijd',
  'LBL_EMAIL_REMINDER_SENT' => 'E-mail herinnering verstuurd',
  'LBL_SEARCH_BUTTON' => 'Zoeken',
  'LBL_ACTIVITIES_REPORTS' => 'Activiteitenverslag',
  'LBL_ADD_BUTTON' => 'Toevoegen',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Telefoongesprekken',
  'LBL_LOG_CALL' => 'Log Oproep',
  'LNK_SELECT_ACCOUNT' => 'Kies een relatie',
  'LNK_NEW_ACCOUNT' => 'Nieuw relatie',
  'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
  'LBL_DEL' => 'Verwijder',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacten',
  'LBL_USERS_SUBPANEL_TITLE' => 'Gebruikers',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_MEMBER_OF' => 'Lid van',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notities',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_LIST_MY_CALLS' => 'Mijn telefoongesprekken',
  'LBL_SELECT_FROM_DROPDOWN' => 'Selecteer van dropdown',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan naam',
  'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker',
  'NOTICE_DURATION_TIME' => 'Tijdsduur moet groter zijn dan 0',
  'LBL_CALL_INFORMATION' => 'Telefoongesprekken overzicht',
  'LBL_REMOVE' => 'Verwijder',
  'LBL_ACCEPT_STATUS' => 'Accepteer status',
  'LBL_ACCEPT_LINK' => 'Accepteer link',
// For export labels
'LBL_PARENT_ID' => 'Parent ID',
'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door ID',
'LBL_EXPORT_CREATED_BY' => 'Aangemaakt door ID',
'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen gebruiker ID',
'LBL_EXPORT_DATE_START' => 'Start datum en tijd',
'LBL_EXPORT_PARENT_TYPE' => 'Gerelateerd aan module',
'LBL_EXPORT_REMINDER_TIME' => 'Herinnering Tijd (in minuten)',
 // Following entry have become obsolate remove at a later time. 
  //'LBL_DEFAULT_STATUS' => 'Planned',
  //'LNK_NEW_TASK' => 'Nieuwe taak',
  //'LNK_NEW_NOTE' => 'Nieuwe notitie of bijlage',
  //'LNK_NEW_EMAIL' => 'E-mail archiveren',
  //'LNK_MEETING_LIST' => 'Afspraken',
  //'LNK_TASK_LIST' => 'Taken',
  //'LNK_NOTE_LIST' => 'Notities',
  //'LNK_EMAIL_LIST' => 'E-mails',
  //'LNK_VIEW_CALENDAR' => 'Vandaag',
);
