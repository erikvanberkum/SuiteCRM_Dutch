<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

/**
 * Dutch Language file SuiteCRM version 7 
 * Copyright (c) 2014-2015 Hortindustrias Ltd. 
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

$mod_strings = array(
  
  'LBL_ADD_MODULE'                        => 'Toevoegen',
  'LBL_ADDRCITY'                          => 'Stad',
  'LBL_ADDRCOUNTRY'                       => 'Land',
  'LBL_ADDRCOUNTRY_ID'                    => 'Land ID',
  'LBL_ADDRSTATEPROV'                     => 'Provincie',
  'LBL_ADMINISTRATION'                    => 'Connector beheer',
  'LBL_ADMINISTRATION_MAIN'               => 'Connector instellingen',
  'LBL_AVAILABLE'                         => 'Beschikbaar',
  'LBL_BACK'                              => '< Terug',
  'LBL_COMPANY_ID'                        => dpl_mod_get("Accounts", false, true).' ID',
  'LBL_CONFIRM_CONTINUE_SAVE'             => 'Sommige verplichte velden zijn niet ingevuld. Toch doorgaan?',
  'LBL_CONNECTOR'                         => 'Connector',
  'LBL_CONNECTOR_FIELDS'                  => 'Connector velden',
  'LBL_DATA'                              => 'Data',
  'LBL_DEFAULT'                           => 'Standaard',
  'LBL_DELETE_MAPPING_ENTRY'              => 'Weet u zeker dat u dit item wil verwijderen?',
  'LBL_DISABLED'                          => 'Uitgeschakeld',
  'LBL_DUNS'                              => 'DUNS',
  'LBL_EMPTY_BEANS'                       => 'Er is niks gevonden.',
  'LBL_ENABLED'                           => 'Ingeschakeld',
  'LBL_EXTERNAL'                          => 'Sta gebruikers toe om met deze connector, externe account records te maken.',
  'LBL_EXTERNAL_SET_PROPERTIES'           => 'Om deze connector te gebruiken, moeten de eigenschappen ook in de Connector Instelling pagina ingesteld worden.',
  'LBL_FINSALES'                          => 'Finsales',
  'LBL_MARKET_CAP'                        => 'Marktwaarde',
  'LBL_MERGE'                             => 'Samenvoegen',
  'LBL_MODIFY_DISPLAY_TITLE'              => 'Connectors inschakelen',
  'LBL_MODIFY_DISPLAY_DESC'               => 'Selecteer welke modules ingeschakeld zijn voor de connectors.',
  'LBL_MODIFY_DISPLAY_PAGE_TITLE'         => 'Connector instellingen: Connectors inschakelen',
  'LBL_MODULE_FIELDS'                     => 'Module velden',
  'LBL_MODIFY_MAPPING_TITLE'              => 'Verbind connector velden',
  'LBL_MODIFY_MAPPING_DESC'               => 'Verbind de connector velden aan module velden om te bepalen welke connector informatie kan worden bekeken en welke kan worden ingevoegd in SugarCRM.',
  'LBL_MODIFY_MAPPING_PAGE_TITLE'         => 'Connector instellingen: Verbind connector velden',
  'LBL_MODIFY_PROPERTIES_TITLE'           => 'Stel connector eigenschappen in',
  'LBL_MODIFY_PROPERTIES_DESC'            => 'Stel elke connector in, onder andere URL en API sleutels.',
  'LBL_MODIFY_PROPERTIES_PAGE_TITLE'      => 'Connector instellingen: Connector eigenschappen instellen',
  'LBL_MODIFY_SEARCH_TITLE'               => 'Beheer connector zoeken',
  'LBL_MODIFY_SEARCH'                     => 'Zoeken',
  'LBL_MODIFY_SEARCH_DESC'                => 'Stel per module in op welke velden gezocht kan worden.',
  'LBL_MODIFY_SEARCH_PAGE_TITLE'          => 'Connector instellingen: Beheer connector zoeken',
  'LBL_MODULE_NAME'                       => 'Connectors',
  'LBL_NO_PROPERTIES'                     => 'Deze connector heeft geen instelbare eigenschappen.',
  'LBL_PARENT_DUNS'                       => 'Bovenliggende DUNS',
  'LBL_PREVIOUS'                          => '< Terug',
  'LBL_QUOTE'                             => 'Quote',
  'LBL_RECNAME'                           => dpl_mod_get("Accounts", false, true).' naam',
  'LBL_RESET_TO_DEFAULT'                  => 'Resetten naar standaardinstellingen',
  'LBL_RESET_TO_DEFAULT_CONFIRM'          => 'Weet u zeker dat u de standaardinstellingen wilt terugzetten?',
  'LBL_RESET_BUTTON_TITLE'                => 'Herstellen [Alt+R]',
  'LBL_RESULT_LIST'                       => 'Data lijst',
  'LBL_RUN_WIZARD'                        => 'Start wizard',
  'LBL_SAVE'                              => 'Opslaan',
  'LBL_SEARCHING_BUTTON_LABEL'            => 'Zoeken...',
  'LBL_SHOW_IN_LISTVIEW'                  => 'Tonen bij het samenvoegen van items',
  'LBL_SMART_COPY'                        => 'Slim kopi&#235;ren',
  'LBL_SUMMARY'                           => 'Samenvatting',
  'LBL_STEP1'                             => 'Zoek en bekijk data',
  'LBL_STEP2'                             => 'Items samenvoegen met',
  'LBL_TEST_SOURCE'                       => 'Test connector',
  'LBL_TEST_SOURCE_FAILED'                => 'Test mislukt',
  'LBL_TEST_SOURCE_RUNNING'               => 'Testen...',
  'LBL_TEST_SOURCE_SUCCESS'               => 'Test succesvol',
  'LBL_TITLE'                             => 'Data samenvoegen',
  'LBL_ULTIMATE_PARENT_DUNS'              => 'Uiteindelijke bovenliggende DUNS',

  'ERROR_RECORD_NOT_SELECTED'             => 'Fout: Selecteer eerst een item uit de lijst.',
  'ERROR_EMPTY_WRAPPER'                   => 'Fout: Unable to retrieve wrapper instance for the source [{$source_id}]',
  'ERROR_EMPTY_SOURCE_ID'                 => 'Fout: Bron ID niet gespecificeerd of leeg.',
  'ERROR_EMPTY_RECORD_ID'                 => 'Fout: Item ID niet gespecificeerd of leeg.',
  'ERROR_NO_ADDITIONAL_DETAIL'            => 'Fout: Er werden geen verdere gegevens over dit item gevonden.',
  'ERROR_NO_SEARCHDEFS_DEFINED'           => 'Er zijn geen modules opgegeven bij deze connector. Selecteer minstens &#233;&#233;n module voor deze connector.',
  'ERROR_NO_SEARCHDEFS_MAPPED'            => 'Fout: Er zijn geen connectors ingeschakelt die zoek velden hebben gedefinieerd.',
  'ERROR_NO_SOURCEDEFS_FILE'              => 'Fout: Bestand sourcedefs.php kon niet worden gevonden.',
  'ERROR_NO_SOURCEDEFS_SPECIFIED'         => 'Fout: Er zijn geen bronnen gedefinieerd om de data van op te halen.',
  'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE'=> 'Fout: Er zijn geen connectors geconfigureerd door deze module.',
  'ERROR_NO_SEARCHDEFS_MAPPING'           => 'Fout: Er zijn geen zoekvelden gedefinieerd voor deze module. Contacteer de beheer.',
  'ERROR_NO_FIELDS_MAPPED'                => 'Fout: U moet minstens 1 veld verbinden per connector.',
  'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS'    => 'Fout: Er zijn geen velden gedefinieerd om te tonen in de zoekresultaten. Contacteer de beheerder.',
  'LBL_TWITTER_USER'                      => 'Twitter gebruiker',
  'LBL_FACEBOOK_USER'                     => 'Facebook gebruiker',
);

$mod_strings_global = array();
require 'include/language/nl_NL.lang.mod_strings.php';
$mod_strings = array_merge($mod_strings_global, $mod_strings);
