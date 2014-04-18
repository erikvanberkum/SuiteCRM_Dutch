<?php

/**
 * Copyright (c) 2007-2009 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 *
 * @author Loek van Gool <l.vgool@madcap.nl>
 */

if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

include_once 'custom/include/dutch/dutch_langpack_utils.php';

$mod_strings = array(
  'LBL_TEAM'                              => 'Team',
  'LBL_TEAM_ID'                           => 'Team ID',
  'LBL_ASSIGNED_TO_ID'                    => 'Toegewezen gebruiker ID',
  'LBL_ASSIGNED_TO_NAME'                  => 'Toegewezen aan',
  'LBL_ID'                                => 'ID',
  'LBL_MODIFIED_NAME'                     => 'Gewijzigd door naam',
  'LBL_DESCRIPTION'                       => 'Omschrijving',
  'LBL_NAME'                              => 'Naam',
  'LBL_SAVING'                            => 'Opslaan...',
  'LBL_SAVED'                             => 'Opgeslagen',
  'LBL_CREATED_USER'                      => 'Gemaakt door',
  'LBL_MODIFIED_USER'                     => 'Gewijzigd door',
  'LBL_LIST_FORM_TITLE'                   => 'Sugar Feed lijst',
  'LBL_MODULE_NAME'                       => 'Sugar Feed',
  'LBL_MODULE_TITLE'                      => 'Sugar Feed',
  'LBL_DASHLET_DISABLED'                  => 'Warning: Sugar Feed is uitgeschakeld. Er worden geen nieuwe items toegevoegd.',
  'LBL_ADMIN_SETTINGS'                    => 'Sugar Feed instellingen',
  'LBL_RECORDS_DELETED'                   => 'Alle vorige Sugar Feeds zijn verwijderd, als Sugar Feeds ingeschakeld is worden vanzelf nieuwe items toegevoegd.',
  'LBL_CONFIRM_DELETE_RECORDS'            => 'Weet u zeker dat u alle Sugar Feeds items wilt verwijderen?',
  'LBL_FLUSH_RECORDS'                     => 'Feed Entries verwijderen',
  'LBL_ENABLE_FEED'                       => 'Sugar Feed inschakelen',
  'LBL_ENABLE_MODULE_LIST'                => 'Activeer feeds voor',
  'LBL_HOMEPAGE_TITLE'                    => 'Mijn Sugar Feed',
  'LNK_NEW_RECORD'                        => 'Nieuwe Sugar Feed',
  'LNK_LIST'                              => 'Sugar Feed',
  'LBL_SEARCH_FORM_TITLE'                 => 'Zoek Sugar Feed',
  'LBL_HISTORY_SUBPANEL_TITLE'            => 'Bekijk geschiedenis',
  'LBL_ACTIVITIES_SUBPANEL_TITLE'         => 'Activieiten',
  'LBL_SUGAR_FEED_SUBPANEL_TITLE'         => 'Sugar Feed',
  'LBL_NEW_FORM_TITLE'                    => 'Nieuwe Sugar Feed',
  'LBL_ALL'                               => 'Alles',
  'LBL_USER_FEED'                         => 'Gebruiker Feed',
  'LBL_ENABLE_USER_FEED'                  => 'Activeer gebruiker Feed',
  'LBL_TO'                                => 'Verzend naar',
  'LBL_IS'                                => 'is',
  'LBL_DONE'                              => 'Klaar',
  'LBL_TITLE'                             => 'Titel',
  'LBL_ROWS'                              => 'Rijen',
  'LBL_CATEGORIES'                        => 'Modules',
  'LBL_TIME_LAST_WEEK'                    => 'Vorige week',
  'LBL_TIME_WEEKS'                        => 'Weken',
  'LBL_TIME_DAYS'                         => 'Dagen',
  'LBL_TIME_YESTERDAY'                    => 'Gisteren',
  'LBL_TIME_HOURS'                        => 'Uren',
  'LBL_TIME_HOUR'                         => 'Uur',
  'LBL_TIME_MINUTES'                      => 'Minuten',
  'LBL_TIME_MINUTE'                       => 'Minuten',
  'LBL_TIME_SECONDS'                      => 'Seconden',
  'LBL_TIME_SECOND'                       => 'Seconden',
  'LBL_TIME_AGO'                          => 'geleden',

  'CREATED_CONTACT'                       => 'heeft een <b>NIEUWE</b> '.dpl_mod_get("Contacts", true, true).' gemaakt',
  'CREATED_OPPORTUNITY'                   => 'heeft een <b>NIEUWE</b> '.dpl_mod_get("Opportunities", true, true).' gemaakt',
  'CREATED_CASE'                          => 'heeft een <b>NIEUWE</b> '.dpl_mod_get("Cases", true, true).' gemaakt',
  'CREATED_LEAD'                          => 'heeft een <b>NIEUWE</b> '.dpl_mod_get("Leads", true, true).' gemaakt',
  'FOR'                                   => 'voor',
  'CLOSED_CASE'                           => 'heeft een '.dpl_mod_get("Cases", true, true).' <b>GESLOTEN</b>',
  'CONVERTED_LEAD'                        => 'heeft een '.dpl_mod_get("Leads", true, true).' <b>GECONVERTEERD</b>',
  'WON_OPPORTUNITY'                       => 'heeft een '.dpl_mod_get("Opportunities", true, true).' <b>GEWONNEN</b>',
  'WITH'                                  => 'met',

  'LBL_LINK_TYPE_Link'                    => 'Link',
  'LBL_LINK_TYPE_Image'                   => 'Afbeelding',
  'LBL_LINK_TYPE_YouTube'                 => 'YouTube&#153;',

  'LBL_SELECT'                            => 'Selecteer',
  'LBL_POST'                              => 'Verzend',

'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruikers ID',
'LBL_ASSIGNED_TO_NAME' => 'Gebruiker',
'LBL_ID' => 'ID',
'LBL_DATE_ENTERED' => 'Datum aangemaakt',
'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
'LBL_MODIFIED' => 'Gewijzigd door',
'LBL_MODIFIED_ID' => 'Gewijzigd door ID',
'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
'LBL_CREATED' => 'Aangemaakt door',
'LBL_CREATED_ID' => 'Aangemaakt door ID',
'LBL_DESCRIPTION' => 'Omschrijving',
'LBL_DELETED' => 'Verwijderd',
'LBL_CREATED_USER' => 'Aangemaakt door gebruiker',
'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
'LBL_LIST_NAME' => 'Naam',
'LBL_TEAM' => 'Teams',
'LBL_TEAMS' => 'Teams',
'LBL_TEAM_ID' => 'Team ID',
'LBL_HISTORY_SUBPANEL_TITLE' => 'Bekijk geschiedenis',
'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
'LBL_EXTERNAL_PREFIX' => 'Extern:',
'LBL_EXTERNAL_WARNING' => 'Items labeled "external" require an <a href="?module=EAPM">external account</a>. ',
'LBL_AUTHENTICATE' => 'Verbinden met',
'LBL_AUTHENTICATION_PENDING' => 'Niet alle van de externe accounts die u hebt geselecteerd zijn geverifieerd.  Klik op "Annuleren" om terug te keren naar het venster Opties om de externe rekeningen te verifiëren, of klik op "Ok" om verder te gaan zonder verificatie.',
'LBL_ADVANCED_SEARCH' => 'Geavanceerd zoeken',
'LBL_BASICSEARCH' => 'Basis zoeken',
'LBL_SHOW_MORE_OPTIONS' => 'Toon meer opties',
'LBL_HIDE_OPTIONS' => 'Verberg opties',
'LBL_VIEW' => 'Toon',
'LBL_POST_TITLE' => 'Post status update voor',
'LBL_URL_LINK_TITLE' => 'URL link om te gebruiken',
'LBL_TEAM_VISIBILITY_TITLE' => 'team die deze post kan zien',
);
//function dpl_mod_get(){}
$mod_strings_global = array();
require 'include/language/nl_NL.lang.mod_strings.php';
$mod_strings = array_merge($mod_strings_global, $mod_strings);
?>
