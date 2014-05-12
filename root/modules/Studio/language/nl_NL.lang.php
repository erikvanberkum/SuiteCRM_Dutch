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

//require_once 'modules/Studio/language/en_us.lang.php';
$mod_strings = array (
  'LBL_EDIT_LAYOUT'=>'Bewerk Lay-out',
'LBL_EDIT_ROWS'=>'Bewerk rijen',
'LBL_EDIT_COLUMNS'=>'Bewerk kolommen',
'LBL_EDIT_LABELS'=>'Bewerkt labels',
'LBL_EDIT_FIELDS'=>'Bewerkt Customized velden',
'LBL_ADD_FIELDS'=>'Maakaan Customized velden',
'LBL_DISPLAY_HTML'=>'Overzicht HTML code',
'LBL_SELECT_FILE'=> 'Selecteer bestand',
'LBL_SAVE_LAYOUT'=> 'Opslaan lay-out',
'LBL_SELECT_A_SUBPANEL' => 'Selecteer een subpanel',
'LBL_SELECT_SUBPANEL' => 'Selecteer subpanel',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_TOOLBOX' => 'Gereedschapskist',
'LBL_STAGING_AREA' => 'Staging Area (sleep en zet de items hier neer)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar Fields (klik items om aan te maken op staging area)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (klik items om aan te maken op staging area)',
'LBL_VIEW_SUGAR_FIELDS' => 'Overzicht Sugar veldem',
'LBL_VIEW_SUGAR_BIN' => 'Overzicht Sugar Bin',
'LBL_FAILED_TO_SAVE' => 'Opslaan mislukt',
'LBL_CONFIRM_UNSAVE' => 'Alle veranderingen worden niet opgeslagen Weet u zeter dat u door wilt gaan?',
'LBL_PUBLISHING' => 'Publiseren ...',
'LBL_PUBLISHED' => 'Gepubliceerd',
'LBL_FAILED_PUBLISHED' => 'Publiceren mislukt',
'LBL_DROP_HERE' => '[Zet hier neer]',

//CUSTOM FIELDS
'LBL_NAME'=>'Naam',
'LBL_LABEL'=>'Label',
'LBL_MASS_UPDATE'=>'Massa update',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Module',
'LBL_DEFAULT_VALUE'=>'Standaard waarde',
'LBL_REQUIRED'=>'Verplicht',
'LBL_DATA_TYPE'=>'Type',


'LBL_HISTORY'=>'Geschiedenis',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>Welkom bij Studio!</h2><br> Wat wilt u doen vandaag?<br><b> Selecteer een optie hier beneden.</b>',
'LBL_SW_EDIT_MODULE'=>'Bewerk een module',
'LBL_SW_EDIT_DROPDOWNS'=>'bewerk drop-downs',
'LBL_SW_EDIT_TABS'=>'Configureer Ttabs',
'LBL_SW_RENAME_TABS'=>'Herbenoem tabs',
'LBL_SW_EDIT_GROUPTABS'=>'Instellingen Ggroep Tabs',
'LBL_SW_EDIT_PORTAL'=>'Bewerk portaal',
'LBL_SW_EDIT_WORKFLOW'=>'Bewerk workflow',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Repareer customized velden',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'migreer customized velden',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>Welcome to Studio!</h2><br><b>Please select a module from below.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Welkom bij Studio!</h2>Wat wilt u doen met die module?<br><b>Selecteer de actie die u wilt doen.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Bewerk customized velden',
'LBL_SMA_EDIT_LAYOUT'=>'Bewerk lay-out',
'LBL_SMA_EDIT_LABELS' =>'Bewerk labels',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Voorbeeld',
'LBL_MB_RESTORE'=>'Herstellen',
'LBL_MB_DELETE'=>'Verwijderen',
'LBL_MB_COMPARE'=>'Vergelijken',
'LBL_MB_WELCOME'=> '<h2>Geschiedenis</h2><br> Geschiendenis staat u toe om overzichten van voorgaande edities te zien van het bestand dat u momenteel aan het bewerken bent. U kan voorgaande versies vergelijken en herstellen. Als u een bestand herstelt dan wordt dit het huidige werkbestand. U moet toepassen voordat de veranderingen voor iedereen zichtbaar zijn.<br> Wat wilt u doen vandaag?<br><b> Selecteer de actie die u wilt doen..</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Aanmaken drop-down',
'LBL_ED_WELCOME'=>'<h2>Drop-down editor</h2><br><b>U kunt een bestaande drop-down inzien en bewerken of een nieuwe drop-down aanmaken.',
'LBL_DROPDOWN_NAME' => 'Drop-down naam:',
'LBL_DROPDOWN_LANGUAGE' => 'Drop-down taal:',
'LBL_TABGROUP_LANGUAGE' => 'Taal:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Customized velden editor</h2><br><b>U kunt een bestaande customized velden inzien en bewerken of een nieuw customized veld aanmaken of maak de customized veld cache schoon.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Overzicht customized velden',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Aanmaken customized velden',
'LBL_EC_CLEAR_CACHE'=>'Cache schoonmaken',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Geschiedenis</h2><br><b>Selecteer het bestand dat u wilt zien.</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Laat waarde zien',
'LBL_DD_DATABASEVALUE'=>'Database waarde',
'LBL_DD_ALL'=>'All',

//BUTTONS
'LBL_BTN_SAVE'=>'Opslaan',
'LBL_BTN_CANCEL'=>'Negeren',
'LBL_BTN_SAVEPUBLISH'=>'Opslaan & Toepassen',
'LBL_BTN_HISTORY'=>'Geschiedenis',
'LBL_BTN_NEXT'=>'Volgende',
'LBL_BTN_BACK'=>'Terug',
'LBL_BTN_ADDCOLS'=>'Toevoegen kolommen',
'LBL_BTN_ADDROWS'=>'Toevoegen rijen',
'LBL_BTN_UNDO'=>'Ongedaan',
'LBL_BTN_REDO'=>'Opniew',
'LBL_BTN_ADDCUSTOMFIELD'=>'Aanmaken customized veld',
'LBL_BTN_TABINDEX'=>'Bewerken tab volgorde',

//TABS
'LBL_TAB_SUBTABS'=>'Sub tabs',
'LBL_MODULES'=>'Modules',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administratie',
'LBL_CONFIGURE_GROUP_TABS' => 'Instellingen module menu filters',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'De filters hieronder zullen te zien zijn in de Meer lijst in het module menu voor gebruikers, tevens voor een overzicht voor groepen modulen in de menu structuur. Sleep en zet neer de modulen van de filters. Opmerking: Lege filters zullen niet getoont worden in het menu',
'LBL_RENAME_TAB_WELCOME'=>'Klik op een tab\'s Toon de waarde in de tabel hier beneden om de tab te hernoemen.',
'LBL_DELETE_MODULE'=>'Verwijder&nbsp;module<br />van&nbsp;filter',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Selecteer de "Andere" tab om deze in het navigatie menu te tonen. Standaard, de "Andere" tab toont alle modulen welke nog niet in een ander groeps menu zijn opgenomen.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Selecteer een beschikbare taal, bewerk de groep labels en klik Opslaan & Toepassen om de veranderingen door te voeren in de geselecteerde taal.',
'LBL_ADD_GROUP'=>'Aanmaken filter',
'LBL_NEW_GROUP'=>'Nieuw Groep',
'LBL_RENAME_TABS'=>'Hernoem Modulen',
'LBL_DISPLAY_OTHER_TAB' => 'Overzicht \'Andere\' Tab',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Standaard',
'LBL_ADDITIONAL'=>'Additioneel',
'LBL_AVAILABLE'=>'Beschikbaar',
'LBL_LISTVIEW_DESCRIPTION'=>'Er worden 3 kolommen getoont hieronder. De standaard kolom bevat de velden die in het standaard ovezicht getoont worden, de additionele kolom bevat velden die de gebruiker kan kiezen om een customized overzicht te maken, en de beschikbare kolommen zijn de kollomen beschikbaar voor de beheerders, welke kunnen worden toegevoegd aan de standaard of de additionele kolom welke door de gebruikers kunnen worden gebruikt maar op dit moment niet ingebruik zijn.',
'LBL_LISTVIEW_EDIT'=>'Overzichtslijst Editor',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Fout: Veld bestaat al',
'ERROR_INVALID_KEY_VALUE'=> "Fout: Ongeldige sleutel waarde: [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Sugar Portaal',
'LBL_SMP_WELCOME'=>' Selecteer een module uit de lijst om te bewerken',
'LBL_SP_WELCOME'=>'Welkom bij Studio voor Sugar Portaal. Kies hier modulen om te bewerken of synchroniseer naar een Portaal instance.<br> Kies uit de lijst.',
'LBL_SP_SYNC'=>'Portal Sync',
'LBL_SYNCP_WELCOME'=>'Please enter the url to the portal instance you wish to update then press the Go button.<br> This will bring up a prompt for your user name and password.<br> Please enter your Sugar user name and password and press the Begin Sync button.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Er zijn twee kolommen: Default which are the fields that will be displayed and Available which are the fields that are not displayed, but are available for displaying. Just drag the fields between the two columns. You can also reorder the items in a column by dragging and dropping them.',
'LBL_SP_STYLESHEET'=>'Upload een style sheet',
'LBL_SP_UPLOADSTYLE'=>'Klik op de zoek knop en selecteer een style sheet om te uploaden.<br> De volgende keer wanneer u synchroniseerd dan zal de style sheet automatisch gedownload worden.',
'LBL_SP_UPLOADED'=> 'Geupload',
'ERROR_SP_UPLOADED'=>'Zorg ervoor dat er een css style sheet geupload wordt.',
'LBL_SP_PREVIEW'=>'Hier is een overbeeld hoe de style sheet eruit zal zien.',

	'LBL_SAVE' => 'Opslaan' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Ongedaan maken' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Opnieuw' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inlijn' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Verwijderen' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Veld aanmaken' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximaliseren' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimaliseren' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Publiceren' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Rij aanmaken' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Veld aanmaken' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Bewerken' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Selecteer de taal om te bewerken.',
'LBL_SINGULAR' => 'Enkelvoud label',
'LBL_PLURAL' => 'Meervoud label',
'LBL_RENAME_MOD_SAVE_HELP' => 'Klik <b>Opslaan</b> om de wijzigingen door te voeren.',

//old file
'LBL_BTN_CANCEL' => 'Annuleer',
'LBL_SAVE' => 'Opslaan',
'LBL_UNDO' => 'Ongedaan maken',
'LBL_REDO' => 'Opnieuw uitvoeren',
'LBL_INLINE' => 'Inline',
'LBL_DELETE' => 'Verwijder',
'LBL_MINIMIZE' => 'Minimaliseren',
'LBL_MAXIMIZE' => 'Maximaliseren',
'LBL_PUBLISH' => 'Publiseer',
'LBL_ADDROWS' => 'Regels toevoegen',
'LBL_ADDFIELD' => 'Veld toevoegen',
'LBL_EDIT' => 'Bewerk',
'LBL_LANGUAGE_TOOLTIP' => 'Selecteer de taal om te wijzigen.',
'LBL_SINGULAR' => 'Enkelvoudig label',
'LBL_PLURAL' => 'Meervoudig label',
'LBL_RENAME_MOD_SAVE_HELP' => 'Klik opslaan om de wijzigingen door te voeren.',
);
