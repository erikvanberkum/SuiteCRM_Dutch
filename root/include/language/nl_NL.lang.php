<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

/**
 * Copyright (c) 2014 Acniti (http:/www.acniti.com)
 * Copyright (c) 2007 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array (
    //e.g. auf Deutsch 'Contacts'=>'Contakten',
  'language_pack_name' => 'Nederlands (NL)',
  'source_default_key' => 'Self Generated',
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'case_relationship_type_default_key' => 'Primary Contact',
  'sales_stage_default_key' => 'Prospecting',
  'reminder_max_time' => 3600,
  'task_priority_default' => 'Medium',
  'task_status_default' => 'Not Started',
  'meeting_status_default' => 'Planned',
  'call_status_default' => 'Planned',
  'call_direction_default' => 'Outbound',
  'case_status_default_key' => 'New',
  'case_priority_default_key' => 'P2',
  'project_task_priority_default' => 'Medium',
  'project_status_default' => 'Draft',
  'project_priority_default' => 'Medium',
  'record_type_default_key' => 'Accounts',
  'default_quote_stage_key' => 'Draft',
  'default_order_stage_key' => 'Pending',
  'quote_relationship_type_default_key' => 'Primary Decision Maker',
  'issue_priority_default_key' => 'Medium',
  'issue_resolution_default_key' => '',
  'issue_status_default_key' => 'New',
  'bug_priority_default_key' => 'Medium',
  'bug_resolution_default_key' => '',
  'bug_status_default_key' => 'New',
  'bug_type_default_key' => 'Bug',
  'product_category_default_key' => '',
  'account_type_dom' => array (
    '' => '',
    'Analyst' => 'Analist',
    'Competitor' => 'Concurrent',
    'Customer' => 'Klant',
    'Integrator' => 'Integrator',
    'Investor' => 'Investeerder',
    'Partner' => 'Partner',
    'Press' => 'Pers',
    'Prospect' => 'Prospect',
    'Reseller' => 'Wederverkoper',
    'Other' => 'Anders'
  ),
  'activity_dom' => array (
    'Call' => 'Telefoongesprek',
    'Meeting' => 'Afspraak',
    'Task' => 'Taak',
    'Email' => 'E-mail',
    'Note' => 'Notitie'
  ),
  'bug_priority_dom' => array (
    'Urgent' => 'Ugent',
    'High' => 'Hoog',
    'Medium' => 'Medium',
    'Low' => 'Laag'
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' => array (
    '' => '',
    'Accepted' => 'Geaccepteerd',
    'Duplicate' => 'Dupliceer',
    'Fixed' => 'Opgelost',
    'Out of Date' => 'Verlopen',
    'Invalid' => 'Ongeldig',
    'Later' => 'Later'
  ),
  'bug_status_dom' => array (
    'New' => 'Nieuw',
    'Assigned' => 'Toegewezen',
    'Closed' => 'Gesloten',
    'Pending' => 'Pending',
    'Rejected' => 'Afgewezen'
  ),
  'bug_type_dom' => array (
    'Defect' => 'Defect',
    'Feature' => 'Uitbreiding'
  ),
  'call_direction_dom' => array (
    'Inbound' => 'Inkomend',
    'Outbound' => 'Uitgaand'
  ),
  'call_status_dom' => array (
    'Planned' => 'Planned',
    'Held' => 'Gehouden',
    'Not Held' => 'Niet gehouden'
  ),
  'campaign_status_dom' => array (
    '' => '',
    'Planning' => 'Plannen',
    'Active' => 'Actief',
    'Inactive' => 'Inactief',
    'Complete' => 'Compleet',
    'In Queue' => 'In wachtrij',
    'Sending' => 'Aan het versturen...'
  ),
  'campaign_type_dom' => array (
    '' => '',
    'Telesales' => 'Telesales',
    'Mail' => 'Mail',
    'Email' => 'E-mail',
    'Print' => 'Afdrukken',
    'Web' => 'Web',
    'Radio' => 'Radio',
    'Television' => 'Televisie',
    'NewsLetter' => 'Nieuwsbrief',
  ),
  'campainglog_activity_type_dom' => array (
    '' => '',
    'targeted' => 'Berichten verstuurd',
    'send error' => 'Bounced, reden onbekend',
    'invalid email' => 'Bounced, fout e-mailadres',
    'link' => 'Link aangeklikt',
    'viewed' => 'Email bekeken',
    'removed' => 'Afgemeld voor e-mail',
    'lead' => 'Lead Aangemaakt',
    'contact' => 'Contactpersoon aangemaakt',
	'blocked' => 'Onderdrukt door het adres of domein',
  ),
  'campainglog_target_type_dom' => array (
    'Contacts' => 'Contactpersonen',
    'Users' => 'Gebruikers',
    'Prospects' => 'Doelen',
    'Leads' => 'Leads',
	'Accounts' => 'Bedrijven',
  ),
  'case_priority_dom' => array (
    'P1' => 'Hoog',
    'P2' => 'Medium',
    'P3' => 'Laag'
  ),
  'case_relationship_type_dom' => array (
    '' => '',
    'Primary Contact' => 'Primair contactpersoon',
    'Alternate Contact' => 'Alt. contactpersoon'
  ),
  'case_status_dom' => array (
    'New' => 'Nieuw',
    'Assigned' => 'Toegewezen',
    'Closed' => 'Gesloten',
    'Pending Input' => 'Wacht op input',
    'Rejected' => 'Afgewezen',
    'Duplicate' => 'Dupliceer'
  ),
  'case_type_dom' => array (
    'Administration' => 'Administration',
    'Product' => 'Product',
    'User' => 'Gebruiker'
  ),
  'checkbox_dom' => array (
    '' => '',
    '1' => 'Ja',
    '2' => 'Nee'
  ),
  'custom_fields_importable_dom' => array (
  	'true' => 'Ja',
  	'false' => 'Nee',
  	'required' => 'Verplicht'
  ),
  'custom_fields_merge_dup_dom' => array (
    '0' => 'Gedeactiveerd',
    '1' => 'Geactiveerd'
  ),
  'document_category_dom' => array (
    '' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Kennisbank',
    'Sales' => 'Sales'
  ),
  'document_status_dom' => array (
    'Active' => 'Actief',
    'Draft' => 'Concept',
    'FAQ' => 'FAQ',
    'Expired' => 'Verlopen',
    'Under Review' => 'Ter controle',
    'Pending' => 'Pending'
  ),
  'document_subcategory_dom' => array (
    '' => '',
    'Marketing Collateral' => 'Marketing organisatie',
    'Product Brochures' => 'Product brochures',
    'FAQ' => 'FAQ'
  ),
  'document_template_type_dom' => array (
    '' => '',
    'mailmerge' => 'Mail merge',
    'eula' => 'EULA',
    'nda' => 'NDA',
    'license' => 'Licentie overeenkomst'
  ),
  'dom_cal_month_long' => array (
    '0' => '',
    '1' => 'Januari',
    '2' => 'Februari',
    '3' => 'Maart',
    '4' => 'April',
    '5' => 'Mei',
    '6' => 'Juni',
    '7' => 'Juli',
    '8' => 'Augustus',
    '9' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'December'
  ),
  'dom_cal_month_short' => array (
    '0' => "",
    '1' => "jan",
    '2' => "feb",
    '3' => "maa",
    '4' => "apr",
    '5' => "mei",
    '6' => "jun",
    '7' => "jul",
    '8' => "aug",
    '9' => "sep",
    '10' => "oct",
    '11' => "nov",
    '12' => "dec"
  ),
  'dom_cal_day_long' => array (
    '0' => "",
    '1' => "Zondag",
    '2' => "Maandag",
    '3' => "Dinsdag",
    '4' => "Woensdag",
    '5' => "Donderdag",
    '6' => "Vrijdag",
    '7' => "Zaterdag"
  ),
  'dom_cal_day_short' => array (
    '0' => "",
    '1' => "zon",
    '2' => "maa",
    '3' => "din",
    '4' => "woe",
    '5' => "don",
    '6' => "vri",
    '7' => "zat"
  ),
  'dom_email_archived_status' => array (
    'archived' => 'Gearchiveerd'
  ),
  'dom_email_bool' => array (
    'bool_true' => 'Ja',
    'bool_false' => 'Nee'
  ),
  'dom_email_distribution' => array (
    '' => '--Geen--',
    'direct' => 'Direct toewijzen',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Minst bezet'
  ),
  'dom_email_editor_option' => array (
    '' => 'Standaard e-mail formaat',
    'html' => 'HTML e-mail',
    'plain' => 'Tekst e-mail'
  ),
  'dom_email_errors' => array (
    '1' => 'Kies een specifieke gebruiker bij direct toewijzen items.',
    '2' => 'Je kunt alleen gekozen items toevoegen wanneer je sneltoevoegen gebruikt'
  ),
  'dom_email_link_type' => array (
    '' => 'Standaard e-mail client',
    'sugar' => 'SugarCRM e-mail client',
    'mailto' => 'Externe e-mail client'
  ),
  'dom_email_server_type' => array (
    '' => '--Geen--',
    'imap' => 'IMAP',
    'pop3' => 'POP3'
  ),
  'dom_email_status' => array (
    'archived' => 'Gearchiveerd',
    'closed' => 'Gesloten',
    'draft' => 'Concept',
    'read' => 'Gelezen',
    'replied' => 'Beantwoord',
    'sent' => 'Verzonden',
    'send_error' => 'Verzendfout',
    'unread' => 'Ongelezen'
  ),
  'dom_email_types' => array (
    'out' => 'Verzonden',
    'archived' => 'Gearchiveerd',
    'draft' => 'Concept',
    'inbound' => 'Inkomend',
    'campaign' => 'Campagnes'
  ),
  'dom_int_bool' => array (
    '1' => 'Ja',
    '0' => 'Nee'
  ),
  'dom_mailbox_type' => array (/*''           => '--None Specified--',*/
    'pick' => '--Geen--',
    'createcase' => 'Nieuw verzoek',
    'bounce' => 'Bounce handling'
  ),
  'dom_email_distribution_for_auto_create' => array (
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Least-Busy'
  ),
  'dom_meeting_accept_options' => array (
    'accept' => 'Accepteer',
    'decline' => 'Afwijzen',
    'tentative' => 'Voorlopig'
  ),
  'dom_meeting_accept_status' => array (
    'accept' => 'Geaccepteerd',
    'decline' => 'Afgewezen',
    'tentative' => 'Voorlopig',
    'none' => 'geen'
  ),
  'dom_meridiem_uppercase' => array (
    'AM' => 'AM',
    'PM' => 'PM'
  ),
  'dom_report_types' => array (
    'tabular' => 'Rijen en kolommen',
    'summary' => 'Totalen',
    'detailed_summary' => 'Totalen met details',
    'Matrix' => 'Matrix'
  ),
  'dom_switch_bool' => array (
    'on' => 'Ja',
    'off' => 'Nee',
    '' => 'Nee'
  ),
  'dom_timezones' => array (
    '-12' => '(GMT - 12) International Date Line West',
    '-11' => '(GMT - 11) Midway Island, Samoa',
    '-10' => '(GMT - 10) Hawaii',
    '-9' => '(GMT - 9) Alaska',
    '-8' => '(GMT - 8) San Francisco',
    '-7' => '(GMT - 7) Phoenix',
    '-6' => '(GMT - 6) Saskatchewan',
    '-5' => '(GMT - 5) New York',
    '-4' => '(GMT - 4) Santiago',
    '-3' => '(GMT - 3) Buenos Aires',
    '-2' => '(GMT - 2) Mid-Atlantic',
    '-1' => '(GMT - 1) Azoren',
    '0' => '(GMT)',
    '1' => '(GMT + 1) Amsterdam',
    '2' => '(GMT + 2) Athene',
    '3' => '(GMT + 3) Moscow',
    '4' => '(GMT + 4) Kabul',
    '5' => '(GMT + 5) Ekaterinburg',
    '6' => '(GMT + 6) Astana',
    '7' => '(GMT + 7) Bangkok',
    '8' => '(GMT + 8) Perth',
    '9' => '(GMT + 9) Seol',
    '10' => '(GMT + 10) Brisbane',
    '11' => '(GMT + 11) Solomone Is.',
    '12' => '(GMT + 12) Auckland'
  ),
  'duration_intervals' => array (
    '0' => '00',
    '15' => '15',
    '30' => '30',
    '45' => '45'
  ),
  'email_marketing_status_dom' => array (
    '' => '',
    'active' => 'Actief',
    'inactive' => 'Inactief'
  ),
  'employee_status_dom' => array (
    'Active' => 'Actief',
    'Terminated' => 'Beeindigd',
    'Leave of Absence' => 'Afwezig'
  ),
  'forecast_schedule_status_dom' => array (
    'Active' => 'Actief',
    'Inactive' => 'Inactief'
  ),
  'forecast_type_dom' => array (
    'Direct' => 'Direct',
    'Rollup' => 'Verzameling'
  ),
  'industry_dom' => array (
    '' => '',
    'Apparel' => 'Kleding',
    'Banking' => 'Banken',
    'Biotechnology' => 'Biotechnologie',
    'Chemicals' => 'Chemisch',
    'Communications' => 'Communicatie',
    'Construction' => 'Bouw',
    'Consulting' => 'Advies',
    'Education' => 'Opleidingen',
    'Electronics' => 'Electronica',
    'Energy' => 'Energie',
    'Engineering' => 'Engineering',
    'Entertainment' => 'Ontspanning',
    'Environmental' => 'Milieu',
    'Finance' => 'Financi',
    'Government' => 'Overheid',
    'Healthcare' => 'Gezondheidszorg',
    'Hospitality' => 'Horeca',
    'Insurance' => 'Verzekeringen',
    'Machinery' => 'Machines',
    'Manufacturing' => 'Fabricage',
    'Media' => 'Media',
    'Not For Profit' => 'Non-profit',
    'Recreation' => 'Recreatie',
    'Retail' => 'Detailhandel',
    'Shipping' => 'Scheepvaart',
    'Technology' => 'Technologie',
    'Telecommunications' => 'Telecommunicatie',
    'Transportation' => 'Transport',
    'Utilities' => 'Nutsbedrijven',
    'Other' => 'Anders'
  ),
  'issue_priority_dom' => array (
    'Urgent' => 'Ugent',
    'High' => 'Hoog',
    'Medium' => 'Medium',
    'Low' => 'Laag'
  ),
  'issue_resolution_dom' => array (
    '' => '',
    'Accepted' => 'Geaccepteerd',
    'Duplicate' => 'Dupliceer',
    'Closed' => 'Gesloten',
    'Out of Date' => 'Verlopen',
    'Invalid' => 'Ongeldig'
  ),
  'issue_status_dom' => array (
    'New' => 'Nieuw',
    'Assigned' => 'Toegewezen',
    'Closed' => 'Gesloten',
    'Pending' => 'Pending',
    'Rejected' => 'Afgewezen'
  ),
  'kbdocument_attachment_option_dom' => array (
    '' => ''
  ),
  'kbdocument_canned_search' => array (
    'all' => 'Alles'
  ),
  'kbdocument_date_filter_options' => array (
    '' => '',
    'last_7_days' => 'Afgelopen 7 dagen',
    'next_7_days' => 'Aankomende 7 dagen',
    'last_month' => 'Afgelopen maand',
    'this_month' => 'Aankomende maand',
    'next_month' => 'Volgende maand',
    'last_30_days' => 'Afgelopen 30 dagen',
    'next_30_days' => 'Aankomende 30 dagen',
    'last_year' => 'Afgelopen jaar',
    'this_year' => 'Aankomend jaar',
    'next_year' => 'Volgend jaar'
  ),
  'kbdocument_status_dom' => array (
    'Draft' => 'Concept',
    'Expired' => 'Verlopen',
    'Published' => 'Gepubliceerd'
  ),
  'kbdocument_viewing_frequency_dom' => array (
    '' => ''
  ),
  'layouts_dom' => array (
    'Standard' => 'Voorstel',
    'Invoice' => 'Rekening',
    'Terms' => 'Betalingsvoorwaarden'
  ),
  'lead_source_dom' => array (
    '' => '',
    'Cold Call' => 'Koude acquisitie',
    'Existing Customer' => 'Bestaande klant',
    'Self Generated' => 'Zelf gegenereerd',
    'Employee' => 'Werknemer',
    'Partner' => 'Partner',
    'Public Relations' => 'PR',
    'Direct Mail' => 'Direct mail',
    'Conference' => 'Conferentie',
    'Trade Show' => 'Beurs',
    'Web Site' => 'Website',
    'Word of mouth' => 'Mond tot mond',
    'Email' => 'E-mail',
    'Campaign' => 'Campagnes',
    'Other' => 'Anders'
  ),
  'lead_status_dom' => array (
    '' => '',
    'New' => 'Nieuw',
    'Assigned' => 'Toegewezen',
    'In Process' => 'In behandeling',
    'Converted' => 'Geconverteerd',
    'Recycled' => 'Opnieuw',
    'Dead' => 'Dood'
  ),
  'meeting_status_dom' => array (
    'Planned' => 'Gepland',
    'Held' => 'Gehouden',
    'Not Held' => 'Niet gehouden'
  ),
  'messenger_type_dom' => array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL'
  ),
  'moduleList' => array (
    'Home' => 'Start',
    'Dashboard' => 'Dashboard',
    'Contacts' => 'Contactpersonen',
    'Accounts' => 'Bedrijven',
    'Opportunities' => 'Kansen',
    'Cases' => 'Klachten',
    'Notes' => 'Notities',
    'Calls' => 'Telefoongesprekken',
    'Emails' => 'E-mails',
    'Meetings' => 'Afspraken',
    'Tasks' => 'Taken',
    'Calendar' => 'Agenda',
    'Leads' => 'Leads',
    'Activities' => 'Activiteiten',
    'Bugs' => 'Bugtracker',
    'Feeds' => 'RSS',
    'iFrames' => 'Mijn Portal',
    'TimePeriods' => 'Tijdsvakken',
    'Project' => 'Projecten',
    'ProjectTask' => 'Project taak',
    'Campaigns' => 'Campagnes',
    'CampaignLog' => 'Campagne logboek',
    'Documents' => 'Documenten',
    'Sync' => 'Synchroniseer',
    'Users' => 'Gebruikers',
    'Releases' => 'Releases',
    'Prospects' => 'Doelen',
    'Queues' => 'Wachtrijen',
    'EmailMarketing' => 'E-mail marketing',
    'EmailTemplates' => 'E-mail templates',
    'ProspectLists' => 'Verzend lijsten',
    'SavedSearch' => 'Opgeslagen zoekcriteria',
    'Trackers' => 'Trackers',
    'TrackerPerfs' => 'Tracker snelheid',
    'TrackerSessions' => 'Tracker sessies',
    'TrackerQueries' => 'Tracker queries',
    'FAQ' => 'FAQ',
    'Newsletters' => 'Nieuwsbrieven',

	'Currencies' => 'Valuta',
	'TaxRates' => 'Belastingtarieven',
	'ContractTypes' => 'Contract Soorten',
	'Schedulers' => 'Schedulers',
	'Connectors' => 'Connectoren',
	'Roles' => 'Rollen',
	'Notifications' => 'Bekendmakingen',
	'Employees' => 'Werknemers',
	'ACLRoles' => 'Rollen',
	'InboundEmail' => 'Inkomende e-mail',
	'UpgradeWizard' => 'Upgrade Wizard',
	'SugarFeed' => 'Sugar Feed',
	'SugarFavorites' => 'Favorieten',
	'Sugar_Favorites' => 'Favorieten',
	'Administration' => 'Beheer',
  ),
  'moduleListSingular' => array (
    'Home' => 'Start',
    'Dashboard' => 'Dashboard',
    'Contacts' => 'Contactpersoon',
    'Accounts' => 'Bedrijf',
    'Opportunities' => 'Kans',
    'Cases' => 'Klacht',
    'Notes' => 'Notitie',
    'Calls' => 'Telefoongesprek',
    'Emails' => 'E-mail',
    'Meetings' => 'Afspraak',
    'Tasks' => 'Taak',
    'Calendar' => 'Agenda',
    'Leads' => 'Lead',
    'Activities' => 'Activiteit',
    'Bugs' => 'Bugtracker',
    'Feeds' => 'RSS',
    'iFrames' => 'Mijn Portal',
    'TimePeriods' => 'Tijdsvak',
    'Project' => 'Projecten',
    'ProjectTask' => 'Project taak',
    'Campaigns' => 'Campagnes',
    'Documents' => 'Documenten',
    'Sync' => 'Synchroniseer',
    'Users' => 'Gebruiker',

	'SugarFollowing' => 'SugarFollowing',
	'SugarFavorites' => 'SugarFavorieten',
  ),
  'navigation_paradigms' => array (
    'm' => 'Modules',
    'gm' => 'Gegroepeerde modules'
  ),
  'newsletter_frequency_dom' => array (
    '' => '',
    'Weekly' => 'Wekelijks',
    'Monthly' => 'Maandelijks',
    'Quarterly' => 'Per kwartaal',
    'Annually' => 'Jaarlijks',


  ),
  'notifymail_sendtype' => array (
    'sendmail' => 'sendmail',
    'SMTP' => 'SMTP'
  ),
  'opportunity_type_dom' => array (
    '' => '',
    'Existing Business' => 'Bestaand bedrijf',
    'New Business' => 'Nieuw bedrijf'
  ),
  'order_stage_dom' => array (
    'Pending' => 'Pending',
    'Confirmed' => 'Bevestigd',
    'On Hold' => 'Op \'hold\'',
    'Shipped' => 'Verzonden',
    'Cancelled' => 'Geannuleerd'
  ),
  'parent_type_display' => array (
    'Accounts' => 'Bedrijf',
    'Bugs' => 'Bugtracker',
    'Cases' => 'Klacht',
    'Contacts' => 'Contactpersoon',
    'Leads' => 'Lead',
    'Opportunities' => 'Kans',
    'Project' => 'Project',
    'ProjectTask' => 'Project taak',
    'Prospects' => 'Doelen',
    'Tasks' => 'Taak'
  ),
  'payment_terms' => array (
    '' => '',
    'Net 15' => 'Net 15',
    'Net 30' => 'Net 30'
  ),

  'product_category_default_key' => '',
  'product_category_dom' => array (
    '' => '',
    'Accounts' => 'Bedrijven',
    'Activities' => 'Activiteiten',
    'Bug Tracker' => 'Bugtracker',
    'Calendar' => 'Agenda',
    'Calls' => 'Telefoongesprekken',
    'Campaigns' => 'Campagnes',
    'Cases' => 'Klachten',
    'Contacts' => 'Contactpersonen',
    'Currencies' => 'Valuta',
    'Dashboard' => 'Dashboard',
    'Documents' => 'Documenten',
    'Emails' => 'E-mails',
    'Feeds' => 'Nieuwsfeeds',
    'Forecasts' => 'Vooruitzichten',
    'Help' => 'Help',
    'Home' => 'Start',
    'Leads' => 'Leads',
    'Meetings' => 'Afspraken',
    'Notes' => 'Notities',
    'Opportunities' => 'Kansen',
    'Outlook Plugin' => 'Outlook plugin',
    'Product Catalog' => 'Product catalogus',
    'Products' => 'Producten',
    'Projects' => 'Projecten',
    'Quotes' => 'Prijsopgaven',
    'Releases' => 'Releases',
    'RSS' => 'RSS',
    'Studio' => 'Studio',
    'Upgrade' => 'Upgrade',
    'Users' => 'Gebruikers'
  ),
  'projects_priority_options' => array (
    'high' => 'Hoog',
    'medium' => 'Medium',
    'low' => 'Laag'
  ),
  'projects_status_options' => array (
    'notstarted' => 'Niet begonnen',
    'inprogress' => 'In behandeling',
    'completed' => 'Afgerond'
  ),
  'project_priority_options' => array (
    'High' => 'Hoog',
    'Medium' => 'Medium',
    'Low' => 'Laag'
  ),
  'project_status_dom' => array (
    'Draft' => 'Concept',
    'In Review' => 'Wacht op review',
    'Published' => 'Gepubliceerd'
  ),
  'project_task_priority_options' => array (
    'High' => 'Hoog',
    'Medium' => 'Medium',
    'Low' => 'Laag'
  ),
  'project_task_status_options' => array (
    'Not Started' => 'Niet begonnen',
    'In Progress' => 'In behandeling',
    'Completed' => 'Afgerond',
    'Pending Input' => 'Wacht op input',
    'Deferred' => 'Uitgesteld'
  ),
  'project_task_utilization_options' => array (
    '0' => 'geen',
    '25' => '25',
    '50' => '50',
    '75' => '75',
    '100' => '100'
  ),
  'prospect_list_type_dom' => array (
    'default' => 'Standaard',
    'seed' => 'Controle',
    'exempt_domain' => 'Uitsluitingen - Per domein',
    'exempt_address' => 'Uitsluitingen - Per e-mail adres',
    'exempt' => 'Uitsluitingen - Per ID',
    'test' => 'Test'
  ),
  'opportunity_relationship_type_dom' => array (
    '' => '',
    'Primary Decision Maker' => 'Primaire besluitnemer',
    'Business Decision Maker' => 'Beslisser voor deze kans',
    'Business Evaluator' => 'Evaluator',
    'Technical Decision Maker' => 'Technische beslisser',
    'Technical Evaluator' => 'Technische evaluator',
    'Executive Sponsor' => 'Belangrijke sponsor',
    'Influencer' => 'Beinvloeder',
    'Other' => 'Anders'
  ),
  'quote_relationship_type_default_key' => 'Primary Decision Maker',
  'quote_relationship_type_dom' => array (
    '' => '',
    'Primary Decision Maker' => 'Primaire besluitnemer',
    'Business Decision Maker' => 'Beslisser voor deze kans',
    'Business Evaluator' => 'Evaluator',
    'Technical Decision Maker' => 'Technische beslisser',
    'Technical Evaluator' => 'Technische evaluator',
    'Executive Sponsor' => 'Belangrijke sponsor',
    'Influencer' => 'Beinvloeder',
    'Other' => 'Anders'
  ),
  'quote_stage_dom' => array (
    'Draft' => 'Concept',
    'Negotiation' => 'In onderhandeling',
    'Delivered' => 'Afgeleverd',
    'On Hold' => 'Op \'hold\'',
    'Confirmed' => 'Bevestigd',
    'Closed Accepted' => 'Afgesloten - geaccepteerd',
    'Closed Lost' => 'Verloren',
    'Closed Dead' => 'Afgesloten - Dood'
  ),
  'quote_type_dom' => array (
    'Quotes' => 'Prijsopgaaf',
    'Orders' => 'Volgorde'
  ),
  'record_type_display' => array (
    '' => '',
    'Accounts' => 'Bedrijf',
    'Opportunities' => 'Kans',
    'Cases' => 'Klacht',
    'Leads' => 'Lead',
    'Contacts' => 'Contactpersonen',
    'Bugs' => 'Bug',
    'Project' => 'Project',
    'ProjectTask' => 'Project taak',
    'Tasks' => 'Taak',
    'Prospects' => 'Prospect'
  ),
  'record_type_display_notes' => array (
    'Accounts' => 'Bedrijf',
    'Contacts' => 'Contactpersoon',
    'Opportunities' => 'Kans',
    'Cases' => 'Klacht',
    'Leads' => 'Lead',
    'Bugs' => 'Bug',
    'Emails' => 'E-mail',
    'Project' => 'Project',
    'ProjectTask' => 'Project taak',
    'Meetings' => 'Afspraak',
    'Calls' => 'Telefoongesprek',
	'Tasks' => 'Taak',
	'Prospects' => 'Prospect',
  ),
  'reminder_time_options' => array (
    60 => '1 minuut vantevoren',
    300 => '5 minuten vantevoren',
    600 => '10 minuten vantevoren',
    900 => '15 minuten vantevoren',
    1800 => '30 minuten vantevoren',
    3600 => '1 uur vantevoren'
  ),
  'sales_probability_dom' => array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => '30',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0'
  ),
  'sales_stage_dom' => array (
    'Prospecting' => 'Prospecting',
    'Qualification' => 'Kwalificatie',
    'Needs Analysis' => 'Behoefte analyse',
    'Value Proposition' => 'Maken van propositie',
    'Id. Decision Makers' => 'Identificatie van beslissers',
    'Perception Analysis' => 'Perceptie analyse',
    'Proposal/Price Quote' => 'Offerte/Prijsvoorstel',
    'Negotiation/Review' => 'Onderhandeling',
    'Closed Won' => 'Gewonnen',
    'Closed Lost' => 'Verloren'
  ),

'in_total_group_stages' => array (
	'Draft' => 'Ontwerp',
	'Negotiation' => 'Onderhandelingen',
	'Delivered' => 'Uitgeleverd',
	'On Hold' => 'In de wacht',
	'Confirmed' => 'Bevestigd',
	'Closed Accepted' => 'Gesloten geaccepteerde',
	'Closed Lost' => 'Gesloten verloren',
	'Closed Dead' => 'Gesloten niet meer actief',
  ),

  'salutation_dom' => array (
    '' => '',
    'Mr.' => 'Dhr.',
    'Ms.' => 'Mevr.',
    'Dr.' => 'Dr.',
    'Prof.' => 'Prof.',
    'MSC' => 'MSc',
    'BSc' => 'BSc',
    'LLB' => 'LLB',
    'LLM' => 'LLM',
    'BBA' => 'BBA',
    'MBA' => 'MBA',
  ),
  'schedulers_times_dom' => array (
    'not run' => 'De starttijd ligt in het verleden, taak niet uitgevoerd.',
    'ready' => 'Gereed',
    'in progress' => 'In behandeling',
    'failed' => 'Mislukt',
    'completed' => 'Afgerond',
    'no curl' => 'Niet Uitgevoerd: Geen cURL beschikbaar'
  ),
  'scheduler_status_dom' => array (
    'Active' => 'Actief',
    'Inactive' => 'Inactief'
  ),
  'source_dom' => array (
    '' => '',
    'Internal' => 'Intern',
    'Forum' => 'Forum',
    'Web' => 'Web',
    'InboundEmail' => 'E-mail'
  ),
  'task_priority_dom' => array (
    'High' => 'Hoog',
    'Medium' => 'Medium',
    'Low' => 'Laag'
  ),
  'task_status_dom' => array (
    'Not Started' => 'Niet gestart',
    'In Progress' => 'In behandeling',
    'Completed' => 'Afgerond',
    'Pending Input' => 'Wacht op input',
    'Deferred' => 'Uitgesteld'
  ),
  'user_status_dom' => array (
    'Active' => 'Actief',
    'Inactive' => 'Inactief'
  ),
  'lead_source_default_key' => 'Self Generated',
  'gender_list' => array (
    'male' => 'Man',
    'female' => 'Vrouw'
  ),
  "project_duration_units_dom" => array (
    'Days' => 'Dagen',
    'Hours' => 'Uren'
  ),
  'product_category_default_key' => '',
  'dom_meridiem_lowercase' => array (
    'am' => 'am',
    'pm' => 'pm'
  ),
  'scheduler_period_dom' => array (
    'min' => 'Minuten',
    'hour' => 'Uren'
  ),
  'merge_operators_dom' => array (
    'like' => 'Bevat',
    'exact' => 'Is precies',
    'start' => 'Begint met'
  ),

  'roi_type_dom' => array (
    'Revenue' => 'Opbrengst',
    'Investment' => 'Investering',
    'Expected_Revenue' => 'Verwachte opbrengst',
    'Budget' => 'Budget'
  ),
  'chart_strings' => array (
    'expandlegend' => 'Legenda uitklappen',
    'collapselegend' => 'Legenda inklappen',
    'clickfordrilldown' => 'Klikken voor drilldown',
    'drilldownoptions' => 'Drilldown opties',
    'detailview' => 'Detailview...',
    'piechart' => 'Cirkeldiagram',
    'groupchart' => 'Groepsdiagram',
    'stackedchart' => 'Gestapelde grafiek',
    'barchart'     => 'Staafdiagram',
    'horizontalchart' => 'Horizontale grafiek',
    'linechart' => 'Lijndiagram',
    'noData' => 'Data niet beschikbaar',
    'print'				=> 'Printen',
    'pieWedgeName' => 'secties',
	'horizontalbarchart' => 'Horizontale Staafdiagram',
  ),
  'kbadmin_actions_dom' => array (
    '' => '--Beheerder acties--',
    'Create New Tag' => 'Nieuwe tag',
    'Verwijder Tag' => 'Verwijder tag',
    'Rename Tag' => 'Hernoem tag',
    'Move Selected Articles' => 'Verplaats geselecteerde artikelen',
    'Apply Tags On Articles' => 'Tags op artikelen toepassen',
    'Delete Selected Articles' => 'Verwijder geselecteerde artikelen'
  )
);

$app_strings = array (
'DEFAULT' => 'Standaard',
'LBL_SORT' => 'Sorteer',
'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Inschakelen SMTP over SSL of TLS?',
'LBL_NO_ACTION' => 'Er is geen actie met die naam.',
'LBL_NO_DATA' => 'Geen gegevens',
'LBL_NOTIFICATIONS' => 'Notificaties',
'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'U heeft momenteel waarden in het formulier voor de telefoonnummers en adres velden. Om deze waarden te  overschrijven met de telefoon / adres gegevens van de het bedrijf dat u heeft geselecteerd, klikt u op \"OK\". Om de huidige waarden te behouden, klikt u op \"Annuleren\".',

  'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Server toevoegen...',

  'LBL_ROUTING_ADD_RULE' => 'Regel toevoegen',
  'LBL_ROUTING_ANY' => 'Elke',
  'LBL_ROUTING_BREAK' => '-',
  'LBL_ROUTING_BUTTON_SAVE' => 'Regel opslaan',

  'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Kopieer e-mail',
  'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Verwijder SugarCRM object',
  'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Verwijder bestand',
  'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Verwijder e-mail',
  'LBL_ROUTING_ACTIONS_FORWARD' => 'Doorsturen',
  'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Markeren',
  'LBL_ROUTING_ACTIONS_MARK_READ' => 'Markeer gelezen',
  'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Markeer ongelezen',
  'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Verplaats e-mail',
  'LBL_ROUTING_ACTIONS_PEFORM' => 'Voer de volgende acties uit',
  'LBL_ROUTING_ACTIONS_REPLY' => 'Beantwoorden aan e-mail',

  'LBL_ROUTING_CHECK_RULE' => 'Er heeft zich een fout voorgedaan',
  'LBL_ROUTING_CHECK_RULE_DESC' => 'Controleer alle gemarkeerde velden',
  'LBL_ROUTING_CONFIRM_DELETE' => 'Regel verwijderen? Deze actie kan niet ongedaan worden gemaakt',

  'LBL_ROUTING_FLAGGED' => 'gemarkeerd',
  'LBL_ROUTING_FORM_DESC' => 'Opgeslagen regels zijn direct actief',
  'LBL_ROUTING_FW' => 'FW: ',
  'LBL_ROUTING_LIST_TITLE' => 'Regels',
  'LBL_ROUTING_MATCH' => 'Als',
  'LBL_ROUTING_MATCH_2' => 'aan een van de volgende condities wordt voldaan',

  'LBL_ROUTING_MATCH_DESCRIPTION' => 'Body inhoud',
  'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Hoge prioriteit',
  'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Normale prioriteit',
  'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Lage prioriteit',
  'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Bevat',
  'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Bevat geen',

  'LBL_ROUTING_NAME' => 'Naam regel',
  'LBL_ROUTING_NEW_NAME' => 'Nieuwe regel',
  'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Origneel bericht volgt.',
  'LBL_ROUTING_RE' => 'RE: ',
  'LBL_ROUTING_SAVING_RULE' => 'Regel opslaan...',
  'LBL_ROUTING_SUB_DESC' => 'Aangevinkte regels zijn actief. Klik om te wijzigen.',
  'LBL_ROUTING_TO_ADDRESS' => 'naar adres',
  'LBL_ROUTING_WITH_TEMPLATE' => 'met template',

  'LBL_ROUTING_ALL' => 'Alles',
  'LBL_ROUTING_BUTTON_CANCEL' => 'Annuleren',
  'LBL_ROUTING_MATCH_CC_ADDR' => 'CC',
  'LBL_ROUTING_MATCH_FROM_ADDR' => 'Van',
  'LBL_ROUTING_MATCH_NAME' => 'Onderwerp',
  'LBL_ROUTING_MATCH_TO_ADDR' => 'Aan',
  'LBL_ROUTING_ONE_MOMENT' => 'Even geduld aub...',
  'LBL_ROUTING_TO' => 'tot',

  'LBL_EMAIL_ACCOUNTS_EDIT' => 'Wijzigen',
  'LBL_EMAIL_ACCOUNTS_NAME' => 'Naam',
  'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Mailserver systeem',
  'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Gebruik SMTP authenticatie?',
  'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP wachtwoord',
  'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP poort',
  'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP server',
  'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP gebruikersnaam',
  'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Stel Gmail standaardwaarden in',
  'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Uitgaan e-mail server',
  'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Gebruik SSL verbinding',
  'LBL_EMAIL_ACCOUNTS_TITLE' => 'E-mail account beheer',

  'LBL_EMAIL_ADD' => 'Adres toevoegen',

  'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Toevoegen',
  'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Nieuwe lijst',
  'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-mailadres',
  'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Alleen contactpersonen kunnen op het moment worden gewijzigd.',
  'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
  'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Voornaam',
  'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Achternaam',
  'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Mijn contactpersonen',
  'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Mijn verzendlijsten',
  'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Naam',
  'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Geen adressen gevonden',
  'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Opslaan en toevoegen aan adresboek',
  'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Zoeken',
  'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Selecteer adresboek items',
  'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresboek',
  'LBL_EMAIL_REPORTS_TITLE' => 'Rapportages',
  'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON' => '<img src=themes/default/images/icon_email_addressbook.gif align=absmiddle border=0> Adresboek',

  'LBL_EMAIL_ADDRESSES' => 'E-mail adressen',
  'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-mailadres',
  'LBL_EMAIL_ADDRESSES_TITLE' => 'E-mail adressen',
  'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Importeren naar Sugar',
  'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Bestand bijvoegen aan e-mail',
  'LBL_EMAIL_ATTACHMENT' => 'Bijvoegen',
  'LBL_EMAIL_ATTACHMENTS' => 'Bestanden bijvoegen',
  'LBL_EMAIL_ATTACHMENTS2' => 'Sugar documenten bijvoegen',
  'LBL_EMAIL_ATTACHMENTS3' => 'Template attachments',
  'LBL_EMAIL_BCC' => 'BCC',
  'LBL_EMAIL_CANCEL' => 'Annuleren',
  'LBL_EMAIL_CC' => 'CC',
  'LBL_EMAIL_CHARSET' => 'Karakterset',
  'LBL_EMAIL_CHECK' => 'Haal Mail',
  'LBL_EMAIL_CHECKING_NEW' => 'Checken voor nieuwe e-mail',
  'LBL_EMAIL_CHECKING_DESC' => 'Check voor nieuwe e-mail. <br><br>De eerste keer kan dit even duren.',
  'LBL_EMAIL_CLOSE' => 'Sluiten',
  'LBL_EMAIL_COFFEE_BREAK' => 'Check voor nieuwe e-mail. <br><br>Grote e-mails kunnen even duren.',
  'LBL_EMAIL_COMMON' => 'Veelvoorkomend',

  'LBL_EMAIL_COMPOSE' => 'E-mail opstellen',
  'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Vul aub minstens een ontvanger in.',
  'LBL_EMAIL_COMPOSE_LINK_TO' => 'Associeren met',
  'LBL_EMAIL_COMPOSE_NO_BODY' => 'Deze e-mail heeft geen body. Toch verzenden?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Deze e-mail heeft geen onderwerp. Toch verzenden?',
  'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(geen onderwerp)',
  'LBL_EMAIL_COMPOSE_READ' => 'E-mail lezen en opstellen',
  'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Verzende vanaf account',
  'LBL_EMAIL_COMPOSE_OPTIONS' => 'Opties',
  'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Vul aub een geldig adres voor Naar, CC en BCC in.',

  'LBL_EMAIL_CONFIRM_CLOSE' => 'Deze e-mail annuleren?',
  'LBL_EMAIL_CONFIRM_DELETE' => 'Items uit uw adresboek verwijderen?',

  'LBL_EMAIL_CREATE_NEW' => '--Maken bij opslaan--',

  'LBL_EMAIL_DATE_RECEIVED' => 'Datum ontvangen',
  'LBL_EMAIL_ASSIGNED_TO_USER' => 'Toegewezen aan gebruiker',
  'LBL_EMAIL_DATE_TODAY' => 'Vandaag',
  'LBL_EMAIL_DATE_YESTERDAY' => 'Gisteren',
  'LBL_EMAIL_DD_TEXT' => 'e-mails geselecteerd.',
  'LBL_EMAIL_DEFAULTS' => 'Standaardwaarden',
  'LBL_EMAIL_DELETE' => 'Verwijderen',
  'LBL_EMAIL_DELETE_CONFIRM' => 'Verwijder geselecteerde berichten?',
  'LBL_EMAIL_DELETE_SUCCESS' => 'E-mail verwijderd.',
  'LBL_EMAIL_DELETING_MESSAGE' => 'E-mail verwijderen...',
  'LBL_EMAIL_DETAILS' => 'Details',
  'LBL_EMAIL_DISPLAY_MSG' => 'E-mail adres(sen) {0} - {1} van {2}',
  'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Bekijk e-mail adres(sen) {0} - {1} van {2}',

  'LBL_EMAIL_EDIT_CONTACT' => 'Wijzig contactpersoon',
  'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Alleen het primaire adres zal worden gebruikt.',
  'LBL_EMAIL_EDIT_MAILING_LIST' => 'Wijzig verzendlijst',

  'LBL_EMAIL_EMPTYING_TRASH' => 'Prullenbak verwijderen...',
  'LBL_EMAIL_EMPTY_MSG' => 'Geen e-mailadressen om te laten zien',
  'LBL_EMAIL_EMPTY_ADDR_MSG' => 'No email addresses to display.',

  'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'De mapnaam moet uniek zijn. Probeer het opnieuw',
  'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Kan map niet verwijderen. Deze map (of een submap hiervan) heeft een associatie met een e-mail account.',
  'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Kan de bedoelde mapnaam niet uit de context halen. Probeer opnieuw.',
  'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Check aub uw instellingen.',
  'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Zorg ervoor dat u een achternaam invult.',
  'LBL_EMAIL_ERROR_DESC' => 'Er zijn fouten opgetreden: ',
  'LBL_EMAIL_DELETE_ERROR_DESC' => 'U heeft geen toegang tot deze functie. Neem contact op met uw systeembeheerder.',
  'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Sugar mapnamen moeten uniek zijn.',
  'LBL_EMAIL_ERROR_EMPTY' => 'Vul aub zoekcriteria in.',
  'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Er is een fout opgetreden.',
  'LBL_EMAIL_ERROR_LIST_NAME' => 'Er bestaat reeds een e-maillijst met die naam.',
  'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Bericht van de server verwijderd.',
  'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Of verwijderd van de server of verplaatst naar een andere map.',
  'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'De verbinding met e-mail server is mislukt. Raadpleeg de systeembeheerder.',
  'LBL_EMAIL_ERROR_MOVE' => 'Verplaatsen tussen servers wordt momenteel niet ondersteund.',
  'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Fout bij verplaatsen',
  'LBL_EMAIL_ERROR_NAME' => 'Een naam is verplicht',
  'LBL_EMAIL_ERROR_FROM_ADDRESS' => '"Van" adres is verplicht.',
  'LBL_EMAIL_ERROR_NO_FILE' => 'Geef aub een bestand op.',
  'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP mappen hernoemen wordt momenteel niet ondersteund.',
  'LBL_EMAIL_ERROR_SERVER' => 'Een e-mail server adres is verplicht',
  'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Deze e-mail account is wellicht niet opgeslagen.',
  'LBL_EMAIL_ERROR_TIMEOUT' => 'Fout bij communicatie met de server.',
  'LBL_EMAIL_ERROR_USER' => 'Een login naam is verplicht.',
  'LBL_EMAIL_ERROR_PASSWORD' => 'Een wachtwoord is verplicht.',
  'LBL_EMAIL_ERROR_PORT' => 'Een e-mail server poort is verplicht.',
  'LBL_EMAIL_ERROR_PROTOCOL' => 'Een server protocol is verplicht.',
  'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Gemonitorde map is verplicht.',
  'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Prullenbak map is verplicht.',
  'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Deze informatie is niet beschikbaar.',

  'LBL_EMAIL_FOLDERS' => '<img src=themes/default/images/icon_email_folder.gif align=absmiddle border=0> Mappen',
  'LBL_EMAIL_FOLDERS_ACTIONS' => 'Verplaatsen naar',
  'LBL_EMAIL_FOLDERS_ADD' => 'Toevoegen',
  'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Nieuwe map toevoegen',
  'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Opslaan',
  'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Deze map toevoegen aan',
  'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Deze map niet worden gewijzigd',
  'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Are you sure you would like to delete this folder?\\nThis process cannot be reversed.\\nFolder deletions will cascade to all contained folders.',
  'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nieuwe mapnaam',
  'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Selecteer aub eerst een map voordat u doorgaat.',
  'LBL_EMAIL_FOLDERS_TITLE' => 'Sugar mappen beheren.',
  'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Gebruikt groep',

  'LBL_EMAIL_FORWARD' => 'Doorsturen',
  'LBL_EMAIL_DELIMITER' => '::;::',
  'LBL_EMAIL_FOUND' => 'Gevonden',
  'LBL_EMAIL_FROM' => 'Van',
  'LBL_EMAIL_GROUP' => 'groep',
  'LBL_EMAIL_HOME_FOLDER' => 'Start',
  'LBL_EMAIL_HTML_RTF' => 'Verzend HTML',
  'LBL_EMAIL_IE_DELETE' => 'E-mail account verwijderen...',
  'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Weet u zeker dat u deze e-mail account wilt verwijderen?',
  'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Verwijderen succesvol.',
  'LBL_EMAIL_IE_SAVE' => 'E-mail account informatie opslaan...',
  'LBL_EMAIL_IMPORTING_EMAIL' => 'E-mails importeren...',
  'LBL_EMAIL_IMPORT_EMAIL' => 'Importeren in Sugar',
  'LBL_EMAIL_INVALID' => 'Ongeldig',

  'LBL_EMAIL_LOADING' => 'Laden...',
  'LBL_EMAIL_MARK' => 'Markeren',
  'LBL_EMAIL_MARK_FLAGGED' => 'Als belangrijk',
  'LBL_EMAIL_MARK_READ' => 'Als gelezen',
  'LBL_EMAIL_MARK_UNFLAGGED' => 'Als niet belangrijk',
  'LBL_EMAIL_MARK_UNREAD' => 'Als ongelezen',
  'LBL_EMAIL_ASSIGN_TO' => 'Toewijzen aan',

  'LBL_EMAIL_MENU_ADD_FOLDER' => 'Maak map',
  'LBL_EMAIL_MENU_COMPOSE' => 'Opstellen naar',
  'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Verwijder map',
  'LBL_EMAIL_MENU_EDIT' => 'Wijzigen',
  'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Leeg prullenbak',
  'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synchroniseer',
  'LBL_EMAIL_MENU_REMOVE' => 'Verwijderen',
  'LBL_EMAIL_MENU_RENAME' => 'Hernoemen',
  'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Hernoem map',
  'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Map hernoemen...',
  'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Maak aub een selectie voordat u deze aktie uitvoert.',

  'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Maak een map (op afstand of in Sugar)',
  'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Archiveer deze e-mails naar Sugar',
  'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'E-mail geselecteerde lijsten',
  'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'E-mail deze contactpersoon',
  'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Contactpersoon verwijderen',
  'LBL_EMAIL_MENU_HELP_DELETE' => 'Verwijder deze e-mails',
  'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Verwijder een map (op afstand of in Sugar)',
  'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Wijzig een contactpersoon',
  'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Wijzig een adreslijst',
  'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Verwijdert alle prullenbakken van uw account.',
  'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Markeer deze e-mails als belangrijk',
  'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Markeer deze e-mails als gelezen',
  'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Markeer deze e-mails als niet belangrijk',
  'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Markeer deze e-mails als ongelezen',
  'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Verwijder adreslijst',
  'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Hernoem een map (op afstand of in Sugar)',
  'LBL_EMAIL_MENU_HELP_REPLY' => 'Beantwoord deze e-mail(s)',
  'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Allen beantwoorden',

  'LBL_EMAIL_MESSAGES' => 'berichten',

  'LBL_EMAIL_ML_NAME' => 'Lijst naam',
  'LBL_EMAIL_ML_ADDRESSES_1' => 'Geselecteerde adreslijsten',
  'LBL_EMAIL_ML_ADDRESSES_2' => 'Beschikbare adreslijsten',

  'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> om meerdere te selecteren<br />(Mac: <b>CMD-Click</b>)',

  'LBL_EMAIL_NO' => 'Nee',

  'LBL_EMAIL_OK' => 'OK',
  'LBL_EMAIL_ONE_MOMENT' => 'Even geduld aub...',
  'LBL_EMAIL_OPEN_ALL' => 'Open meerdere berichten',
  'LBL_EMAIL_OPTIONS' => 'Opties',
  'LBL_EMAIL_OPT_OUT' => 'Afgemeld voor e-mail',
  'LBL_EMAIL_PAGE_AFTER' => 'van {0}',
  'LBL_EMAIL_PAGE_BEFORE' => 'Pagina',
  'LBL_EMAIL_PERFORMING_TASK' => 'Taak uitvoeren...',
  'LBL_EMAIL_PRIMARY' => 'Primaire',
  'LBL_EMAIL_PRINT' => 'Afdrukken',

  'LBL_EMAIL_QC_BUGS' => 'Bug',
  'LBL_EMAIL_QC_CASES' => 'Klacht',
  'LBL_EMAIL_QC_LEADS' => 'Lead',
  'LBL_EMAIL_QC_CONTACTS' => 'Contactpersoon',
  'LBL_EMAIL_QC_TASKS' => 'Taak',
  'LBL_EMAIL_QUICK_CREATE' => 'Snel aanmaken',

  'LBL_EMAIL_REBUILDING_FOLDERS' => 'Mappen opnieuw opbouwen',
  'LBL_EMAIL_RELATE_TO' => 'Relateren',
  'LBL_EMAIL_REMOVE' => 'Verwijderen',
  'LBL_EMAIL_REPLY' => 'Beantwoord',
  'LBL_EMAIL_REPLY_ALL' => 'Alleen beantwoorden',
  'LBL_EMAIL_REPLY_TO' => 'Beantwoord-aan',
  'LBL_EMAIL_RETRIEVING_LIST' => 'E-mail lijst ophalen...',
  'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Bericht ophalen',
  'LBL_EMAIL_RETURN_TO_VIEW' => 'Terug naar de vorige module?',
  'LBL_EMAIL_REVERT' => 'Terugdraaien',

  'LBL_EMAIL_RULES_TITLE' => 'Regel beheer',

  'LBL_EMAIL_SAVE' => 'Opslaan',
  'LBL_EMAIL_SAVE_AND_REPLY' => 'Opslaan & beantwoorden',
  'LBL_EMAIL_SAVE_DRAFT' => 'Concept opslaan',

  'LBL_EMAIL_SEARCHING' => 'Zoekopdracht uitvoeren...',
  'LBL_EMAIL_SEARCH' => '<img src=themes/default/images/Search.gif align=absmiddle border=0> Zoeken',
  'LBL_EMAIL_SEARCH_ADVANCED' => 'Geavanceerde zoekmethode',
  'LBL_EMAIL_SEARCH_DATE_FROM' => 'Datum vanaf',
  'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Datum tot',
  'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Body tekst',
  'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Geen resultaten.',
  'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Zoekresultaten',
  'LBL_EMAIL_SEARCH_TITLE' => 'Simpel zoeken',
  'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Zoek e-mail accounts',

  'LBL_EMAIL_SELECT' => 'Selecteer',

  'LBL_EMAIL_SEND' => 'Verzenden',
  'LBL_EMAIL_SENDING_EMAIL' => 'E-mail versturen...',

  'LBL_EMAIL_SETTINGS' => 'Instellingen',
  'LBL_EMAIL_SETTINGS_2_ROWS' => '2 rijen',
  'LBL_EMAIL_SETTINGS_3_COLS' => '3 kolommen',
  'LBL_EMAIL_SETTINGS_LAYOUT' => 'Layout stijl',
  'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'E-mail accounts',
  'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Formulier legen',
  'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'E-mail importeren bij openen',
  'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Checken op nieuwe e-mail',
  'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Gebruik voorbeeldscherm',
  'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Gebruik popup scherm',
  'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Aantal e-mails per pagina',
  'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Wijzig e-mail account',
  'LBL_EMAIL_SETTINGS_FOLDERS' => 'Mappen',
  'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Van adres',
  'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Van naam',
  'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Volledig scherm',
  'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchroniseer alle e-mail accounts',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Deze aktie zal alle accounts en hun inhoud synchroniseren.',
  'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Volledig synchronisatie uitvoeren?\nDit kan even duren bij grote e-mails (5 minuten).',
  'LBL_EMAIL_SETTINGS_GENERAL' => 'Algemeen',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Beshikbare groepsmappen',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Maak groep map',
  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Groep mappen opslaan',
  'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Groep map ophalen...',

  'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Wijzig groep map',

  'LBL_EMAIL_SETTINGS_NAME' => 'Naam',
  'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Deze wijzigingen vereisen een complete refresh (F5) voordat ze actief worden.',
  'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'E-mail account ophalen...',
  'LBL_EMAIL_SETTINGS_RULES' => 'Regels',
  'LBL_EMAIL_SETTINGS_SAVED' 							=> 'De instellingen zijn opgeslagen\n\nRefresh de pagina om deze actief te maken.',
  'LBL_EMAIL_SETTINGS_SAVE_OUTBOUND' 			=> 'Kopieer naar verzonden e-mail',
  'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' 			=> 'Verzend e-mail als platte tekst',
  'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' 		=> 'Actieve e-mail accounts',
  'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' 	=> 'Aantal e-mails per pagina',
  'LBL_EMAIL_SETTINGS_TAB_POS' 						=> 'Plaats tabs op de onderkant',
  'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' 			=> 'Visuele instellingen',
  'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' 	=> 'Voorkeuren',
  'LBL_EMAIL_SETTINGS_TOGGLE_ADV' 				=> 'Toon geavanceerde opties',
  'LBL_EMAIL_SETTINGS_USER_FOLDERS' 			=> 'Beschikbare gebruikersmappen',

  'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' 		=> 'Klik op Shift of Control om meerdere mappen te selecteren. ',

  'LBL_EMAIL_SHOW_READ' 									=> 'Laat alles zien',
  'LBL_EMAIL_SHOW_UNREAD_ONLY' 						=> 'Laat alleen ongelezen zien',
  'LBL_EMAIL_SIGNATURES' 									=> 'Handtekeningen',
  'LBL_EMAIL_SIGNATURE_CREATE' 						=> 'Maak ondertekening aan',
  'LBL_EMAIL_SIGNATURE_NAME' 							=> 'Ondertekening naam',
  'LBL_EMAIL_SIGNATURE_TEXT' 							=> 'Ondertekening inhoud',
  'LBL_EMAIL_SPACER_MAIL_SERVER' 					=> '[ Mappen op afstand ]',
  'LBL_EMAIL_SPACER_LOCAL_FOLDER' 				=> '[ Sugar mappen ]',
  'LBL_EMAIL_SUBJECT' 										=> 'Onderwerp',
  'LBL_EMAIL_TO'													=> 'Aan',
  'LBL_EMAIL_SUCCESS' 										=> 'Succesvol',
  'LBL_EMAIL_SUGAR_FOLDER' 								=> 'Sugarmap',

  'LBL_EMAIL_TEMPLATES' => 'Templates',
  'LBL_EMAIL_TEXT_FIRST' => 'Eerste pagina',
  'LBL_EMAIL_TEXT_PREV' => 'Vorige pagina',
  'LBL_EMAIL_TEXT_NEXT' => 'Volgende pagina',
  'LBL_EMAIL_TEXT_LAST' => 'Laatste pagina',
  'LBL_EMAIL_TEXT_REFRESH' => 'Ververs',
  'LBL_EMAIL_TO' => 'Aan',
  'LBL_EMAIL_TOGGLE_LIST' => 'Schakel lijst',
  'LBL_EMAIL_VIEW' => 'Bekijk',
  'LBL_EMAIL_VIEWS' => 'Overzichten',
  'LBL_EMAIL_VIEW_HEADERS' => 'Laat headers zien',
  'LBL_EMAIL_VIEW_PRINTABLE' => 'Printversie',
  'LBL_EMAIL_VIEW_RAW' => 'Laat ruwe e-mail zien',
  'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Deze functie is niet beschikbaar icm POP3',
  'LBL_DEFAULT_LINK_TEXT' => 'Standaard hyperlink tekst.',
  'LBL_EMAIL_YES' => 'Ja',

  'LBL_EMAIL_CHECK_INTERVAL_DOM' => array (
    '-1' => "Handmatig",
    '5' => 'Elke 5 minuten',
    '15' => 'Elke 15 minuten',
    '30' => 'Elke 30 minuten',
    '60' => 'Elk uur'
  ),
  'LBL_EMAIL_SETTING_NUM_DOM' => array (
    '10' => '10',
    '20' => '20',
    '50' => '50'
  ),

  'LBL_LINK_NONE' => 'Neen',
  'LBL_LINK_ALL' => 'Alles',
  'LBL_LINK_RECORDS' => 'Items',
  'LBL_LINK_SELECT' => 'Selecteer',

  'ERR_CREATING_FIELDS' => 'Foutmelding bij het invullen van aanvullende detail velden: ',
  'ERR_CREATING_TABLE' => 'Foutmelding bij het creeren van de tabel:',
  'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'The decimal separator cannot use the same character as the thousands separator.\\n\\n  Please change the values.',
  'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze RSS Nieuwsfeed te verwijderen',
  'ERR_EXPORT_DISABLED' => 'Exporteren is uitgeschakeld.',
  'ERR_EXPORT_TYPE' => 'Fout bij exporteren ',
  'ERR_INVALID_AMOUNT' => 'Voer een geldig bedrag in a.u.b.',
  'ERR_INVALID_DATE_FORMAT' => 'Het datum formaat moet zijn: jjjj-mm-dd',
  'ERR_INVALID_DATE' => 'Voer een geldige datum in a.u.b.',
  'ERR_INVALID_DAY' => 'Voer een geldige dag in a.u.b.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'Dit is geen geldig E-mailadres.',
  'ERR_INVALID_FILE_REFERENCE' => 'Ongeldige bestandsreferentie',
  'ERR_INVALID_HOUR' => 'Voer een geldig uur in a.u.b.',
  'ERR_INVALID_MONTH' => 'Voer een geldige maand in a.u.b.',
  'ERR_INVALID_TIME' => 'Voer een geldige tijd in a.u.b.',
  'ERR_INVALID_YEAR' => 'Voer een geldig 4 cijferig jaartal in.',
  'ERR_NEED_ACTIVE_SESSION' => 'Om te kunnen exporteren moet u een actieve sessie hebben.',
  'ERR_NO_HEADER_ID' => 'Deze functie is niet beschikbaar in dit Sugar thema.',
  'ERR_NOT_ADMIN' => 'Unauthorized access to administration.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Verplichte velden ontbreken:',
  'ERR_INVALID_VALUE' => 'Ongeldige waarden:',
  'ERR_NO_SUCH_FILE' => 'Bestand bestaat niet op systeem',
  'ERR_NO_SINGLE_QUOTE' => 'Kan het enkelvoudige aanhalingsteken niet gebruiken voor ',
  'ERR_NOTHING_SELECTED' => 'Maak een selectie voor je doorgaat.',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Er bestaat al een kans met de naam %s. Voer een andere naam voor de kans in.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Er is geen kansnaam ingevuld. Voer hieronder de naam voor de kans in.',
  'ERR_POTENTIAL_SEGFAULT' => 'A potential Apache segmentation fault was detected.  Please notify your system administrator to confirm this problem and have her/him report it to SugarCRM.',
  'ERR_SELF_REPORTING' => 'Een gebruiker kan niet naar zichzelf rapporteren.',
  'ERR_SINGLE_QUOTE' => 'Kan het enkelvoudige aanhalingsteken niet gebruiken voor dit veld. Verander de waarde.',
  'ERR_SQS_NO_MATCH_FIELD' => 'Geen match voor veld: ',
  'ERR_SQS_NO_MATCH' => 'Geen match',
  'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the metadata definition',
  'ERR_EXISTING_PORTAL_USERNAME' => 'Fout: De naam van de Portal is al toegewezen aan een ander contactpersoon.',
  'ERR_COMPATIBLE_PRECISION_VALUE' => 'Waarde voldoet niet aan opgegeven precisie',

  'LBL_ACCOUNT' 													=> 'Relatie',
  'LBL_OLD_ACCOUNT_LINK'									=> 'Oude relatie',
  'LBL_ACCOUNTS' 													=> 'Relaties',
  'LBL_ACTIVITIES_SUBPANEL_TITLE'				 	=> 'Activiteiten',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' 		=> 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' 	=> 'Bekijk samenvatting',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' 	=> 'Bekijk samenvatting [Alt+H]',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Toevoegen [ALT+A]',
  'LBL_ADD_BUTTON' => 'Toevoegen',
  'LBL_ADD_DOCUMENT' => 'Document Toevoegen',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Voeg toe aan de verzendlijst',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Voeg toe aan de verzendlijst',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klik om te Sluiten',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Sluiten',
  'LBL_ADDITIONAL_DETAILS' => 'Aanvullende details',
  'LBL_ADMIN' => 'Configuratie',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ARCHIVE' => 'Archiveer',
  'LBL_ASSIGNED_TO_USER' => 'Toegewezen aan gebruiker',
  'LBL_ASSIGNED_TO' => 'Toegewezen aan:',
  'LBL_BACK' => 'Terug',
  'LBL_BILL_TO_ACCOUNT' => 'Factureer naar bedrijf',
  'LBL_BILL_TO_CONTACT' => 'Factureer naar contactpersoon',
  'LBL_BILLING_ADDRESS' => 'Facturatie adres',
  'LBL_BROWSER_TITLE' => 'SugarCRM',
  'LBL_BUGS' => 'Bugs',
  'LBL_BY' => 'door',
  'LBL_CALLS' => 'Telefoongesprekken',
  'LBL_CALL' => 'Telefoongesprek',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Verzend de campage e-mail in de wachtrij',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Annuleren',
  'LBL_CANCEL_BUTTON_TITLE' => 'Annuleren [Alt+X]',
  'LBL_SUBMIT_BUTTON_LABEL' => 'OK',
  'LBL_CASE' => 'Klacht',
  'LBL_CASES' => 'Klachten',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Veranderen',
  'LBL_CHANGE_BUTTON_TITLE' => 'Veranderen [Alt+G]',
  'LBL_CHARSET' => 'latin1',
  'LBL_CHECKALL' => 'Selecteer alles',
  'LBL_CITY' => 'Plaats',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Wissen',
  'LBL_CLEAR_BUTTON_TITLE' => 'Wissen [Alt+C]',
  'LBL_CLEARALL' => 'Wis alles',
  'LBL_CLOSE_WINDOW' => 'Sluit venster',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Sluit alle',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Sluit alle [ALT+I]',
  'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Sluiten en nieuwe maken',
  'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Sluiten en nieuwe maken',
  'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'E-mail opstellen',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Maak een e-mail [Alt+E]',
  'LBL_SEARCH_DROPDOWN_YES' => 'Ja',
  'LBL_SEARCH_DROPDOWN_NO' => 'Nee',
  'LBL_CONTACT_LIST' => 'Contactpersonen',
  'LBL_CONTACT' => 'Contactpersoon',
  'LBL_CONTACTS' => 'Contactpersonen',
  'LBL_CONTRACTS' => 'Contracten',
  'LBL_COUNTRY' => 'Land:',
  'LBL_CREATE_BUTTON_LABEL' => 'Nieuw',
  'LBL_CREATED_BY_USER' => 'Aangemaakt door gebruiker',
  'LBL_CREATED_USER' => 'Gemaakt door gebruiker',
  'LBL_CREATED_ID' => 'Gemaakt door ID',
  'LBL_CREATED' => 'Gemaakt door',
  'LBL_CURRENT_USER_FILTER' => 'Alleen mijn items:',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_DOCUMENTS' => 'Documenten',
  'LBL_DATE_ENTERED' => 'Aangemaakt:',
  'LBL_DATE_MODIFIED' => 'Laatste wijziging:',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Verwijderen',
  'LBL_DELETE_BUTTON_TITLE' => 'Verwijderen [Alt+D]',
  'LBL_DELETE_BUTTON' => 'Verwijderen',
  'LBL_DELETE' => 'Verwijderen',
  'LBL_DELETED' => 'Verwijderd',
  'LBL_DIRECT_REPORTS' => 'Direct reports',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Gereed',
  'LBL_DONE_BUTTON_TITLE' => 'Klaar [ALT+X]',
  'LBL_DST_NEEDS_FIXIN' => 'Voor deze applicatie is het nodig dat de zomertijd fix wordt toegepast. Gan naar de Repareer link in de Admin pagina en voer de Zomertijd fix uit.',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Dupliceer',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Dupliceer [ALT] + [U]',
  'LBL_DUPLICATE_BUTTON' => 'Dupliceer',
  'LBL_EDIT_BUTTON_KEY' => 'W',
  'LBL_EDIT_BUTTON_LABEL' => 'Wijzigen',
  'LBL_EDIT_BUTTON_TITLE' => 'Wijzigen [Alt+E]',
  'LBL_EDIT_BUTTON' => 'Wijzigen',
  'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Wijzig als nieuw',
  'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Wijzig als niew',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Bekijk',
  'LBL_VIEW_BUTTON_TITLE' => 'Bekijken [ALT+V]',
  'LBL_VIEW_BUTTON' => 'Bekijk',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'E-mail als PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'E-mail als PDF [ALT+M]',
  'LBL_EMAILS' => 'E-mails',
  'LBL_EMPLOYEES' => 'Personeel',
  'LBL_ENTER_DATE' => 'Datum',
  'LBL_EXPORT_ALL' => 'Exporteer alle',
  'LBL_EXPORT' => 'Exporteren',
  'LBL_GO_BUTTON_LABEL' => 'Start',
  'LBL_HIDE' => 'Verberg',
  'LBL_ID' => 'ID',
  'LBL_IMPORT_PROSPECTS' => 'Importeer verzendlijst',
  'LBL_IMPORT' => 'Importeer',
  'LBL_IMPORT_STARTED' => 'Importeren gestart: ',
  'LBL_MISSING_CUSTOM_DELIMITER' => 'Moet een kolom delimiter opgeven.',
  'LBL_LAST_VIEWED' => 'Laatst bekeken',
  'LBL_TODAYS_ACTIVITIES' => 'Vandaag',
  'LBL_LEADS' => 'Leads',
  'LBL_LESS' => 'minder',
  'LBL_CAMPAIGN' => 'Campagnes:',
  'LBL_CAMPAIGNS' => 'Campagnes',
  'LBL_CAMPAIGN_ID' => 'campaign_id',
  'LBL_SITEMAP' => 'Sitemap',
  'LBL_FOUND_IN_RELEASE' => 'Gevonden in release',
  'LBL_FIXED_IN_RELEASE' => 'Gefixt in release',
  'LBL_LIST_ACCOUNT_NAME' => 'Bedrijfsnaam',
  'LBL_LIST_ASSIGNED_USER' => 'Gebruiker',
  'LBL_LIST_CONTACT_NAME' => 'Contactpersoon',
  'LBL_LIST_CONTACT_ROLE' => 'Rol contactpersoon',
  'LBL_LIST_EMAIL' => 'E-mail',
  'LBL_LIST_NAME' => 'Naam',
  'LBL_LIST_OF' => 'van',
  'LBL_LIST_PHONE' => 'Telefoon',
  'LBL_LIST_USER_NAME' => 'Gebruikersnaam',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Weet u zeker dat u de hele lijst wilt updaten?',
  'LBL_LISTVIEW_NO_SELECTED' => 'Selecteer aub minstens 1 record om door te gaan',
  'LBL_LISTVIEW_TWO_REQUIRED' => 'Selecteer aub minstens 2 records om door te gaan',
  'LBL_LISTVIEW_LESS_THEN_TEN_SELECT' => 'Selecteer maximaal 10 items om door te gaan.',
  'LBL_LISTVIEW_ALL' => 'Alles',
  'LBL_LISTVIEW_NONE' => 'geen',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Huidige pagina',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Complete lijst',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Geselecteerde records',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Geselecteerd: ',

  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Jan',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Jansen',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dhr.',
  'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
  'LBL_LOGIN_TO_ACCESS' => 'Log aub in om toegang te krijgen tot dit gedeelte.',
  'LBL_LOGOUT' => 'Uitloggen',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MAILMERGE' => 'Mail merge',
  'LBL_MASS_UPDATE' => 'Mass update',
  'LBL_MEETINGS' => 'Afspraken',
  'LBL_MEETING' => 'Afspraak',
  'LBL_MEMBERS' => 'Leden',
  'LBL_MEMBER_OF' => 'Member Of',
  'LBL_MODIFIED_BY_USER' => 'Gewijzigd door gebruiker',
  'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
  'LBL_MODIFIED' => 'Gewijzigd door',
  'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
  'LBL_MODIFIED_ID' => 'Gewijzigd door ID',
  'LBL_MORE' => 'meer',
  'LBL_MY_ACCOUNT' => 'Mijn account',
  'LBL_NAME' => 'Naam',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Nieuw',
  'LBL_NEW_BUTTON_TITLE' => 'Nieuw [Alt+N]',
  'LBL_NEXT_BUTTON_LABEL' => 'Volgende',
  'LBL_NONE' => '--Geen--',
  'LBL_NOTES' => 'Notities',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Open alle',
  'LBL_OPENALL_BUTTON_TITLE' => 'Open alle [ALT+O]',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Openen in: ',
  'LBL_OPENTO_BUTTON_TITLE' => 'Openen in: [ALT+T]',
  'LBL_OPPORTUNITIES' => 'Kansen',
  'LBL_OPPORTUNITY_NAME' => 'Kansnaam',
  'LBL_OPPORTUNITY' => 'Kans',
  'LBL_OR' => 'OR',
  'LBL_PARENT_TYPE' => 'Gerelateerd aan type',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PHASE' => 'Fase',
  'LBL_POSTAL_CODE' => 'Postcode:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Plaats:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Land:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postcode:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Provincie:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primair adres 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primair adres 3:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Straat + huisnummer:',
  'LBL_PRIMARY_ADDRESS' => 'Hoofdadres:',
  'LBL_PRODUCT_BUNDLES' => 'Project bundel',
  'LBL_PRODUCTS' => 'Producten',
  'LBL_PROJECT_TASKS' => 'Project taak',
  'LBL_PROJECTS' => 'Projecten',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Prijsopgaaf omzetten naar Kans',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Prijsopgaaf omzetten naar Kans [Alt+Q]',
  'LBL_QUOTES_SHIP_TO' => 'Verzendkosten',
  'LBL_QUOTES' => 'Prijsopgaven',
  'LBL_RELATED' => 'Gerelateerd',
  'LBL_RELATED_INFORMATION' => 'Gerelateerde informatie',
  'LBL_RELATED_RECORDS' => 'Gerelateerde records',
  'LBL_REMOVE' => 'Verwijderen',
  'LBL_REPORTS_TO' => 'Rapporteert aan',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Opslaan',
  'LBL_SAVE_BUTTON_TITLE' => 'Opslaan [Alt+S]',
  'LBL_SAVE_AS_BUTTON_KEY' => 'A',
  'LBL_SAVE_AS_BUTTON_LABEL' => 'Opslaan als',
  'LBL_SAVE_AS_BUTTON_TITLE' => 'Opslaan als [ALT] + [A]',
  'LBL_FULL_FORM_BUTTON_KEY' => 'F',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Volledig formulier',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Volledig formulier [ALT] + [F]',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Opslaan en nieuwe aanmaken',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Opslaan en nieuwe aanmaken [Alt+V]',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Zoeken',
  'LBL_SEARCH_BUTTON_TITLE' => 'Zoeken [Alt+Q]',
  'LBL_SEARCH' => 'Zoeken',
  'LBL_SEE_ALL' => 'Zie alles',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Selecteer',
  'LBL_SELECT_BUTTON_TITLE' => 'Selecteren [Alt+T]',
  'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
  'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Bladeren in documenten',
  'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Bladeren in documenten [Alt+B]',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Selecteer contactpersoon',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Selecteer contactpersoon [Alt+T]',
  'LBL_GRID_SELECTED_FILE' => 'geselecteerd bestand',
  'LBL_GRID_SELECTED_FILES' => 'geselecteerde bestanden',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Selecteer uit rapporten',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Selecteer rapporten',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Selecteer gebruiker',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Selecteer gebruiker [Alt+U]',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Items gebruikt om deze pagina te maken (queries, bestanden)',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'seconden.',
  'LBL_SERVER_RESPONSE_TIME' => 'Server responstijd:',
  'LBL_SHIP_TO_ACCOUNT' => 'Verzend naar bedrijf',
  'LBL_SHIP_TO_CONTACT' => 'Verzend naar contactpersoon',
  'LBL_SHIPPING_ADDRESS' => 'Verzendadres',
  'LBL_SHORTCUTS' => 'Snelkoppelingen',
  'LBL_SHOW' => 'Toon',
  'LBL_SQS_INDICATOR' => '',
  'LBL_STATE' => 'Provincie:',
  'LBL_STATUS_UPDATED' => 'Je status voor deze gebeurtenis is bijgewerkt!',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Onderwerp',

'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Standaard',
'LBL_DROP_HERE' => '[Sleep hier]',
'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Waarschuwing: Ontbrekende gebruikersnaam en wachtwoord voor uitgaande e-mail account.',
'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'SMTP-gebruikersnaam is vereist',
'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'SMTP-wachtwoord is vereist',
'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'Mail Server Protocol van het type POP3 zal niet worden ondersteund in de volgende release. Alleen IMAP wordt ondersteund.',
'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Instellen van Mail-accounts om binnenkomende e-mails van uw e-mailaccounts te bekijken.',
'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Geef SMTP-mailserver informatie in voor gebruik van uitgaande e-mail in Mail Accounts.',
'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Wissen',
'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Aan:',
'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Naar / Cc / Bcc',

  /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */
  'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2010 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.',

'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Let op! De uitgaande account die u probeert te verwijderen is gekoppeld aan een bestaande inkomende account. Weet u zeker dat u wilt doorgaan?',
'LBL_EMAIL_ASSIGNMENT' => 'Toekennen',
'LBL_EMAIL_ATTACHMENTS_FILE' => 'Bestand',
'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Document',
'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Embeded',
'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Weet u zeker dat u deze handtekening wilt verwijderen?',
'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Meerdere',
'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Leeg',
'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Datum verzonden door verzender',
'LBL_EMAIL_DELETING_OUTBOUND' => 'Verwijderen uitgaande server',
'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Verwijderen cache bestanden',
'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Geen uitgaande mail server opgegeven.',
'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Hernoemen map',
'LBL_EMAIL_DOWNLOAD_STATUS' => 'Gedownload [[count]] van de [[total]] e-mails',
'LBL_EMAIL_UPPER_CASE_GROUP' => 'Groep',
'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Verwijderen handtekening',
'LBL_EMAIL_IMPORT_SETTINGS' => 'Importeren instellingen ',
'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Verwijderen cache-bestanden',
'LBL_EMAIL_NOT_SENT' => 'Systeem is niet in staat om uw aanvraag te verwerken. Neem contact op met de systeembeheerder.',
'LBL_EMAIL_QUICK_COMPOSE' => 'Snel samenstellen',
'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Bekijk relaties',
'LBL_EMAIL_RECORD' => 'E-mail Record',
'LBL_EMAIL_RETRIEVING_RECORD' => 'Het ophalen van e-mail record',
'LBL_EMAIL_SELECT_ONE_RECORD' => 'Selecteer slechts één e-mail record',
'LBL_EMAIL_RELATE_EMAIL' => 'Koppel E-mail',
'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'E-mailadres voor test notificatie:',
'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'Aan e-mail adressen',
'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Antwoord aan Adres',
'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Een e-mail is verzonden naar het opgegeven e-mailadres met behulp van de opgegeven uitgaande e-mail instellingen. Controleer of de e-mail ontvangen is om te controleren of de instellingen correct zijn.',
'LBL_EMAIL_ERROR_PREPEND' => 'Fout e-mailen:',
'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'De geselecteerde uitgaande mailserver voor het e-mail account dat u gebruikt, is ongeldig. Controleer de instellingen of selecteer een ander e-mail server voor het e-mail account.',
'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Er is geen uitgaande mail server geconfigureerd voor uitgaande e-mail voor het e-mail account dat u gebruikt. Selecteer of voeg een uitgaande mail server voor dit e-mail account toe.',
'LBL_SMTPTYPE_GMAIL' => 'Gmail',
'LBL_SMTPTYPE_YAHOO' => 'Yahoo Mail',
'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'E-mail template body is leeg',
'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Stuur Test E-mail',
'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test E-mail verzonden',
'LBL_EMAIL_MESSAGE_NO' => 'Bericht nr.',
'LBL_EMAIL_IMPORT_SUCCESS' => 'Import geslaagd',
'LBL_EMAIL_IMPORT_FAIL' => 'Import is mislukt omdat ofwel het bericht al is ingevoerd of verwijderd van de server',
'LBL_LINK_ACTIONS' => 'Acties',
'ERR_INVALID_REQUIRED_FIELDS' => 'Ongeldige verplicht veld:',
'LBL_REPLACE_BUTTON' => 'Vervangen',
'LBL_CLOSE_BUTTON_TITLE' => 'Sluit',
'LBL_CLOSE_BUTTON_KEY' => 'Q',
'LBL_VCARD' => 'vCard',
'LBL_EMPTY_VCARD' => 'Selecteer een vCard-bestand',
'LBL_IMPORT_VCARD' => 'Importeer vCard:',
'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importeer vCard',
'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importeer vCard [Alt + I]',
'LBL_CAMPAIGNLOG' => 'Campagne Log',
'LBL_CAMPAIGN_CONTACT' => 'Campagnes',
'LBL_THEME' => 'Thema:',
'LBL_THEME_PICKER' => 'Pagina opmaak',
'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Waarschuwing: Internet Explorer 6 wordt niet ondersteund door het gekozen thema. Klik op OK om het toch te selecteren of klik op Annuleren om een ander thema te selecteren.',
'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Selecteer minder dan 10 records om verder te gaan.',
'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt-out Primaire e-mailadres',
'LBL_LOWER_OR' => 'of',
'LBL_PANEL_ASSIGNMENT' => 'Overig',
'LBL_PANEL_ADVANCED' => 'Meer informatie',
'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Klaar',
'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Ongeldige bestandsformaat, alleen image-bestand kunnen worden geupload.',
'LBL_SELECT_TEAMS_KEY' => 'Z',
'LBL_SELECT_TEAMS_LABEL' => 'Toevoegen Team (s)',
'LBL_SELECT_TEAMS_TITLE' => 'Toevoegen Teams (s) [Alt + Z]',
'LBL_STREET' => 'Straat',
'LBL_INBOUNDEMAIL_ID' => 'Inkomende e-mail-ID',
'LBL_THEME_COLOR' => 'Kleur',
'LBL_THEME_FONT' => 'Font',
'LBL_VIEW_IMAGE' => 'Bekijk',
'LBL_MODIFY_CURRENT_SEARCH' => 'Wijzig huidige zoekopdracht',
'NTC_TEMPLATE_IS_USED' => 'Het sjabloon wordt gebruikt in ten minste één e-mail marketing. Weet u zeker dat u het wilt verwijderen?',
'NTC_TEMPLATES_IS_USED' => 'De volgende sjablonen worden gebruikt in e-mail marketing records. Ben je zeker dat je ze wilt verwijderen?',
'NTC_DELETE_SELECTED_RECORDS' => 'geselecteerde record (s)?',
'WARN_LICENSE_SEATS' => 'Waarschuwing: Het aantal actieve gebruikers is reeds het maximale aantal toegestane licenties.',
'WARN_LICENSE_SEATS_MAXED' => 'Waarschuwing: Het aantal actieve gebruikers is groter dan het maximale toegestane aantal licenties.',
'WARN_ONLY_ADMINS' => 'Alleen beheerders kunnen inloggen',
'LBL_AJAX_FAILURE' => 'Ajax fout',
'ERR_MSSQL_WARNING' => 'Waarschuwing:',
'LBL_SEARCH_HELP_TITLE' => 'Zoektips',
'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Sluit',
'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack gemaakt voor gebruikers-id {0}',
'MSG_IS_MORE_THAN' => 'is meer dan',
'MSG_IS_LESS_THAN' => 'is minder dan',
'MSG_SHOULD_BE' => 'dient te worden',
'MSG_OR_GREATER' => 'of meer',
'DATA_TYPE_DUE' => 'Vervalt:',
'DATA_TYPE_START' => 'Start:',
'DATA_TYPE_SENT' => 'Verzonden:',
'DATA_TYPE_MODIFIED' => 'Gewijzigd:',
'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Tellen',
'LBL_OBJECT_IMAGE' => 'object beeld',
'LBL_MASSUPDATE_DATE' => 'Selecteer Datum',
'LBL_VALIDATE_RANGE' => 'valt niet binnen het geldige bereik',
'LBL_DROPDOWN_LIST_ALL' => 'Alle',
'LBL_OPERATOR_IN_TEXT' => 'is een van de volgende:',
'LBL_OPERATOR_NOT_IN_TEXT' => 'is niet een van de volgende:',
'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Fout: De Array count van de bean parameter komt niet overeen met de Array count van het resultaat.',
'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Fout: Ontbrekende mapping ingave van de module.',
'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Fout: Kan geen gegevens voor connector {0} binnen halen. De service is momenteel niet toegankelijk of de configuratie-instellingen zijn ongeldig. Connector foutmelding: ({1}).',
'LBL_MERGE_CONNECTORS' => 'Gegevens ophalen',
'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
'LBL_REMOVE_MODULE_ENTRY' => 'Weet u zeker dat u de connector integratie wilt uitschakelen voor deze module?',
'LBL_FASTCGI_LOGGING' => 'Voor optimale gebruik met IIS / FastCGI sapi, stel fastcgi.logging in op 0 in het php.ini bestand.',
'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Sorry, kan  het global team niet verwijderen Annuleren',
'LBL_MASSUPDATE_DELETE_PRIVATE_TEAMS' => 'Sorry, u kunt de  prive team (s) niet verwijderen. Annuleren',
'LBL_NO_FLASH_PLAYER' => 'U heeft Abobe Flash uitgeschakeld of maakt gebruik van een oudere versie van de Adobe Flash Player. Om de laatste versie van de Flash Player,  <a href=\"http://www.adobe.com/go/getflashplayer/\">klik hier</a>',
'LBL_NO_FLASH_PLAYER' => 'U heeft Abobe Flash uitgeschakeld of maakt gebruik van een oudere versie van de Adobe Flash Player. Om de meest recente versie van de Flash Player te downloaden,   <a href=\"http://www.adobe.com/go/getflashplayer/\">',
'LBL_NO_FLASH_PLAYER' => 'U heeft Abobe Flash uitgeschakeld of maakt gebruik van een oudere versie van de Adobe Flash Player. Om de meest recente versie van de Flash Player te downloaden,   <a href=\"http://www.adobe.com/go/getflashplayer/\">klik hier</a>',
'LBL_COLLECTION_NAME' => 'Naam',
'LBL_COLLECTION_PRIMARY' => 'Primaire',
'ERROR_MISSING_COLLECTION_SELECTION' => 'Leeg verplicht veld',
'LBL_COLLECTION_EXACT' => 'Exact',
'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
'LBL_DESCRIPTION' => 'Omschrijving',
'LBL_YESTERDAY' => 'gisteren',
'LBL_TODAY' => 'vandaag',
'LBL_TOMORROW' => 'morgen',
'LBL_NEXT_WEEK' => 'volgende week',
'LBL_NEXT_MONDAY' => 'volgende week maandag',
'LBL_NEXT_FRIDAY' => 'volgende week vrijdag',
'LBL_TWO_WEEKS' => 'twee weken',
'LBL_NEXT_MONTH' => 'volgende maand',
'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'eerste dag van volgende maand',
'LBL_THREE_MONTHS' => 'drie maanden',
'LBL_SIXMONTHS' => 'zes maanden',
'LBL_NEXT_YEAR' => 'volgend jaar',
'LBL_FILTERED' => 'Gefilterd',
'LBL_HOURS' => 'Uren',
'LBL_MINUTES' => 'Minuten',
'LBL_MERIDIEM' => 'Meridiem',
'LBL_DATE' => 'Datum',

  'LBL_SYNC' => 'Synchroniseer',
  'LBL_TABGROUP_ALL' => 'Alles',
  'LBL_TABGROUP_ACTIVITIES' => 'Activiteiten',
  'LBL_TABGROUP_COLLABORATION' => 'Samenwerking',
  'LBL_TABGROUP_HOME' => 'Start',
  'LBL_TABGROUP_MARKETING' => 'Marketing',
  'LBL_TABGROUP_MY_PORTALS' => 'Mijn portaal',
  'LBL_TABGROUP_OTHER' => 'Anders',
  'LBL_TABGROUP_REPORTS' => 'Rapportages',
  'LBL_TABGROUP_SALES' => 'Sales',
  'LBL_TABGROUP_SUPPORT' => 'Ondersteuning',
  'LBL_TABGROUP_TOOLS' => 'Gereedschappen',
  'LBL_TASKS' => 'Taken',
  'LBL_TEAMS_LINK' => 'Team',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-mail archiveren',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-mail archiveren [Alt+K]',
  'LBL_UNAUTH_ADMIN' => 'Ongeauthoriseerde toegang tot configuratie',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Verwijderen ongedaan maken',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Verwijderen ongedaan maken [ALT+D]',
  'LBL_UNDELETE_BUTTON' => 'Verwijderen ongedaan maken',
  'LBL_UNDELETE' => 'Verwijderen ongedaan maken',
  'LBL_UNSYNC' => 'Niet Synchroniseren',
  'LBL_UPDATE' => 'Bijwerken',
  'LBL_USER_LIST' => 'Gebruikers',
  'LBL_USERS_SYNC' => 'Gebruiker synchroniseren',
  'LBL_USERS' => 'Gebruikers',
  'LBL_VERIFY_EMAIL_ADDRESS' => 'Kijken of emailadres bestaat...',
  'LBL_VERIFY_PORTAL_NAME' => 'Kijken of portal naam bestaat...',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Opslaan als PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Opslaan als PDF [Alt+P]',

  'LNK_ABOUT' => 'Over ons',
  'LNK_ADVANCED_SEARCH' => 'Geavanceerde zoekmethode',
  'LNK_BASIC_SEARCH' => 'Standaard zoekmethode',
  'LNK_SAVED_VIEWS' => 'Opgeslagen zoekopdracht & layout',
  'LNK_DELETE_ALL' => 'verwijder alle',
  'LNK_DELETE' => 'verw',
  'LNK_EDIT' => 'wijz',
  'LNK_GET_LATEST' => 'Haal nieuwste',
  'LNK_GET_LATEST_TOOLTIP' => 'Vervang met laatste versie',
  'LNK_HELP' => 'Help',
  'LNK_LIST_END' => 'Einde',
  'LNK_LIST_NEXT' => 'Volgende',
  'LNK_LIST_PREVIOUS' => 'Vorige',
  'LNK_LIST_RETURN' => 'Ga terug naar de lijst',
  'LNK_LIST_START' => 'Start',
  'LNK_LOAD_SIGNED' => 'Teken',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Vervang met ondertekend document',
  'LNK_PRINT' => 'Afdrukken',
  'LNK_REMOVE' => 'weghalen',
  'LNK_RESUME' => 'Vervolg',
  'LNK_VIEW_CHANGE_LOG' => 'Bekijk wijzigings log',

  'NTC_CLICK_BACK' => 'Klikt u a..u.b op de [terug] knop in uw browser en los het probleem op.',
  'NTC_DATE_FORMAT' => '(jjjj-mm-dd 24:00)',
  'NTC_DATE_TIME_FORMAT' => '(jjjj-mm-dd 24:00)',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Weet je zeker dat je de geselecteerde records wilt verwijderen?',
  'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',
  'NTC_DELETE_CONFIRMATION_NUM' => 'Weet u zeker dat u deze items wilt verwijderen?',
  'NTC_UPDATE_CONFIRMATION_NUM' => 'Weet u zeker dat u deze items wilt updaten?',
  'NTC_DELETE_SELECTED_RECORDS' => '',
  'NTC_LOGIN_MESSAGE' => 'Eerst inloggen a.u.b.',
  'NTC_NO_ITEMS_DISPLAY' => 'geen',
  'NTC_REMOVE_CONFIRMATION' => 'Weet je zeker dat je deze Relatie wilt verwijderen?',
  'NTC_REQUIRED' => 'Geeft een verplicht veld aan',
  'NTC_SUPPORT_SUGARCRM' => 'Steun het SugarCRM open source project met een donatie via Paypal - snel, gratis en veilig!',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_WELCOME' => 'Welkom',
  'NTC_YEAR_FORMAT' => '(yyyy)',
'NTC_DELETE_SELECTED_RECORDS' => 'geselecteerde record (s)?',
  'LOGIN_LOGO_ERROR' => 'Vervang de SugarCRM logo\'s',
  'ERROR_FULLY_EXPIRED' => "Your company's license for SugarCRM has expired for more than 30 days and needs to be brought up to date. Only admins may login.",
  'ERROR_LICENSE_EXPIRED' => "Your company's license for SugarCRM needs to be updated. Only admins may login",
  'ERROR_LICENSE_VALIDATION' => "Your company's license for SugarCRM needs to be validated. Only admins may login",
  'ERROR_NO_RECORD' => 'Fout bij ophalen van record. De record bestaat niet, of u heeft geen toegang.',
  'ERROR_TYPE_NOT_VALID' => 'Fout. Dit type is niet geldig.',
  'LBL_DUP_MERGE' => 'Vind duplicaten',
  'LBL_MANAGE_SUBSCRIPTIONS' => 'Aanmeldingen beheren',
  'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Aanmeldingen beheren voor ',
  'LBL_SUBSCRIBE' => 'Aanmelden',
  'LBL_UNSUBSCRIBE' => 'Afmelden',
    // Ajax status strings
  'LBL_LOADING' => 'Laden ...',
  'LBL_SEARCHING' => 'Zoeken...',
  'LBL_SAVING_LAYOUT' => 'Layout opslaan ...',
  'LBL_SAVED_LAYOUT' => 'Layout is opgeslagen.',
  'LBL_SAVED' => 'Opgeslagen',
  'LBL_SAVING' => 'Opslaan ...',
  'LBL_FAILED' => 'Mislukt!',
  'LBL_DISPLAY_COLUMNS' => 'Kolommen weergeven',
  'LBL_HIDE_COLUMNS' => 'Kolommen verbergen',
  'LBL_SEARCH_CRITERIA' => 'Zoekcriteria',
  'LBL_SAVED_VIEWS' => 'Opgeslagen views',
  'LBL_PROCESSING_REQUEST' => 'Verwerken ...',
  'LBL_REQUEST_PROCESSED' => 'Gereed',

  'LBL_MERGE_DUPLICATES' => 'Duplicaten samenvoegen',
  'LBL_SAVED_SEARCH_SHORTCUT' => 'Opgeslagen zoekcriteria',
  'LBL_SEARCH_POPULATE_ONLY' => 'Voer een zoekopdracht uit met bovenstaand formulier',
  'LBL_DETAILVIEW' => 'Detail view',
  'LBL_LISTVIEW' => 'Lijst view',
  'LBL_EDITVIEW' => 'Wijzigings view',
  'LBL_SEARCHFORM' => 'Zoeken',
  'LBL_SAVED_SEARCH_ERROR' => 'Geef alstublieft een naam voor deze view.',
  'LBL_DISPLAY_LOG' => 'Laat log zien',
  'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
  'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sessie timeout',
  'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Uw sessie zal over 2 minuten verlopen! Sla aub uw werk op.',
  'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Uw sessie is verlopen',
  'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
  'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Afspraak',
  'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Telefoongesprek',
  'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Tijd: ',
  'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Locatie: ',
  'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Beschrijving: ',
  'MSG_JS_ALERT_MTG_REMINDER_MSG' => "\nKlik OK om deze afsraak in te zien, of op Annuleren om dit venster te sluiten.",
    // contextMenu strings
  'LBL_ADD_TO_FAVORITES' => 'Toevoegen aan mijn favorieten',
  'LBL_MARK_AS_FAVORITES' => 'Markeren als favoriet',
  'LBL_CREATE_CONTACT' => 'Nieuw contactpersoon',
  'LBL_CREATE_CASE' => 'Nieuwe klacht',
  'LBL_CREATE_NOTE' => 'Nieuwe notitie',
  'LBL_CREATE_OPPORTUNITY' => 'Nieuwe kans',
  'LBL_SCHEDULE_CALL' => 'Nieuw telefoongesprek',
  'LBL_SCHEDULE_MEETING' => 'Nieuwe afspraak',
  'LBL_CREATE_TASK' => 'Nieuwe taak',
  'LBL_REMOVE_FROM_FAVORITES' => 'Verwijderen van mijn favorieten',
    //web to lead
  'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Genereer formulier',
  'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Web naar Lead formulier opslaan',

  'LBL_PLEASE_SELECT' => 'Selecteer aub',
  'LBL_REDIRECT_URL' => 'Redirect URL',
  'LBL_RELATED_CAMPAIGN' => 'Gerelateerde campagne',
  'LBL_ADD_ALL_LEAD_FIELDS' => 'Alle velden toevoegen',
  'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Verwijder alle velden',
  'LBL_ONLY_IMAGE_ATTACHMENT' => 'Alleen afbeeldingen kunnen worden ingevoegd',
  'LBL_REMOVE' => 'Verwijderen',
  'LBL_TRAINING' => 'Training',
  'ERR_DATABASE_CONN_DROPPED' => 'Error executing a query. Possibly, your database dropped the connection. Please refresh this page, you may need to restart you web server.',
  'ERR_MSSQL_DB_CONTEXT' => 'Database context is veranderd naar',

    //Meta-Data framework
  'ERR_MISSING_VARDEF_NAME' 										=> 'Warning: field [[field]] does not have a mapped entry in [moduleDir] vardefs.php file',
  'ERR_CANNOT_CREATE_METADATA_FILE'							=> 'Error: File [[file]] is missing.  Unable to create because no corresponding HTML file was found.',
  'ERR_CANNOT_FIND_MODULE' 											=> 'Fout: Module [module] bestaat niet.',
  'LBL_ALT_ADDRESS' 														=> 'Alt. adres:',
  'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',
  'ERR_SMARTY_MISSING_DISPLAY_PARAMS' 					=> 'Missing index in displayParams Array for: ',

  /* MySugar Framework (for Home and Dashboard) */
  'LBL_DASHLET_CONFIGURE_GENERAL' 							=> 'Algemeen',
  'LBL_DASHLET_CONFIGURE_FILTERS' 							=> 'Filters',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' 				=> 'Alleen mijn items',
  'LBL_DASHLET_CONFIGURE_TITLE' 								=> 'Titel',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' 					=> 'Toon rijen',

    // MySugar status strings
  'LBL_CREATING_NEW_PAGE' => 'Nieuwe pagina maken ...',
  'LBL_NEW_PAGE_FEEDBACK' => 'U heeft een nieuwe pagina gemaakt. Voeg nieuwe Sugar inhoud toe met "Dashlet toevoegen"',
  'LBL_DELETE_PAGE_CONFIRM' => 'Weet u zeker dat u deze pagina wilt verwijderen?',
  'LBL_SAVING_PAGE_TITLE' => 'Pagina titel opslaan ...',
  'LBL_RETRIEVING_PAGE' => 'Pagina ophalen ...',
  'LBL_MAX_DASHLETS_REACHED' => 'U heeft reeds het maximum aantal dashlets toegevoegd dat uw systeembeheerder toestaat. Om nog een dashlet toe te voegen, dient u eerst een andere te verwijderen.',
  'LBL_ADDING_DASHLET' => 'Bezig een Sugar dashlet toe te voegen...',
  'LBL_ADDED_DASHLET' => 'Sugar dashlet toegevoegd',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Weet je zeker dat je deze dashlet wilt verwijderen?',
  'LBL_REMOVING_DASHLET' => 'Bezig een Sugar dashlet toe te verwijderen...',
  'LBL_REMOVED_DASHLET' => 'Dashlet verwijderd',

    // MySugar Menu Options
  'LBL_ADD_PAGE' => 'Pagina toevoegen',
  'LBL_DELETE_PAGE' => 'Pagina verwijderen',
  'LBL_CHANGE_LAYOUT' => 'Verander indeling',
  'LBL_RENAME_PAGE' => 'Pagina hernoemen',

  'LBL_LOADING_PAGE' => 'Pagina wordt geladen, een moment...',

  'LBL_RELOAD_PAGE' => '<a href="javascript: window.location.reload()">Refresh de pagina</a> om dit Sugar dashlet te gebruiken.',
  'LBL_ADD_DASHLETS' => 'Sugar dashlet toevoegen',
  'LBL_CLOSE_DASHLETS' => 'Sluiten',
  'LBL_OPTIONS' => 'Opties',
  'LBL_NUMBER_OF_COLUMNS' => 'Klik op een icoon om het aantal kolommen te selecteren',
  'LBL_1_COLUMN' => '1 kolom',
  'LBL_2_COLUMN' => '2 kolommen',
  'LBL_3_COLUMN' => '3 kolommen',
  'LBL_PAGE_NAME' => 'Pagina naam',

  'LBL_SEARCH_RESULTS' => 'Zoekresultaten',
  'LBL_SEARCH_MODULES' => 'Modules',
  'LBL_SEARCH_CHARTS' => 'Grafieken',
  'LBL_SEARCH_REPORT_CHARTS' => 'Rapportage grafieken',
  'LBL_SEARCH_TOOLS' => 'Gereedschappen',

  'ERR_BLANK_PAGE_NAME' => 'Vul aub een pagina naam in.',
  /* End MySugar Framework strings */

  'LBL_NO_IMAGE' => 'Geen afbeelding',

  'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
  'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopieer adres van links:',
  'LBL_SAVE_AND_CONTINUE' => 'Opslaan en doorgaan',

  'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect</strong></p><ul><li>Klik op de waarden om een attribuut te selecteren</li>' .
  		'<li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>' .
  		'To select all values between two attributes,&nbsp; click first value&nbsp;and then ' .
  		'shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br>' .
  		'<br>Using the <b>Saved Search & Layout</b> option, you can save a set of search ' .
  		'parameters and/or a custom List View layout in order to quickly obtain the desired search ' .
  		'results in the future. You can save an unlimited number of custom searches and layouts. ' .
  		'All saved searches appear by name in the Saved Searches list, with the last loaded saved ' .
  		'search appearing at the top of the list.<br><br>To customize the List View layout, use the ' .
  		'Hide Columns and Display Columns boxes to select which fields to display in the search results. ' .
  		'For example, you can view or hide details such as the record name, and assigned user, and ' .
  		'assigned team in the search results. To add a column to List View, select the field from ' .
  		'the Hide Columns list and use the left arrow to move it to the Display Columns list. To ' .
  		'remove a column from List View, select it from the Display Columns list and use the right ' .
  		'arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be ' .
  		'able to load them at any time to view the search results in the custom layout.<br><br>To ' .
  		'save and update a search and/or layout:<ol><li>Enter a name for the search results in the ' .
  		'<b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved ' .
  		'Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it ' .
  		'from the Saved Searches list. The search results are displayed in the List View.</li><li>To ' .
  		'update the properties of a saved search, select the saved search from the list, enter the ' .
  		'new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> ' .
  		'next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the ' .
  		'Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click ' .
  		'<b>OK</b> to confirm the deletion.</li></ol>',


  //resource management
  'ERR_QUERY_LIMIT' => 'Fout: Query limiet van $limit gehaald voor $module module.',
  'ERROR_NOTIFY_OVERRIDE' => 'Fout: ResourceObserver->notify() moet overschreven worden.',

  //tracker labels
  'ERR_MONITOR_FILE_MISSING' => 'Fout: Unable to create monitor because metadata file is empty or file does not exist.',
  'ERR_MONITOR_NOT_CONFIGURED' => 'Fout: There is no monitor configured for requested name',
  'ERR_UNDEFINED_METRIC' => 'Fout: Unable to set value for undefined metric',
  'ERR_STORE_FILE_MISSING' => 'Fout: Unable to find Store implementation file',

	'LBL_MONITOR_ID' 													=> 'Monitor ID',




	'LBL_USER_ID' 														=> 'Gebruiker ID',
	'LBL_MODULE_NAME' 												=> 'Module naam',
	'LBL_ITEM_ID' 														=> 'Item ID',
	'LBL_ITEM_SUMMARY' 												=> 'Item samenvatting',
	'LBL_ACTION' 															=> 'Actie',
	'LBL_SESSION_ID'												  => 'Sessie ID',
	'LBL_VISIBLE' 														=> 'Record zichtbaar',
	'LBL_DATE_LAST_ACTION'										=> 'Datum van laatste aktie',
















    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'is niet voor',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welkom bij Sugar Portal 5.1',
    'LBL_PORTAL_WELCOME_INFO' => 'Sugar Portal is a framework which provides real-time view of cases, ' .
    		'bugs & newsletters etc to customers. This is an external facing interface to Sugar that can be ' .
    		'deployed within any website.  Stay tuned for more customer self service features like Project ' .
    		'Management and Forums in our future releases.',
    'LBL_LIST' => 'Lijst',
    'LBL_CREATE_CASE' => 'Nieuw verzoek',
    'LBL_CREATE_BUG' => 'Nieuwe bug',
    'LBL_NO_RECORDS_FOUND' => '- 0 records gevonden -',
);

$app_list_strings['moduleList']['Library'] = 'Bibliotheek';
$app_list_strings['library_type'] = array (
  'Books' => 'Boeken',
  'Music' => 'Muziek',
  'DVD' => 'DVD',
  'Magazines' => 'Tijdschriften'
);
$app_list_strings['moduleList']['EmailAddresses'] = 'E-mail adres';

$app_list_strings['kbdocument_status_dom'] = 'Concept';

$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array (
  'High' => 'Hoog',
  'Medium' => 'Gemiddeld',
  'Low' => 'Laag',


);

$app_list_strings['kbdocument_status_dom'] = array (
  'Draft' => 'Concept',
  'Expired' => 'Verlopen',
  'In Review' => 'Wacht op review',
  'Published' => 'Gepubliceerd',


);

$app_list_strings['kbadmin_actions_dom'] = array (
  '' => '--Admin Actions--',
  'Create New Tag' => 'Create New Tag',
  'Delete Tag' => 'Delete Tag',
  'Rename Tag' => 'Rename Tag',
  'Move Selected Articles' => 'Move Selected Articles',
  'Apply Tags On Articles' => 'Apply Tags To Articles',
  'Delete Selected Articles' => 'Delete Selected Articles',


);

$app_list_strings['kbdocument_attachment_option_dom'] = array (
  '' => '',
  'some' => 'Bevat attachments',
  'none' => 'Bevat geen',
  'mime' => 'Specificeer MIME type',
  'name' => 'Specificeer naam',


);

$app_list_strings['moduleList']['KBDocuments'] = 'Knowledge Base';
$app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Nieuw artikel';
$app_list_strings['kbdocument_viewing_frequency_dom'] = array (
  '' => '',
  'Top_5' => 'Top 5',
  'Top_10' => 'Top 10',
  'Top_20' => 'Top 20',
  'Bot_5' => 'Laatste 5',
  'Bot_10' => 'Laatste 10',
  'Bot_20' => 'Laatste 20',


);

$app_list_strings['kbdocument_canned_search'] = array (
  'all' => 'Alle',
  'added' => 'Toegevoegd in de laatste 30 dagen',
  'pending' => 'Wachtend op mijn goedkeuring',
  'updated' => 'Gewijzigd in de laatste 30 dagen',
  'faqs' => 'FAQs',


);

$app_list_strings['kbdocument_date_filter_options'] = array (
  '' => '',
  'on' => 'Aan',
  'before' => 'Voor',
  'after' => 'Na',
  'between_dates' => 'Is tussen',
  'last_7_days' => 'Laatste 7 dagen',
  'next_7_days' => 'Volgende 7 dagen',
  'last_month' => 'Laatste maand',
  'this_month' => 'Deze maand',
  'next_month' => 'Volgende maand',
  'last_30_days' => 'Laatste 30 dagen',
  'next_30_days' => 'Volgende 30 dagen',
  'last_year' => 'Laatste jaar',
  'this_year' => 'Dit jaar',
  'next_year' => 'Volgend jaar',
  'isnull' => 'Is null',


);

$app_list_strings['countries_dom'] = array (
  '' => '',
  'NETHERLANDS' => 'Nederland',
  'BELGIUM' => 'Belgie',
  'GERMANY' => 'Duitsland',
  '-' => '---------------',
  'ADEN' => 'ADEN',
  'AFGHANISTAN' => 'AFGHANISTAN',
  'ALBANIA' => 'ALBANIA',
  'ALGERIA' => 'ALGERIA',
  'ANDORRA' => 'ANDORRA',
  'ANGOLA' => 'ANGOLA',
  'ANTARCTICA' => 'ANTARCTICA',
  'ANTIGUA' => 'ANTIGUA',
  'ARGENTINA' => 'ARGENTINA',
  'ARMENIA' => 'ARMENIA',
  'ARUBA' => 'ARUBA',
  'AUSTRALIA' => 'AUSTRALIA',
  'AUSTRIA' => 'AUSTRIA',
  'AZERBAIJAN' => 'AZERBAIJAN',
  'BAHAMAS' => 'BAHAMAS',
  'BAHRAIN' => 'BAHRAIN',
  'BANGLADESH' => 'BANGLADESH',
  'BARBADOS' => 'BARBADOS',
  'BELARUS' => 'BELARUS',
    //Madcap: moved to top
  'BELIZE' => 'BELIZE',
  'BENIN' => 'BENIN',
  'BERMUDA' => 'BERMUDA',
  'BHUTAN' => 'BHUTAN',
  'BOLIVIA' => 'BOLIVIA',
  'BOSNIA' => 'BOSNIA',
  'BOTSWANA' => 'BOTSWANA',
  'BRAZIL' => 'BRAZIL',
  'BRUNEI' => 'BRUNEI',
  'BULGARIA' => 'BULGARIA',
  'BURUNDI' => 'BURUNDI',
  'CAMBODIA' => 'CAMBODIA',
  'CAMEROON' => 'CAMEROON',
  'CANADA' => 'CANADA',
  'CEVLON' => 'CEVLON',
  'CHAD' => 'CHAD',
  'CHILE' => 'CHILE',
  'CHINA' => 'CHINA',
  'COLOMBIA' => 'COLOMBIA',
  'CONGO' => 'CONGO',
  'CROATIA' => 'CROATIA',
  'CUBA' => 'CUBA',
  'CURACAO' => 'CURACAO',
  'CYPRUS' => 'CYPRUS',
  'DAHOMEY' => 'DAHOMEY',
  'DENMARK' => 'DENMARK',
  'DJIBOUTI' => 'DJIBOUTI',
  'DOMINICA' => 'DOMINICA',
  'DUBAI' => 'DUBAI',
  'ECUADOR' => 'ECUADOR',
  'EGYPT' => 'EGYPT',
  'ESTONIA' => 'ESTONIA',
  'ETHIOPIA' => 'ETHIOPIA',
  'FIJI' => 'FIJI',
  'FINLAND' => 'FINLAND',
  'FRANCE' => 'FRANCE',
  'GABON' => 'GABON',
  'GAMBIA' => 'GAMBIA',
  'GEORGIA' => 'GEORGIA',
    //Madcap: moved to top
  'GHANA' => 'GHANA',
  'GIBRALTAR' => 'GIBRALTAR',
  'GREECE' => 'GREECE',
  'GREENLAND' => 'GREENLAND',
  'GUADELOUPE' => 'GUADELOUPE',
  'GUAM' => 'GUAM',
  'GUATEMALA' => 'GUATEMALA',
  'GUINEA' => 'GUINEA',
  'GUYANA' => 'GUYANA',
  'HAITI' => 'HAITI',
  'HONDURAS' => 'HONDURAS',
  'HUNGARY' => 'HUNGARY',
  'ICELAND' => 'ICELAND',
  'IFNI' => 'IFNI',
  'INDIA' => 'INDIA',
  'INDONESIA' => 'INDONESIA',
  'IRAN' => 'IRAN',
  'IRAQ' => 'IRAQ',
  'IRELAND' => 'IRELAND',
  'ISRAEL' => 'ISRAEL',
  'ITALY' => 'ITALY',
  'JAMAICA' => 'JAMAICA',
  'JAPAN' => 'JAPAN',
  'JORDAN' => 'JORDAN',
  'KAZAKHSTAN' => 'KAZAKHSTAN',
  'KENYA' => 'KENYA',
  'KOREA' => 'KOREA',
  'KUWAIT' => 'KUWAIT',
  'KYRGYZSTAN' => 'KYRGYZSTAN',
  'LAOS' => 'LAOS',
  'LATVIA' => 'LATVIA',
  'LEBANON' => 'LEBANON',
  'LESOTHO' => 'LESOTHO',
  'LIBYA' => 'LIBYA',
  'LIECHTENSTEIN' => 'LIECHTENSTEIN',
  'LITHUANIA' => 'LITHUANIA',
  'LUXEMBOURG' => 'LUXEMBOURG',
  'MACAO' => 'MACAO',
  'MACEDONIA' => 'MACEDONIA',
  'MADAGASCAR' => 'MADAGASCAR',
  'MALAWI' => 'MALAWI',
  'MALAYSIA' => 'MALAYSIA',
  'MALDIVES' => 'MALDIVES',
  'MALI' => 'MALI',
  'MALTA' => 'MALTA',
  'MARTINIQUE' => 'MARTINIQUE',
  'MAURITANIA' => 'MAURITANIA',
  'MAURITIUS' => 'MAURITIUS',
  'MELANESIA' => 'MELANESIA',
  'MEXICO' => 'MEXICO',
  'MOLDOVIA' => 'MOLDOVIA',
  'MONACO' => 'MONACO',
  'MONGOLIA' => 'MONGOLIA',
  'MOROCCO' => 'MOROCCO',
  'MOZAMBIQUE' => 'MOZAMBIQUE',
  'MYANAMAR' => 'MYANAMAR',
  'NAMIBIA' => 'NAMIBIA',
  'NEPAL' => 'NEPAL',
    //Nederland moved to top
  'NICARAGUA' => 'NICARAGUA',
  'NIGER' => 'NIGER',
  'NIGERIA' => 'NIGERIA',
  'NORWAY' => 'NORWAY',
  'OMAN' => 'OMAN',
  'OTHER' => 'OTHER',
  'PAKISTAN' => 'PAKISTAN',
  'PANAMA' => 'PANAMA',
  'PARAGUAY' => 'PARAGUAY',
  'PERU' => 'PERU',
  'PHILIPPINES' => 'PHILIPPINES',
  'POLAND' => 'POLAND',
  'PORTUGAL' => 'PORTUGAL',
  'QATAR' => 'QATAR',
  'REUNION' => 'REUNION',
  'ROMANIA' => 'ROMANIA',
  'RUSSIA' => 'RUSSIA',
  'RWANDA' => 'RWANDA',
  'SABAH' => 'SABAH',
  'SENEGAL' => 'SENEGAL',
  'SERBIA' => 'SERBIA',
  'SEYCHELLES' => 'SEYCHELLES',
  'SINGAPORE' => 'SINGAPORE',
  'SLOVAKIA' => 'SLOVAKIA',
  'SLOVENIA' => 'SLOVENIA',
  'SOMALILIAND' => 'SOMALILIAND',
  'SPAIN' => 'SPAIN',
  'SUDAN' => 'SUDAN',
  'SURINAM' => 'SURINAM',
  'SWAZILAND' => 'SWAZILAND',
  'SWEDEN' => 'SWEDEN',
  'SWITZERLAND' => 'SWITZERLAND',
  'SYRIA' => 'SYRIA',
  'TAIWAN' => 'TAIWAN',
  'TAJIKISTAN' => 'TAJIKISTAN',
  'TANZANIA' => 'TANZANIA',
  'THAILAND' => 'THAILAND',
  'TONGA' => 'TONGA',
  'TRINIDAD' => 'TRINIDAD',
  'TUNISIA' => 'TUNISIA',
  'TURKEY' => 'TURKEY',
  'UGANDA' => 'UGANDA',
  'UKRAINE' => 'UKRAINE',
  'URUGUAY' => 'URUGUAY',
  'USA' => 'USA',
  'UZBEKISTAN' => 'UZBEKISTAN',
  'VANUATU' => 'VANUATU',
  'VENEZUELA' => 'VENEZUELA',
  'VIETNAM' => 'VIETNAM',
  'YEMEN' => 'YEMEN',
  'ZAIRE' => 'ZAIRE',
  'ZAMBIA' => 'ZAMBIA',
  'ZIMBABWE' => 'ZIMBABWE',
'ABU DHABI' => 'ABU DHABI',
'AMERICAN SAMOA' => 'Amerikaans-Samoa',
'BOUVET ISLAND' => 'Bouvet Island',
'BRITISH ANTARCTICA TERRITORY' => 'BRITSE ANTARCTICA GRONDGEBIED',
'BRITISH INDIAN OCEAN TERRITORY' => 'British Indian Ocean Territory',
'BRITISH VIRGIN ISLANDS' => 'BRITSE MAAGDENEILANDEN',
'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
'BURKINA FASO' => 'Burkina Faso',
'CANAL ZONE' => 'KANAALZONE',
'CANARY ISLAND' => 'Canarische Eilanden',
'CAPE VERDI ISLANDS' => 'CAPE VERDISCHE EILANDEN',
'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
'CHRISTMAS ISLAND' => 'Christmas Island',
'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
'COMORO ISLANDS' => 'COMORO ISLANDS',
'CONGO KINSHASA' => 'CONGO KINSHASA',
'COOK ISLANDS' => 'COOKEILANDEN',
'COSTA RICA' => 'COSTA RICA',
'CZECH REPUBLIC' => 'TSJECHIË',
'DOMINICAN REPUBLIC' => 'DOMINICAANSE REPUBLIEK',
'EL SALVADOR' => 'EL SALVADOR',
'EQUATORIAL GUINEA' => 'EQUATORIAAL-GUINEA',
'FAEROE ISLANDS' => '	FAEROE ISLANDS',
'FALKLAND ISLANDS' => 'FALKLANDEILANDEN',
'FRENCH GUIANA' => 'Frans-Guyana',
'FRENCH POLYNESIA' => 'FRANS POLYNESIE',
'HONG KONG' => 'HONG KONG',
'IVORY COAST' => 'IVOORKUST',
'KOREA, SOUTH' => 'Zuid-Korea',
'LEEWARD ISLANDS' => 'Benedenwindse Eilanden',
'NETHERLANDS ANTILLES' => 'NEDERLANDSE ANTILLEN',
'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NEDERLANDSE ANTILLEN Neutrale Zone',
'NEW CALADONIA' => 'NEW CALADONIA',
'NEW HEBRIDES' => 'NEW HEBRIDES',
'NEW ZEALAND' => 'NIEUW-ZEELAND',
'NORFOLK ISLAND' => 'Norfolk Island',
'PACIFIC ISLAND' => 'PACIFIC ISLAND',
'PAPUA NEW GUINEA' => 'PAPOEA-NIEUW-GUINEA',
'PORTUGUESE TIMOR' => 'Portugees Timor',
'PUERTO RICO' => 'PUERTO RICO',
'REPUBLIC OF BELARUS' => 'REPUBLIEK WIT-RUSLAND',
'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIEK VAN ZUID-AFRIKA',
'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
'SAN MARINO' => 'SAN MARINO',
'SAUDI ARABIA' => 'SAUDI ARABIE',
'SIERRA LEONE' => 'SIERRA LEONE',
'SOUTH AFRICA' => 'ZUID-AFRIKA',
'SOUTH YEMEN' => 'Zuid-Jemen',
'SPANISH SAHARA' => 'Spaanse Sahara',
'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
'SW AFRICA' => 'SW AFRICA',
'UNITED KINGDOM' => 'VERENIGD KONINKRIJK',
'UNITED ARAB EMIRATES' => 'VERENIGDE ARABISCHE EMIRATEN',
'UPPER VOLTA' => 'UPPER VOLTA',
'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
'US VIRGIN ISLANDS' => 'VS MAAGDENEILANDEN',
'VATICAN CITY' => 'VATICAANSTAD',
'WAKE ISLAND' => 'WAKE ISLAND',
'WEST INDIES' => 'WEST INDIES',
'WESTERN SAHARA' => 'Westelijke Sahara',
);

$app_list_strings['charset_dom'] = array (
  'BIG-5' => 'BIG-5 (Taiwan and Hong Kong)',
  /*'CP866'     => 'CP866', // ms-dos Cyrillic */
  /*'CP949'     => 'CP949 (Microsoft Korean)', */
  'CP1251' => 'CP1251 (MS Cyrillic)',
  'CP1252' => 'CP1252 (MS Western European & US)',
  'EUC-CN' => 'EUC-CN (Simplified Chinese GB2312)',
  'EUC-JP' => 'EUC-JP (Unix Japanese)',
  'EUC-KR' => 'EUC-KR (Korean)',
  'EUC-TW' => 'EUC-TW (Taiwanese)',
  'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
  'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
  'ISO-8859-1' => 'ISO-8859-1 (Western European and US)',
  'ISO-8859-2' => 'ISO-8859-2 (Central and Eastern European)',
  'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
  'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
  'ISO-8859-5' => 'ISO-8859-5 (Cyrillic)',
  'ISO-8859-6' => 'ISO-8859-6 (Arabic)',
  'ISO-8859-7' => 'ISO-8859-7 (Greek)',
  'ISO-8859-8' => 'ISO-8859-8 (Hebrew)',
  'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
  'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
  'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
  'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
  'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
  'KOI8-R' => 'KOI8-R (Cyrillic Russian)',
  'KOI8-U' => 'KOI8-U (Cyrillic Ukranian)',
  'SJIS' => 'SJIS (MS Japanese)',
  'UTF-8' => 'UTF-8'
);

$app_list_strings['timezone_dom'] = array (
  'Africa/Algiers' => 'Africa/Algiers',
  'Africa/Luanda' => 'Africa/Luanda',
  'Africa/Porto-Novo' => 'Africa/Porto-Novo',
  'Africa/Gaborone' => 'Africa/Gaborone',
  'Africa/Ouagadougou' => 'Africa/Ouagadougou',
  'Africa/Bujumbura' => 'Africa/Bujumbura',
  'Africa/Douala' => 'Africa/Douala',
  'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
  'Africa/Bangui' => 'Africa/Bangui',
  'Africa/Ndjamena' => 'Africa/Ndjamena',
  'Indian/Comoro' => 'Indian/Comoro',
  'Africa/Kinshasa' => 'Africa/Kinshasa',
  'Africa/Lubumbashi' => 'Africa/Lubumbashi',
  'Africa/Brazzaville' => 'Africa/Brazzaville',
  'Africa/Abidjan' => 'Africa/Abidjan',
  'Africa/Djibouti' => 'Africa/Djibouti',
  'Africa/Cairo' => 'Africa/Cairo',
  'Africa/Malabo' => 'Africa/Malabo',
  'Africa/Asmera' => 'Africa/Asmera',
  'Africa/Addis_Ababa' => 'Africa/Addis_Ababa',
  'Africa/Libreville' => 'Africa/Libreville',
  'Africa/Banjul' => 'Africa/Banjul',
  'Africa/Accra' => 'Africa/Accra',
  'Africa/Conakry' => 'Africa/Conakry',
  'Africa/Bissau' => 'Africa/Bissau',
  'Africa/Nairobi' => 'Africa/Nairobi',
  'Africa/Maseru' => 'Africa/Maseru',
  'Africa/Monrovia' => 'Africa/Monrovia',
  'Africa/Tripoli' => 'Africa/Tripoli',
  'Indian/Antananarivo' => 'Indian/Antananarivo',
  'Africa/Blantyre' => 'Africa/Blantyre',
  'Africa/Bamako' => 'Africa/Bamako',
  'Africa/Nouakchott' => 'Africa/Nouakchott',
  'Indian/Mauritius' => 'Indian/Mauritius',
  'Indian/Mayotte' => 'Indian/Mayotte',
  'Africa/Casablanca' => 'Africa/Casablanca',
  'Africa/El_Aaiun' => 'Africa/El_Aaiun',
  'Africa/Maputo' => 'Africa/Maputo',
  'Africa/Windhoek' => 'Africa/Windhoek',
  'Africa/Niamey' => 'Africa/Niamey',
  'Africa/Lagos' => 'Africa/Lagos',
  'Indian/Reunion' => 'Indian/Reunion',
  'Africa/Kigali' => 'Africa/Kigali',
  'Atlantic/St_Helena' => 'Atlantic/St_Helena',
  'Africa/Sao_Tome' => 'Africa/Sao_Tome',
  'Africa/Dakar' => 'Africa/Dakar',
  'Indian/Mahe' => 'Indian/Mahe',
  'Africa/Freetown' => 'Africa/Freetown',
  'Africa/Mogadishu' => 'Africa/Mogadishu',
  'Africa/Johannesburg' => 'Africa/Johannesburg',
  'Africa/Khartoum' => 'Africa/Khartoum',
  'Africa/Mbabane' => 'Africa/Mbabane',
  'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam',
  'Africa/Lome' => 'Africa/Lome',
  'Africa/Tunis' => 'Africa/Tunis',
  'Africa/Kampala' => 'Africa/Kampala',
  'Africa/Lusaka' => 'Africa/Lusaka',
  'Africa/Harare' => 'Africa/Harare',
  'Antarctica/Casey' => 'Antarctica/Casey',
  'Antarctica/Davis' => 'Antarctica/Davis',
  'Antarctica/Mawson' => 'Antarctica/Mawson',
  'Indian/Kerguelen' => 'Indian/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
  'Antarctica/Syowa' => 'Antarctica/Syowa',
  'Antarctica/Vostok' => 'Antarctica/Vostok',
  'Antarctica/Rothera' => 'Antarctica/Rothera',
  'Antarctica/Palmer' => 'Antarctica/Palmer',
  'Antarctica/McMurdo' => 'Antarctica/McMurdo',
  'Asia/Kabul' => 'Azië / Kabul',
  'Asia/Yerevan' => 'Azië / Yerevan',
  'Asia/Baku' => 'Azië / Baku',
  'Asia/Bahrain' => 'Azië / Bahrain',
  'Asia/Dhaka' => 'Azië / Dhaka',
  'Asia/Thimphu' => 'Azië / Thimphu',
  'Indian/Chagos' => 'Indian/Chagos',
  'Asia/Brunei' => 'Azië / Brunei',
  'Asia/Rangoon' => 'Azië / Rangoon',
  'Asia/Phnom_Penh' => 'Azië / Phnom_Penh',
  'Asia/Harbin' => 'Azië / Harbin',
  'Asia/Shanghai' => 'Azië / Shanghai',
  'Asia/Chongqing' => 'Azië / Chongqing',
  'Asia/Urumqi' => 'Azië / Urumqi',
  'Asia/Kashgar' => 'Azië / Kashgar',
  'Asia/Hong_Kong' => 'Azië / Hong_Kong',
  'Asia/Taipei' => 'Azië / Taipei',
  'Asia/Macau' => 'Azië / Macau',
  'Asia/Nicosia' => 'Azië / Nicosia',
  'Asia/Tbilisi' => 'Azië / Tbilisi',
  'Asia/Dili' => 'Azië / Dili',
  'Asia/Calcutta' => 'Azië / Calcutta',
  'Asia/Jakarta' => 'Azië / Jakarta',
  'Asia/Pontianak' => 'Azië / Pontianak',
  'Asia/Makassar' => 'Azië / Makassar',
  'Asia/Jayapura' => 'Azië / Jayapura',
  'Asia/Tehran' => 'Azië / Tehran',
  'Asia/Baghdad' => 'Azië / Baghdad',
  'Asia/Jerusalem' => 'Azië / Jerusalem',
  'Asia/Tokyo' => 'Azië / Tokyo',
  'Asia/Amman' => 'Azië / Amman',
  'Asia/Almaty' => 'Azië / Almaty',
  'Asia/Qyzylorda' => 'Azië / Qyzylorda',
  'Asia/Aqtobe' => 'Azië / Aqtobe',
  'Asia/Aqtau' => 'Azië / Aqtau',
  'Asia/Oral' => 'Azië / Oral',
'Asia/Beijing' => 'Azië / Beijing',
  'Asia/Bishkek' => 'Azië / Bishkek',
  'Asia/Seoul' => 'Azië / Seoul',
  'Asia/Pyongyang' => 'Azië / Pyongyang',
  'Asia/Kuwait' => 'Azië / Kuwait',
  'Asia/Vientiane' => 'Azië / Vientiane',
  'Asia/Beirut' => 'Azië / Beirut',
  'Asia/Kuala_Lumpur' => 'Azië / Kuala_Lumpur',
  'Asia/Kuching' => 'Azië / Kuching',
  'Indian/Maldives' => 'Indian/Maldives',
  'Asia/Hovd' => 'Azië / Hovd',
  'Asia/Ulaanbaatar' => 'Azië / Ulaanbaatar',
  'Asia/Choibalsan' => 'Azië / Choibalsan',
  'Asia/Katmandu' => 'Azië / Katmandu',
  'Asia/Muscat' => 'Azië / Muscat',
  'Asia/Karachi' => 'Azië / Karachi',
  'Asia/Gaza' => 'Azië / Gaza',
  'Asia/Manila' => 'Azië / Manila',
  'Asia/Qatar' => 'Azië / Qatar',
  'Asia/Riyadh' => 'Azië / Riyadh',
  'Asia/Singapore' => 'Azië / Singapore',
  'Asia/Colombo' => 'Azië / Colombo',
  'Asia/Damascus' => 'Azië / Damascus',
  'Asia/Dushanbe' => 'Azië / Dushanbe',
  'Asia/Bangkok' => 'Azië / Bangkok',
  'Asia/Ashgabat' => 'Azië / Ashgabat',
  'Asia/Dubai' => 'Azië / Dubai',
  'Asia/Samarkand' => 'Azië / Samarkand',
  'Asia/Tashkent' => 'Azië / Tashkent',
  'Asia/Saigon' => 'Azië / Saigon',
  'Asia/Aden' => 'Azië / Aden',
  'Australia/Darwin' => 'Australia/Darwin',
  'Australia/Perth' => 'Australia/Perth',
  'Australia/Brisbane' => 'Australia/Brisbane',
  'Australia/Lindeman' => 'Australia/Lindeman',
  'Australia/Adelaide' => 'Australia/Adelaide',
  'Australia/Hobart' => 'Australia/Hobart',
  'Australia/Currie' => 'Australia/Currie',
  'Australia/Melbourne' => 'Australia/Melbourne',
  'Australia/Sydney' => 'Australia/Sydney',
  'Australia/Broken_Hill' => 'Australia/Broken_Hill',
  'Indian/Christmas' => 'Indian/Christmas',
  'Pacific/Rarotonga' => 'Pacific/Rarotonga',
  'Indian/Cocos' => 'Indian/Cocos',
  'Pacific/Fiji' => 'Pacific/Fiji',
  'Pacific/Gambier' => 'Pacific/Gambier',
  'Pacific/Marquesas' => 'Pacific/Marquesas',
  'Pacific/Tahiti' => 'Pacific/Tahiti',
  'Pacific/Guam' => 'Pacific/Guam',
  'Pacific/Tarawa' => 'Pacific/Tarawa',
  'Pacific/Enderbury' => 'Pacific/Enderbury',
  'Pacific/Kiritimati' => 'Pacific/Kiritimati',
  'Pacific/Saipan' => 'Pacific/Saipan',
  'Pacific/Majuro' => 'Pacific/Majuro',
  'Pacific/Kwajalein' => 'Pacific/Kwajalein',
  'Pacific/Truk' => 'Pacific/Truk',
  'Pacific/Ponape' => 'Pacific/Ponape',
  'Pacific/Kosrae' => 'Pacific/Kosrae',
  'Pacific/Nauru' => 'Pacific/Nauru',
  'Pacific/Noumea' => 'Pacific/Noumea',
  'Pacific/Auckland' => 'Pacific/Auckland',
  'Pacific/Chatham' => 'Pacific/Chatham',
  'Pacific/Niue' => 'Pacific/Niue',
  'Pacific/Norfolk' => 'Pacific/Norfolk',
  'Pacific/Palau' => 'Pacific/Palau',
  'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
  'Pacific/Pitcairn' => 'Pacific/Pitcairn',
  'Pacific/Pago_Pago' => 'Pacific/Pago_Pago',
  'Pacific/Apia' => 'Pacific/Apia',
  'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
  'Pacific/Fakaofo' => 'Pacific/Fakaofo',
  'Pacific/Tongatapu' => 'Pacific/Tongatapu',
  'Pacific/Funafuti' => 'Pacific/Funafuti',
  'Pacific/Johnston' => 'Pacific/Johnston',
  'Pacific/Midway' => 'Pacific/Midway',
  'Pacific/Wake' => 'Pacific/Wake',
  'Pacific/Efate' => 'Pacific/Efate',
  'Pacific/Wallis' => 'Pacific/Wallis',
  'Europe/London' => 'Europe/London',
  'Europe/Dublin' => 'Europe/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europe/Tirane',
  'Europe/Andorra' => 'Europe/Andorra',
  'Europe/Vienna' => 'Europe/Vienna',
  'Europe/Minsk' => 'Europe/Minsk',
  'Europe/Brussels' => 'Europe/Brussels',
  'Europe/Sofia' => 'Europe/Sofia',
  'Europe/Prague' => 'Europe/Prague',
  'Europe/Copenhagen' => 'Europe/Copenhagen',
  'Atlantic/Faeroe' => 'Atlantic/Faeroe',
  'America/Danmarkshavn' => 'America/Danmarkshavn',
  'America/Scoresbysund' => 'America/Scoresbysund',
  'America/Godthab' => 'America/Godthab',
  'America/Thule' => 'America/Thule',
  'Europe/Tallinn' => 'Europe/Tallinn',
  'Europe/Helsinki' => 'Europe/Helsinki',
  'Europe/Paris' => 'Europe/Paris',
  'Europe/Berlin' => 'Europe/Berlin',
  'Europe/Gibraltar' => 'Europe/Gibraltar',
  'Europe/Athens' => 'Europe/Athens',
  'Europe/Budapest' => 'Europe/Budapest',
  'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
  'Europe/Rome' => 'Europe/Rome',
  'Europe/Riga' => 'Europe/Riga',
  'Europe/Vaduz' => 'Europe/Vaduz',
  'Europe/Vilnius' => 'Europe/Vilnius',
  'Europe/Luxembourg' => 'Europe/Luxembourg',
  'Europe/Malta' => 'Europe/Malta',
  'Europe/Chisinau' => 'Europe/Chisinau',
  'Europe/Monaco' => 'Europe/Monaco',
  'Europe/Amsterdam' => 'Europe/Amsterdam',
  'Europe/Oslo' => 'Europe/Oslo',
  'Europe/Warsaw' => 'Europe/Warsaw',
  'Europe/Lisbon' => 'Europe/Lisbon',
  'Atlantic/Azores' => 'Atlantic/Azores',
  'Atlantic/Madeira' => 'Atlantic/Madeira',
  'Europe/Bucharest' => 'Europe/Bucharest',
  'Europe/Kaliningrad' => 'Europe/Kaliningrad',
  'Europe/Moscow' => 'Europe/Moscow',
  'Europe/Samara' => 'Europe/Samara',
  'Asia/Yekaterinburg' => 'Azië / Yekaterinburg',
  'Asia/Omsk' => 'Azië / Omsk',
  'Asia/Novosibirsk' => 'Azië / Novosibirsk',
  'Asia/Krasnoyarsk' => 'Azië / Krasnoyarsk',
  'Asia/Irkutsk' => 'Azië / Irkutsk',
  'Asia/Yakutsk' => 'Azië / Yakutsk',
  'Asia/Vladivostok' => 'Azië / Vladivostok',
  'Asia/Sakhalin' => 'Azië / Sakhalin',
  'Asia/Magadan' => 'Azië / Magadan',
  'Asia/Kamchatka' => 'Azië / Kamchatka',
  'Asia/Anadyr' => 'Azië / Anadyr',
  'Europe/Belgrade' => 'Europe/Belgrade',
  'Europe/Madrid' => 'Europe/Madrid',
  'Africa/Ceuta' => 'Africa/Ceuta',
  'Atlantic/Canary' => 'Atlantic/Canary',
  'Europe/Stockholm' => 'Europe/Stockholm',
  'Europe/Zurich' => 'Europe/Zurich',
  'Europe/Istanbul' => 'Europe/Istanbul',
  'Europe/Kiev' => 'Europe/Kiev',
  'Europe/Uzhgorod' => 'Europe/Uzhgorod',
  'Europe/Zaporozhye' => 'Europe/Zaporozhye',
  'Europe/Simferopol' => 'Europe/Simferopol',
  'America/New_York' => 'America/New_York',
  'America/Chicago' => 'America/Chicago',
  'America/North_Dakota/Center' => 'America/North_Dakota/Center',
  'America/Denver' => 'America/Denver',
  'America/Los_Angeles' => 'America/Los_Angeles',
  'America/Juneau' => 'America/Juneau',
  'America/Yakutat' => 'America/Yakutat',
  'America/Anchorage' => 'America/Anchorage',
  'America/Nome' => 'America/Nome',
  'America/Adak' => 'America/Adak',
  'Pacific/Honolulu' => 'Pacific/Honolulu',
  'America/Phoenix' => 'America/Phoenix',
  'America/Boise' => 'America/Boise',
  'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'America/Indiana/Marengo',
  'America/Indiana/Knox' => 'America/Indiana/Knox',
  'America/Indiana/Vevay' => 'America/Indiana/Vevay',
  'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
  'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
  'America/Detroit' => 'America/Detroit',
  'America/Menominee' => 'America/Menominee',
  'America/St_Johns' => 'America/St_Johns',
  'America/Goose_Bay' => 'America/Goose_Bay',
  'America/Halifax' => 'America/Halifax',
  'America/Glace_Bay' => 'America/Glace_Bay',
  'America/Montreal' => 'America/Montreal',
  'America/Toronto' => 'America/Toronto',
  'America/Thunder_Bay' => 'America/Thunder_Bay',
  'America/Nipigon' => 'America/Nipigon',
  'America/Rainy_River' => 'America/Rainy_River',
  'America/Winnipeg' => 'America/Winnipeg',
  'America/Regina' => 'America/Regina',
  'America/Swift_Current' => 'America/Swift_Current',
  'America/Edmonton' => 'America/Edmonton',
  'America/Vancouver' => 'America/Vancouver',
  'America/Dawson_Creek' => 'America/Dawson_Creek',
  'America/Pangnirtung' => 'America/Pangnirtung',
  'America/Iqaluit' => 'America/Iqaluit',
  'America/Coral_Harbour' => 'America/Coral_Harbour',
  'America/Rankin_Inlet' => 'America/Rankin_Inlet',
  'America/Cambridge_Bay' => 'America/Cambridge_Bay',
  'America/Yellowknife' => 'America/Yellowknife',
  'America/Inuvik' => 'America/Inuvik',
  'America/Whitehorse' => 'America/Whitehorse',
  'America/Dawson' => 'America/Dawson',
  'America/Cancun' => 'America/Cancun',
  'America/Merida' => 'America/Merida',
  'America/Monterrey' => 'America/Monterrey',
  'America/Mexico_City' => 'America/Mexico_City',
  'America/Chihuahua' => 'America/Chihuahua',
  'America/Hermosillo' => 'America/Hermosillo',
  'America/Mazatlan' => 'America/Mazatlan',
  'America/Tijuana' => 'America/Tijuana',
  'America/Anguilla' => 'America/Anguilla',
  'America/Antigua' => 'America/Antigua',
  'America/Nassau' => 'America/Nassau',
  'America/Barbados' => 'America/Barbados',
  'America/Belize' => 'America/Belize',
  'Atlantic/Bermuda' => 'Atlantic/Bermuda',
  'America/Cayman' => 'America/Cayman',
  'America/Costa_Rica' => 'America/Costa_Rica',
  'America/Havana' => 'America/Havana',
  'America/Dominica' => 'America/Dominica',
  'America/Santo_Domingo' => 'America/Santo_Domingo',
  'America/El_Salvador' => 'America/El_Salvador',
  'America/Grenada' => 'America/Grenada',
  'America/Guadeloupe' => 'America/Guadeloupe',
  'America/Guatemala' => 'America/Guatemala',
  'America/Port-au-Prince' => 'America/Port-au-Prince',
  'America/Tegucigalpa' => 'America/Tegucigalpa',
  'America/Jamaica' => 'America/Jamaica',
  'America/Martinique' => 'America/Martinique',
  'America/Montserrat' => 'America/Montserrat',
  'America/Managua' => 'America/Managua',
  'America/Panama' => 'America/Panama',
  'America/Puerto_Rico' => 'America/Puerto_Rico',
  'America/St_Kitts' => 'America/St_Kitts',
  'America/St_Lucia' => 'America/St_Lucia',
  'America/Miquelon' => 'America/Miquelon',
  'America/St_Vincent' => 'America/St_Vincent',
  'America/Grand_Turk' => 'America/Grand_Turk',
  'America/Tortola' => 'America/Tortola',
  'America/St_Thomas' => 'America/St_Thomas',
  'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires',
  'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
  'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
  'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
  'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
  'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
  'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
  'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos',
  'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
  'America/Aruba' => 'America/Aruba',
  'America/La_Paz' => 'America/La_Paz',
  'America/Noronha' => 'America/Noronha',
  'America/Belem' => 'America/Belem',
  'America/Fortaleza' => 'America/Fortaleza',
  'America/Recife' => 'America/Recife',
  'America/Araguaina' => 'America/Araguaina',
  'America/Maceio' => 'America/Maceio',
  'America/Bahia' => 'America/Bahia',
  'America/Sao_Paulo' => 'America/Sao_Paulo',
  'America/Campo_Grande' => 'America/Campo_Grande',
  'America/Cuiaba' => 'America/Cuiaba',
  'America/Porto_Velho' => 'America/Porto_Velho',
  'America/Boa_Vista' => 'America/Boa_Vista',
  'America/Manaus' => 'America/Manaus',
  'America/Eirunepe' => 'America/Eirunepe',
  'America/Rio_Branco' => 'America/Rio_Branco',
  'America/Santiago' => 'America/Santiago',
  'Pacific/Easter' => 'Pacific/Easter',
  'America/Bogota' => 'America/Bogota',
  'America/Curacao' => 'America/Curacao',
  'America/Guayaquil' => 'America/Guayaquil',
  'Pacific/Galapagos' => 'Pacific/Galapagos',
  'Atlantic/Stanley' => 'Atlantic/Stanley',
  'America/Cayenne' => 'America/Cayenne',
  'America/Guyana' => 'America/Guyana',
  'America/Asuncion' => 'America/Asuncion',
  'America/Lima' => 'America/Lima',
  'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
  'America/Paramaribo' => 'America/Paramaribo',
  'America/Port_of_Spain' => 'America/Port_of_Spain',
  'America/Montevideo' => 'America/Montevideo',
  'America/Caracas' => 'America/Caracas'
);
$app_list_strings['email_settings_num_dom'] = array (
'10' => '10',
'20' => '20',
'50' => '50',
);

$app_list_strings['release_status_dom'] = array (
'Active' => 'Actief',
'Inactive' => 'Inactief',
);


$app_list_strings['email_settings_for_ssl'] = array (
'0' => '',
'1' => 'SSL',
'2' => 'TLS',
);
$app_list_strings['link_target_dom'] = array (
'_blank' => 'Nieuw venster',
'_self' => 'Hetzelfde venster',
);

//640
$app_list_strings['moduleList']['DocumentRevisions'] = 'Document Revisies';
$app_list_strings['moduleList']['SNIP'] = 'Email archivering';
$app_list_strings['moduleList']['OAuthKeys'] = 'OAuth Consumer Keys';
$app_list_strings['moduleList']['OAuthTokens'] = 'OAuth Tokens';
$app_list_strings['extapi_meeting_password']['WebEx'] = 'WebEx';
$app_list_strings['meeting_type_dom']['Other'] = 'Anders';
$app_list_strings['meeting_type_dom']['Sugar'] = 'SugarCRM';
$app_list_strings['user_type_dom']['RegularUser'] = 'Standaard gebruiker';
$app_list_strings['user_type_dom']['Administrator'] = 'Beheerder';
$app_list_strings['dashlet_auto_refresh_options']['30'] = 'Iedere 30 seconden';
$app_list_strings['dashlet_auto_refresh_options']['-1'] = 'Geen autorefresh';
$app_list_strings['dashlet_auto_refresh_options']['60'] = 'Iedere minuut';
$app_list_strings['dashlet_auto_refresh_options']['180'] = 'Iedere 3 minuten';
$app_list_strings['dashlet_auto_refresh_options']['300'] = 'Iedere 5 minuten';
$app_list_strings['dashlet_auto_refresh_options']['600'] = 'Iedere 10 minuten';
$app_list_strings['dashlet_auto_refresh_options_admin']['-1'] = 'Nooit';
$app_list_strings['dashlet_auto_refresh_options_admin']['60'] = 'Iedere 1 minuten';
$app_list_strings['dashlet_auto_refresh_options_admin']['180'] = 'Iedere 3 minuten';
$app_list_strings['dashlet_auto_refresh_options_admin']['300'] = 'Iedere 5 minuten';
$app_list_strings['dashlet_auto_refresh_options_admin']['600'] = 'Iedere 10 minuten';
$app_list_strings['dashlet_auto_refresh_options_admin']['30'] = 'Iedere 30 seconden';
$app_list_strings['dashlet_auto_refresh_options_admin']['60'] = 'Iedere minuut';
$app_list_strings['date_range_search_dom']['='] = 'Gelijk';
$app_list_strings['date_range_search_dom']['not_equal'] = 'Niet op';
$app_list_strings['date_range_search_dom']['greater_than'] = 'Na';
$app_list_strings['date_range_search_dom']['less_than'] = 'Voor';
$app_list_strings['date_range_search_dom']['last_7_days'] = 'Laatste 7 dagen';
$app_list_strings['date_range_search_dom']['next_7_days'] = 'Volgende 7 dagen';
$app_list_strings['date_range_search_dom']['last_30_days'] = 'Laatste 30 dagen';
$app_list_strings['date_range_search_dom']['next_30_days'] = 'Volgende 30 dagen';
$app_list_strings['date_range_search_dom']['last_month'] = 'Vorige maan';
$app_list_strings['date_range_search_dom']['this_month'] = 'Deze maan';
$app_list_strings['date_range_search_dom']['last_month'] = 'Vorige maand';
$app_list_strings['date_range_search_dom']['this_month'] = 'Deze maand';
$app_list_strings['date_range_search_dom']['next_month'] = 'Volgende maand';
$app_list_strings['date_range_search_dom']['last_year'] = 'Vorig jaar';
$app_list_strings['date_range_search_dom']['this_year'] = 'Dit jaar';
$app_list_strings['date_range_search_dom']['next_year'] = 'Volgend jaar';
$app_list_strings['date_range_search_dom']['between'] = 'Is tussen';
$app_list_strings['numeric_range_search_dom']['='] = 'Gelijk';
$app_list_strings['numeric_range_search_dom']['not_equal'] = 'Is niet gelijk aan';
$app_list_strings['numeric_range_search_dom']['greater_than'] = 'Groter dan';
$app_list_strings['numeric_range_search_dom']['greater_than_equals'] = 'Groter dan of gelijk aan';
$app_list_strings['numeric_range_search_dom']['less_than'] = 'Minder dan';
$app_list_strings['numeric_range_search_dom']['less_than_equals'] = 'Minder dan of gelijk aan';
$app_list_strings['numeric_range_search_dom']['between'] = 'Is tussen';
$app_list_strings['lead_conv_activity_opt']['copy'] = 'Kopieer';
$app_list_strings['lead_conv_activity_opt']['move'] = 'Verplaats';
$app_list_strings['lead_conv_activity_opt']['donothing'] = 'Doe niets';
$app_list_strings['eapm_list']['Sugar'] = 'Sugar';
$app_list_strings['eapm_list']['WebEx'] = 'WebEx';
$app_list_strings['eapm_list']['GoToMeeting'] = 'GoToMeeting';
$app_list_strings['eapm_list']['LotusLive'] = 'LotusLive';
$app_list_strings['eapm_list']['Google'] = 'Google';
$app_list_strings['eapm_list']['Box'] = 'Box.net';
$app_list_strings['eapm_list']['Facebook'] = 'Facebook';
$app_list_strings['eapm_list']['Twitter'] = 'Twitter';
$app_list_strings['eapm_list_import']['Google'] = '	Google Contacts';
$app_list_strings['eapm_list_documents']['Google'] = '	Google Docs';
$app_list_strings['eapm_list_documents']['Google'] = 'Google Docs';
$app_list_strings['token_status']['1'] = 'Request';
$app_list_strings['token_status']['2'] = 'Toegang';
$app_list_strings['token_status']['3'] = 'Ongeldig';

$app_strings['LBL_CLOSE_ACTIVITY_HEADER'] = 'Bevestigen';
$app_strings['LBL_CLOSE_ACTIVITY_CONFIRM'] = 'Wilt u deze #module# sluiten?';
$app_strings['LBL_CLOSE_ACTIVITY_REMEMBER'] = 'Geef dit bericht niet weer in de toekomst:';
$app_strings['LBL_FAVORITES_FILTER'] = 'Mijn favorieten:';
$app_strings['LBL_LIST_DATE_ENTERED'] = 'Datum aangemaakt';
$app_strings['LBL_REQUIRED_TITLE'] = 'Geeft een verplicht veld aan';
$app_strings['LBL_SUGAR_COPYRIGHT_SUB'] = '© 2004-2011 <a href=\"http://www.sugarcrm.com\" target=\"_blank\" class=\"copyRightLink\">SugarCRM Inc</a> Alle rechten voorbehouden. <br> SugarCRM is een handelsmerk van SugarCRM, Inc Alle andere bedrijfs-en productnamen zijn mogelijk handelsmerken van de respectieve bedrijven waarmee ze geassocieerd zijn.';
$app_strings['WARN_UNSAVED_CHANGES'] = 'U staat op het punt dit record te verlaten zonder de wijzigingen op te slaan die u heeft gemaakt bij dit record. Bent u zeker dat u weg wilt navigeren van deze pagina?';

$app_strings['LBL_EMAIL_OPT_OUT_AND_INVALID'] = 'Afgemeld en ongeldig';
$app_strings['LBL_CLOSE_ACTIVITY_HEADER'] = 'Bevestigen';
$app_strings['LBL_CLOSE_ACTIVITY_CONFIRM'] = 'Wilt u deze  #module# sluiten?';
$app_strings['LBL_INVALID_FILE_EXTENSION'] = 'Ongeldige Bestandsextensie';
$app_strings['ERR_EXTERNAL_API_SAVE_FAIL'] = 'Er is een fout opgetreden bij het opslaan op de externe relatie';
$app_strings['ERR_EXTERNAL_API_UPLOAD_FAIL'] = 'Er is een fout opgetreden bij het uploaden. Zorg ervoor dat het bestand dat u wilt uploaden is niet leeg.';
$app_strings['ERR_NO_DB'] = 'Kon geen verbinding maken met de database. Controleer  uw  sugarcrm.log voor details.';
$app_strings['ERR_DB_FAIL'] = 'Database probleem. Controleer uw sugarcrm.log voor details.';
$app_strings['ERR_EXTERNAL_API_403'] = 'Toestemming geweigerd. Bestandstype wordt niet ondersteund.';
$app_strings['LBL_CHANGE_PASSWORD'] = 'Wachtwoord wijzigen';
$app_strings['LBL_OPEN_ITEMS'] = 'Open items:';
$app_strings['LBL_SEARCH_MORE'] = 'meer';
$app_strings['LNK_CREATE'] = 'Aanmaken';
$app_strings['LNK_BACKTOTOP'] = 'Terug naar boven';
$app_strings['MSG_JS_ALERT_MTG_REMINDER_CALL_MSG'] = 'Klik op OK om deze oproep te bekijken of klik op Annuleren om dit bericht te negeren.';
$app_strings['MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG'] = 'Klik op OK om deze afspraak te bekijken of klik op Annuleren om dit bericht te negeren.';
$app_strings['LBL_MASSUPDATE_DELETE_USER_EXISTS'] = 'Dit prive team [{0}] kan niet worden verwijderd totdat de gebruiker [{1}] is geschrapt.';
$app_strings['LBL_DASHLET_CONFIGURE_AUTOREFRESH'] = 'Auto-refresh';
$app_strings['LBL_CHOOSE_MONTH'] = 'Kies een maand';
$app_strings['LBL_ENTER_YEAR'] = 'Geef het jaar in';
$app_strings['LBL_ENTER_VALID_YEAR'] = 'Vul een geldig jaar in';
$app_strings['LBL_INVALID_USA_PHONE_FORMAT'] = 'Voer een numerieke Amerikaans telefoonnummer in, inclusief netnummer.';
$app_strings['ERR_FILE_WRITE'] = 'Fout: Kon niet schrijven naar bestand {0}. Controlleer systeem en webserver permissies.';
$app_strings['ERR_FILE_NOT_FOUND'] = 'Fout: Kon bestand niet laden {0}. Controlleer systeem en webserver permissies.';
$app_strings['LBL_AND'] = 'En';
$app_strings['LBL_BEFORE'] = 'Vóór';
$app_strings['LBL_UPLOAD_FROM_COMPUTER'] = 'Uploaden van uw computer';
$app_strings['LBL_SEARCH_EXTERNAL_API'] = 'Bestand op externe bron';
$app_strings['LBL_EXTERNAL_SECURITY_LEVEL'] = 'Beveiliging';
$app_strings['LBL_SHARE_PRIVATE'] = 'Prive';
$app_strings['LBL_SHARE_COMPANY'] = 'Bedrijf';
$app_strings['LBL_SHARE_LINKABLE'] = 'Koppelbaar';
$app_strings['LBL_SHARE_PUBLIC'] = 'Openbare';
$app_strings['LBL_RSS_FEED'] = 'RSS Feed';
$app_strings['LBL_RSS_RECORDS_FOUND'] = 'record (s) gevonden';
$app_strings['ERR_RSS_INVALID_INPUT'] = 'RSS is geen geldige input_type';
$app_strings['ERR_RSS_INVALID_RESPONSE'] = 'RSS is geen geldige response_type voor deze methode';
$app_strings['ERR_GOOGLE_API_415'] = 'Google Docs biedt geen ondersteuning voor de bestandsindeling die u verstrekt.';

//640
$app_strings['LBL_WELCOMEBAR'] = 'Welkom';
$app_strings['LBL_ADVANCEDSEARCH'] = 'Geavanceerd zoeken';
$app_strings['LBL_MOREDETAIL'] = 'Meer details';
$app_strings['LBL_EDIT_INLINE'] = 'Bewerken Inline';
$app_strings['LBL_VIEW_INLINE'] = 'Bekijk';
$app_strings['LBL_BASIC_SEARCH'] = 'Zoek';
$app_strings['LBL_PROJECT_MINUS'] = 'Verwijder';
$app_strings['LBL_PROJECT_PLUS'] = 'Toevoegen';
$app_strings['LBL_ICON_COLUMN_1'] = 'Kolom';
$app_strings['LBL_ICON_COLUMN_2'] = '2 kolommen';
$app_strings['LBL_ICON_COLUMN_3'] = '3 kolommen';
$app_strings['LBL_ADVANCED_SEARCH'] = 'Geavanceerd zoeken';
$app_strings['LBL_ID_FF_ADD'] = 'Toevoegen';
$app_strings['LBL_HIDE_SHOW'] = 'Verberg/toon';
$app_strings['LBL_DELETE_INLINE'] = 'Verwijder';
$app_strings['LBL_PLUS_INLINE'] = 'Toevoegen';
$app_strings['LBL_ID_FF_CLEAR'] = 'Wissen';
$app_strings['LBL_ID_FF_VCARD'] = 'vCard ';
$app_strings['LBL_ID_FF_REMOVE'] = 'Verwijder';
$app_strings['LBL_ADD'] = 'Toevoegen';
$app_strings['LBL_COMPANY_LOGO'] = 'Logo bedrijf';
$app_strings['LBL_JS_CALENDAR'] = 'Agenda';
$app_strings['LBL_CONNECTORS_POPUPS'] = 'Connector popups';
$app_strings['LBL_CLOSEINLINE'] = 'Sluiten';
$app_strings['LBL_EDITINLINE'] = 'Wijzig';
$app_strings['LBL_VIEWINLINE'] = 'Bekijk';
$app_strings['LBL_INFOINLINE'] = 'Info';
$app_strings['LBL_POWERED_BY_SUGARCRM'] = 'Powered by SugarCRM ';
$app_strings['LBL_PRINT'] = 'Print';
$app_strings['LBL_HELP'] = 'Help';
$app_strings['LBL_ID_FF_SELECT'] = 'Selecteer';
$app_strings['ERR_AJAX_LOAD'] = 'Er is een fout opgetreden';
$app_strings['ERR_AJAX_LOAD_FAILURE'] = 'Er was een fout bij het verwerken van uw request, probeer het later nog eens';
$app_strings['ERR_AJAX_LOAD_FOOTER'] = 'Als deze fout zich blijft voordoen, laat uw beheerder danAjax voor deze module uitschakelen';
$app_strings['LBL_GS_HELP'] = 'De velden in deze module gebruikt in deze zoekopdracht verschijnen hierhoven. De gemarkeerde tekst komt overeen met uw zoek criteria';
$app_strings['LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE'] = 'Er zijn geen velden beschikbaar voor de mass update opdracht';
$app_strings['LBL_BILLING_STREET'] = 'Straat:';
$app_strings['LBL_SHIPPING_STREET'] = 'Straat:';
$app_strings['LBL_SAVE_OBJECT'] = 'Opslaan {0}';
$app_strings['LBL_ACCESSKEY_CLEAR_RELATE_TITLE'] = 'Wissen selectie';
$app_strings['LBL_ACCESSKEY_CLEAR_RELATE_LABEL'] = 'Wissen selectie';
$app_strings['LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE'] = 'Wissen selectie';
$app_strings['LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL'] = 'Wissen selectie';
$app_strings['LBL_ACCESSKEY_SELECT_FILE_KEY'] = 'F';
$app_strings['LBL_ACCESSKEY_SELECT_FILE_TITLE'] = 'Selecteer bestand [ALT+F]';
$app_strings['LBL_ACCESSKEY_SELECT_FILE_LABEL'] = 'Selecteer bestand';
$app_strings['LBL_ACCESSKEY_CLEAR_FILE_TITLE'] = 'Wissen bestand';
$app_strings['LBL_ACCESSKEY_CLEAR_FILE_LABEL'] = 'Wissen bestand';
$app_strings['LBL_ACCESSKEY_SELECT_USERS_KEY'] = 'U';
$app_strings['LBL_ACCESSKEY_SELECT_USERS_TITLE'] = 'Selecteer geruiker [Alt+U]';
$app_strings['LBL_ACCESSKEY_SELECT_USERS_TITLE'] = 'Selecteer gebruiker [Alt+U]';
$app_strings['LBL_ACCESSKEY_SELECT_USERS_LABEL'] = 'Selecteer gebruiker';
$app_strings['LBL_ACCESSKEY_CLEAR_USERS_TITLE'] = 'Wissen gebruiker';
$app_strings['LBL_ACCESSKEY_CLEAR_USERS_LABEL'] = 'Wissen gebruiker';
$app_strings['LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY'] = 'A';
$app_strings['LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE'] = 'Selecteer relatie [Alt+A] ';
$app_strings['LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL'] = 'Selecteer relatie ';
$app_strings['LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE'] = 'Wissen relatie';
$app_strings['LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL'] = '	Wissen relatie';
$app_strings['LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL'] = 'Wissen relatie';
$app_strings['LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY'] = 'M';
$app_strings['LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE'] = 'Selecteer campagne [Alt+M] ';
$app_strings['LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL'] = 'Selecteer campagne';
$app_strings['LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL'] = 'Wissen campagne';
$app_strings['LBL_ACCESSKEY_SELECT_CONTACTS_KEY'] = 'C';
$app_strings['LBL_ACCESSKEY_SELECT_CONTACTS_TITLE'] = 'Selecteer contactpersoon [Alt+C] ';
$app_strings['LBL_ACCESSKEY_SELECT_CONTACTS_LABEL'] = 'Selecteer contactpersoon';
$app_strings['LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE'] = 'Wissen contactpersoon';
$app_strings['LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL'] = 'Wissen contactpersoon';
$app_strings['LBL_ACCESSKEY_SELECT_TEAMSET_KEY'] = 'Z';
$app_strings['LBL_ACCESSKEY_SELECT_TEAMSET_TITLE'] = 'Selecteer Team [Alt+Z] ';
$app_strings['LBL_ACCESSKEY_SELECT_TEAMSET_LABEL'] = 'Selecteer Team';
$app_strings['LBL_ACCESSKEY_CLEAR_TEAMS_TITLE'] = 'Wissen Team';
$app_strings['LBL_ACCESSKEY_CLEAR_TEAMS_LABEL'] = 'Wissen Team';
$app_strings['LBL_IMPORT_SAMPLE_FILE_TEXT'] = '\"Dit is een voorbeeld import bestand dat een voorbeeld van de te verwachten inhoud van een bestand dat klaar is voor import biedt.\" \"Het bestand is een door komma\'s gescheiden. CSV-bestand, met behulp van aanhalingstekens als de veld qualifier.\" \"De kopregel is de bovenste rij in het bestand en bevat het veld labels zoals u ze zou zien in de toepassing.\" \"Deze labels worden gebruikt voor het in kaart brengen van de gegevens in het bestand naar de velden in de applicatie.\" \"Opmerkingen:.. De database naam kan ook worden gebruikt in de kopregel Dit is handig wanneer u gebruik maakt van phpMyAdmin of een andere database tool om een geëxporteerde lijst met gegevens te importeren te bieden\" \"De kolom volgorde is niet belangrijk als de import proces overeenkomt met de gegevens naar de juiste velden op basis van de kopregel.\" \"Om dit bestand te gebruiken als een sjabloon, doet u het volgende:\" \"1 ​​Verwijder het monster rijen met gegevens\" \"2 Verwijder de hulp tekst die u nu aan het lezen.\" \"3 Voer uw eigen gegevens in de juiste rijen en.. kolommen \"\" 4. Sla het bestand op een bekende locatie op uw systeem \"\" 5. Klik op de importeren optie in het menu Acties in de toepassing en kies het bestand om te uploaden \"';
$app_strings['LBL_IMPORT_SAMPLE_FILE_TEXT'] = '\"Dit is een voorbeeld import bestand dat een voorbeeld van de te verwachten inhoud van een bestand dat klaar is voor import.\" \"Het bestand is een door komma\'s gescheiden CSV-bestand, met behulp van aanhalingstekens als de veld qualifier.\" \"De kopregel is de bovenste rij in het bestand en bevat de veld labels zoals u ze zou zien in de toepassing.\" \"Deze labels worden gebruikt voor het mappen van de gegevens in het bestand naar de velden in de applicatie.\" \"Opmerkingen:.. De database namen kunnen ook worden gebruikt in de kopregel Dit is handig wanneer u gebruik maakt van phpMyAdmin of een andere database tool om een geëxporteerde lijst met gegevens te importeren \" \"De kolom volgorde is niet belangrijk omdat het import proces de gegevens naar de juiste velden matched op basis van de kopregel.\" \"Om dit bestand te gebruiken als een sjabloon, doet u het volgende:\" \"1 ​​Verwijder de voorbeeld rijen met gegevens\" \"2 Verwijder de hulp tekst die u nu leest.\" \"3 Voer uw eigen gegevens in de juiste rijen en.. kolommen \"\" 4. Sla het bestand op een bekende locatie op uw systeem \"\" 5. Klik op de importeren optie in het menu Acties in de toepassing en kies het bestand om te uploaden \"';
$app_strings['LBL_EXPORT_ASSIGNED_USER_ID'] = 'Toegewezen aan';
$app_strings['LBL_EXPORT_ASSIGNED_USER_NAME'] = 'Toegewezen gebruiker';
$app_strings['LBL_EXPORT_REPORTS_TO_ID'] = 'Rapporteert aan ID';
$app_strings['LBL_EXPORT_FULL_NAME'] = 'Volledige naam';
$app_strings['LBL_EXPORT_TEAM_ID'] = 'Team ID';
$app_strings['LBL_EXPORT_TEAM_NAME'] = 'Teams';
$app_strings['LBL_EXPORT_TEAM_SET_ID'] = 'Team Set ID ';
$app_strings['LBL_QUICKEDIT_NODEFS_NAVIGATION'] = 'Navigeren...';
$app_strings['LBL_PENDING_NOTIFICATIONS'] = 'Notificaties';
$app_strings['LBL_ALT_ADD_TEAM_ROW'] = 'Voeg een nieuwe team regel toe';
$app_strings['LBL_ALT_REMOVE_TEAM_ROW'] = 'Verwijder team';
$app_strings['LBL_ALT_SPOT_SEARCH'] = 'Spot zoeken';
$app_strings['LBL_ALT_SORT_DESC'] = 'Sorteer aflopend';
$app_strings['LBL_ALT_SORT_ASC'] = 'Sorteer oplopend';
$app_strings['LBL_ALT_SORT'] = 'Sorteer';
$app_strings['LBL_ALT_SHOW_OPTIONS'] = 'Toon opties';
$app_strings['LBL_ALT_HIDE_OPTIONS'] = 'Verberg opties';
$app_strings['LBL_ALT_MOVE_COLUMN_LEFT'] = 'Verplaats geselecteerde item naar de rechter lijst';
$app_strings['LBL_ALT_MOVE_COLUMN_LEFT'] = 'Verplaats geselecteerde item naar de linker lijst';
$app_strings['LBL_ALT_MOVE_COLUMN_RIGHT'] = 'Verplaats geselecteerde item naar de rechter lijst';
$app_strings['LBL_ALT_MOVE_COLUMN_UP'] = 'Verplaats geselecteerde item omhoog in de getoonde lijst volgorde';
$app_strings['LBL_ALT_MOVE_COLUMN_DOWN'] = 'Verplaats geselecteerde item omlaag in de getoonde lijst volgorde';
$app_strings['LBL_ALT_INFO'] = 'Informatie';
$app_strings['MSG_DUPLICATE'] = 'De {0} record die u gaat maken creëert misschien een duplicaat van een {0} record dat al bestaat. {1} records met vergelijkbare namen worden hieronder vermeld. Klik op {1} om door te gaan het creëren van deze nieuwe {0}, of selecteer een bestaande {0} hieronder vermeld.';
$app_strings['MSG_SHOW_DUPLICATES'] = 'De {0} record die u gaat maken creëert misschien een duplicaat van een {0} record dat al bestaat. {1} records met vergelijkbare namen worden hieronder vermeld. Klik op Opslaan om door te gaan het creëren van deze nieuwe {0}, of klik op Annuleer om terug te keren naar de module zonder de {0} te creëren.';
$app_strings['LBL_EMAIL_TITLE'] = 'email adres';
$app_strings['LBL_EMAIL_OPT_TITLE'] = 'opt out email adres';
$app_strings['LBL_EMAIL_INV_TITLE'] = 'ongeldig email adres';
$app_strings['LBL_EMAIL_PRIM_TITLE'] = 'primair email adres';
$app_strings['LBL_SELECT_ALL_TITLE'] = 'Selecteer alles';
$app_strings['LBL_SELECT_THIS_ROW_TITLE'] = 'Selecteer deze rij';
$app_strings['LBL_TEAM_SELECTED_TITLE'] = 'Team geslecteerd';
$app_strings['LBL_TEAM_SELECT_AS_PRIM_TITLE'] = 'Selecteer om dit team primair te maken';
?>

