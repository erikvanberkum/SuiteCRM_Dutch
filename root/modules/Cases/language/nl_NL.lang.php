<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

/**
 * Copyright (c) 2014-2015 Hortindustrias Ltd. 
 * Copyright (c) 2010-2012 Prudento (http://www.prudento.com)
 * Copyright (c) 2007-2009 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Er moet een recordnummer zijn gespecificeerd om dit bedrijf te verwijderen.',
  
  'LBL_ACCOUNT_ID' => 'Relatie ID',
  'LBL_ACCOUNT_NAME' => 'Relatie naam:',
  'LBL_ACCOUNTS_SUBPANEL_TITLE'		=> 'Relaties',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
  'LBL_ATTACH_NOTE' 					=> 'Notitie bijvoegen',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_CASE_NUMBER' => 'Verzoek nummer:',
  'LBL_CASE_SUBJECT' => 'Onderwerp:',
  'LBL_CASE' => 'Verzoek:',
  'LBL_CONTACT_CASE_TITLE' => 'Contactpersoon-verzoek:',
  'LBL_CONTACT_NAME' => 'Contactpersoon:',
  'LBL_CONTACT_ROLE' => 'Rol:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Verzoeken',
  'LBL_DESCRIPTION' => 'Omschrijving:',
  'LBL_FILENANE_ATTACHMENT' 			=> 'Bestand bijvoegen',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
  'LBL_INVITEE' => 'Contactpersonen',
  'LBL_MEMBER_OF' => 'Bedrijf',
  'LBL_MODULE_NAME' => 'Verzoeken',
  'LBL_MODULE_TITLE' => 'Verzoeken: Start',
  'LBL_NEW_FORM_TITLE' => 'Nieuw verzoek',
  'LBL_NUMBER' => 'Nummer:',
  'LBL_PRIORITY' => 'Prioriteit:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenten',
  'LBL_RESOLUTION' => 'Oplossing:',
  'LBL_SEARCH_FORM_TITLE' => 'Verzoeken vinden',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Onderwerp:',
  'LBL_SYSTEM_ID' => 'Systeem ID',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
  'LBL_LIST_ACCOUNT_NAME' => 'Relatienaam',
  'LBL_LIST_ASSIGNED' => 'Toegewezen aan',
  'LBL_LIST_CLOSE' => 'Sluiten',
  'LBL_LIST_FORM_TITLE' => 'Verzoeklijst',
  'LBL_LIST_LAST_MODIFIED' => 'Laatste wijziging',
  'LBL_LIST_MY_CASES' => 'Mijn openstaande verzoeken',
  'LBL_LIST_NUMBER' => 'Nr.',
  'LBL_LIST_PRIORITY' => 'Prioriteit',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBJECT' => 'Onderwerp',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
  
  'LNK_CASE_LIST' => 'Verzoeken',
  'LNK_NEW_CASE' => 'Nieuw verzoek',
  'NTC_REMOVE_FROM_BUG_CONFIRMATION' => 'Weet u zeker dat u dit verzoek van deze bug wilt verwijderen?',
  'NTC_REMOVE_INVITEE' => 'Weet u zeker dat u deze contactpersoon wilt verwijderen voor dit verzoek?',
  'LBL_LIST_DATE_CREATED' => 'Aanmaakdatum',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan naam',
  'LBL_TYPE' => 'Type',
  'LBL_WORK_LOG" => "Werk logboek',
  'LNK_IMPORT_CASES' => 'Import verzoeken',
  
  'LBL_CREATED_USER' => 'Gemaakt door gebruiker',
  'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
  'LBL_CASE_INFORMATION' => 'Verzoeken overzicht',

  //For export labels
  'LBL_MODIFIED_BY_NAME_OWNER' => 'Gewijzigd door naam eigenaar',
  'LBL_MODIFIED_BY_NAME_MOD' => 'Gewijzigd door naam Mod',
  'LBL_CREATED_BY_NAME_OWNER' => 'Aangemaakt door naam eigenaar',
  'LBL_CREATED_BY_NAME_MOD' => 'Aangemaakt door naam wijz',
  'LBL_ASSIGNED_USER_NAME_OWNER' => 'Toegewezen gebruikersnaam eigenaar',
  'LBL_ASSIGNED_USER_NAME_MOD' => 'Toegewezen gebruikersnaam wijz',
  'LBL_TEAM_COUNT_OWNER' => 'Team aantal eigenaar',
  'LBL_TEAM_COUNT_MOD' => 'Team aantal wijz',
  'LBL_TEAM_NAME_OWNER' => 'Team naam eigenaar',
  'LBL_TEAM_NAME_MOD' => 'Team naam wijz',
  'LBL_ACCOUNT_NAME_OWNER' => 'Account naam eigenaar',
  'LBL_ACCOUNT_NAME_MOD' => 'Account naam wijz',
  'LBL_MODIFIED_USER_NAME' => 'Gewijzigde gebruikersnaam',
  'LBL_MODIFIED_USER_NAME_OWNER' => 'Gewijzigde gebruikersnaam eigenaar',
  'LBL_MODIFIED_USER_NAME_MOD' => 'Gewijzigde gebruikersnaam wijz',
  'LBL_PORTAL_VIEWABLE' => 'Portaal zichtbaar',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen gebruikers ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door ID',
  'LBL_EXPORT_CREATED_BY' => 'Aangemaakt door ID',
  'LBL_EXPORT_CREATED_BY_NAME' => 'Aangemaakt door gebruikersnaam',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Toegewezen gebruikersnaam',
  'LBL_EXPORT_TEAM_COUNT' => 'Team aantal',

  // SNIP
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Gerelateerde contactpersoons emails',

);
