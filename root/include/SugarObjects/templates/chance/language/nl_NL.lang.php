<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2007 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************
 * $Id$
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Kans',
  'LBL_MODULE_TITLE' => 'Kansen: Start',
  'LBL_SEARCH_FORM_TITLE' => 'Kansen zoeken',
  'LBL_VIEW_FORM_TITLE' => 'Kansen view',
  'LBL_LIST_FORM_TITLE' => 'Kansen lijst',
  'LBL_OPPORTUNITY_NAME' => 'Kans naam:',
  'LBL_OPPORTUNITY' => 'Kans:',
  'LBL_NAME' => 'Kans naam',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Naam',
  'LBL_LIST_ACCOUNT_NAME' => 'Relatie naam',
  'LBL_LIST_AMOUNT' => 'Bedrag',
  'LBL_LIST_DATE_CLOSED' => 'Sluiten',
  'LBL_LIST_SALES_STAGE' => 'Verkoopstadium',
  'LBL_ACCOUNT_ID' => 'Relatie ID',
  'LBL_CURRENCY_ID' => 'Valuta ID',

    //DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
    //END DON'T CONVERT
  'UPDATE' => 'Kans - valuta update',
  'UPDATE_DOLLARAMOUNTS' => 'Update US Dollar bedrag',
  'UPDATE_VERIFY' => 'Bedragen verifieren',
  'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in chances are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
  'UPDATE_FIX' => 'Bedragen repareren',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for chances based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Nieuwe valuta maken:',
  'UPDATE_VERIFY_FAIL' => 'Record verificatie mislukt:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Huidige valuta:',
  'UPDATE_VERIFY_FIX' => 'Het uitvoeren van de fix zal',
  'UPDATE_INCLUDE_CLOSE' => 'Ook gesloten records',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nieuw bedrag:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nieuwe valuta:',
  'UPDATE_DONE' => 'Klaar',
  'UPDATE_BUG_COUNT' => 'Bugs gevonden en getracht op te lossen:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs gevonden:',
  'UPDATE_COUNT' => 'Records geupdate:',
  'UPDATE_RESTORE_COUNT' => 'Record bedragen hersteld:',
  'UPDATE_RESTORE' => 'Bedragen herstellen',
  'UPDATE_RESTORE_TXT' => 'Hersteld bedragen vanuit de tijdens de reparatie opgeslagen backups.',
  'UPDATE_FAIL' => 'Kon niet updaten - ',
  'UPDATE_NULL_VALUE' => 'Bedrag is NULL, wijzig naar 0 -',
  'UPDATE_MERGE' => 'Valuta\'s samenvoegen',
  'UPDATE_MERGE_TXT' => 'Meerdere valuta\'s samenvoegen. Als er meerdere records zijn voor 1 valuta, kunt u ze samenvoegen. Dit zal ook de valuta\'s in de andere modules updaten.',
  'LBL_ACCOUNT_NAME' => 'Relatie naam:',
  'LBL_AMOUNT' => 'Bedrag:',
  'LBL_AMOUNT_USDOLLAR' => 'Bedrag USD:',
  'LBL_CURRENCY' => 'Valuata:',
  'LBL_DATE_CLOSED' => 'Verwachte sluitingsdatum:',
  'LBL_TYPE' => 'Type:',
  'LBL_CAMPAIGN' => 'Campaign:',
  'LBL_NEXT_STEP' => 'Volgende stap:',
  'LBL_LEAD_SOURCE' => 'Bron lead:',
  'LBL_SALES_STAGE' => 'Verkoopstadium:',
  'LBL_PROBABILITY' => 'Kans (%):',
  'LBL_DESCRIPTION' => 'Beschrijving:',
  'LBL_DUPLICATE' => 'Mogelijke dubbele kans',
  'MSG_DUPLICATE' => 'U wilt een kans aanmaken die wellicht al bestaat. De kansen die op de door u toegevoegde kans lijken staan hieronder.<br>Klik op Opslaan om uw kans toch op te slaan, of op Annuleren om terug te gaan.',
  'LBL_NEW_FORM_TITLE' => 'Nieuwe kans',
  'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
  'LNK_OPPORTUNITY_LIST' => 'Kansen',
  'ERR_DELETE_RECORD' => 'Een record moet zijn opgegeven om het te kunnen verwijderen.',
  'LBL_TOP_OPPORTUNITIES' => 'Mijn top open kansen',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Weet u zeker dat u deze contactpersoon van deze kans wilt verwijderen?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Weet u zeker dat u deze kans van dit project wilt verwijderen?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kansen',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
  'LBL_RAW_AMOUNT' => 'Ruw bedrag',

  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruikers',
  'LBL_LIST_SALES_STAGE' => 'Verkoopstadium',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mijn gesloten kansen',
  'LBL_TOTAL_OPPORTUNITIES' => 'Totaal kansen',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Gewonnen kansen',
  'LBL_ASSIGNED_TO_ID' => 'Toegewezen aan ID',
  'LBL_CREATED_ID' => 'Gemaakt door ID',
  'LBL_MODIFIED_ID' => 'Gewijzigd door ID',
  'LBL_MODIFIED_NAME' => 'Gewijzigd door gebruiker',
  'LBL_OPPORTUNITY_INFORMATION' => 'Kans informatie',

);