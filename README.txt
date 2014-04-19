======================================================================
Dutch Language Pack by Prudento - http://www.prudento.com
======================================================================
Copyright (c) 2014
Copyright (c) 2010-2012 Prudento (http://www.prudento.com)
Copyright (c) 2009 Madcap BV (http://www.madcap.nl) (no langer active)
All rights reserved.

Permission is granted for use, copying, modification, distribution,
and distribution of modified versions of this work as long as the
above copyright notice is included.

@author Wichard Noppert <w.noppert@prudento.com>
@package MadDLP

======================================================================
INSTALLATION
======================================================================
The following (additional)directories need to be writeable during 
installation:
/themes/default/images/
/install/language/
/jscalendar/lang/

======================================================================
UPGRADING
======================================================================
Remember to uninstall the old langauge files for SugarCRM will find it
hard to replace your old translation. Log in using another language,
uninstall Dutch Language Pack, delete the file and upload and install
the new translation.

======================================================================
CONTRIBUTIONS
======================================================================
***Please submit your contributions to w.noppert@prudento.com***
***Please contribute at least:
   - one _file_ which matches all strings from a *current*  en_us file
***Please follow Dutch language rules
See also our Open Source website at: http://www.prudento.com

======================================================================
SCOPE
======================================================================
Not translated on purpose:
- Installation (only useful when Sugar feels the need of actually
  adding Dutch as a standard language)
- Administration strings (I felt it wasn't necessary)
But, feel free to translate these parts and send them to me.

======================================================================
STATUS
======================================================================
Modules---------------------------------------------------------------
	MODULE		           LANGUAGE STRINGS
  Accounts             6.4.0
  ACL                  6.4.0
  ACLActions           6.4.0
  ACLRoles             6.4.0
  Activities           6.4.0
  Administration       inherit
  Audit                6.4.0
  Bugs                 6.4.0
  Calendar             6.4.0
  Calls                6.4.0
  CampaignLog          6.4.0
  Campaigns            6.4.0
  CampaignTrackers     6.4.0
  Cases                6.4.0
  Charts               6.4.0
  Configurator         6.4.0
  Connectors           6.4.0
  Contacts             6.4.0
  Currencies           6.4.0
  Dashboard            6.4.0
  DocumentRevisions    6.4.0
  Documents            6.4.0
  DynamicFields        6.4.0
  EditCustomFields     6.4.0
  EmailAddresses       6.4.0
  EmailMan             6.4.0
  EmailMarketing       6.4.0
  Emails               6.4.0
  EmailTemplates       6.4.0
  Employees            6.4.0
  Feeds                6.4.0
  Groups               6.4.0
  Help                 6.4.0
  History              6.4.0
  Home                 6.4.0
  iFrames              6.4.0
  Import               6.4.0
  InboundEmail         6.4.0
  LabelEditor          6.4.0
  Leads                6.4.0
  MailMerge            6.4.0
  Meetings             6.4.0
  MergeRecords         6.4.0
  ModuleBuilder        6.4.0
  MySettings           6.4.0
  Notes                6.4.0
  Opportunities        6.4.0
  OptimisticLock       6.4.0
  Project              6.4.0
  ProjectTask          6.4.0
  ProspectLists        6.4.0
  Prospects            6.4.0
  Relationships        6.4.0
  Releases             6.4.0
  Roles                6.4.0
  SavedSearch          6.4.0
  Schedulers           6.4.0
  SchedulersJobs       6.4.0
  Studio               inherit
  SugarFeed            6.4.0
  Tasks                6.4.0
  Trackers             6.4.0
  UpgradeWizard        6.4.0
  UserPreferences      no strings
  Users                6.4.0
  vCals                no strings
  Versions             6.4.0
  Application-----------------------------------------------------------
  Javascript calendar:        5.5.0a
  PHPMailer:                  5.5.0a
  Application+list strings    5.5.0a
  SugarObjects--------------------------------------------------------
    assignable         5.5.0a
    team_security      5.5.0a
    basic              5.5.0a
    chance             5.5.0a
    company            5.5.0a
    issue              5.5.0a
    file               5.5.0a
    person             5.5.0a
    sale               5.5.0a
  SugarFields---------------------------------------------------------
    Address            5.5.0a
Installer              inherit

======================================================================
INSTALLATION
======================================================================
Just install as any normal SugarCRM language pack.

======================================================================
CUSTOMIZING
======================================================================
Remember to never alter the language files directly. Use the custom
directory.

======================================================================
VERSION HISTORY
======================================================================
640 build 2 - 11-2-2012
- Update Prudento translations
- corrected targets translations
- added dutch address formatting
- removed unused translation files
- using Prudento translation tool for SugarCRM	
- all new translations from 603 to 640

603a build 2 - 5-11-2010
- Start Prudento translations

- using Prudento translation tool for SugarCRM	
- all new translations from 550a to 603


550a build 16 - 23-03-2010
----------------------------------------------------------------------
- No strings but new Sugar version

550GA build 14 - 19-01-2010
----------------------------------------------------------------------
- Fixed another bug causing multiple declarations of dlp util
  functions
- Minor fixes

550GA build 13 - 05-01-2010
----------------------------------------------------------------------
- Fixed a bug causing multiple declarations of dlp util functions

550GA build 12 - 04-12-2009
----------------------------------------------------------------------
- Updated strings to 550 GA
- Removed help texts
- Minor fixes

550b2 build 11 - 06-10-2009
----------------------------------------------------------------------
- Updated strings to 550 Beta 2

520j-RC build 9 - 17-09-2009
----------------------------------------------------------------------
- Updated strings to 520j
- Fixed a bug resulting in wrongly written code to config_override.php

520i-RC build 8 - 28-08-2009
----------------------------------------------------------------------
- Added pages to alter singular and gender values of module names
- Bug fixes

520g-RC build 6 - 28-07-2009
----------------------------------------------------------------------
- Updated to 520G strings

520f-RC - 19-06-2009
----------------------------------------------------------------------
- Using variable module names
- Updated strings to 520e
- Tons of little fixes
- Changed archive type to 'module' (was 'langpack') to prevent Sugar
  from overwriting LICENSE.txt, README,txt. (Bug 27497)
- Update to 520f
- Bugfixes in installer script that creates language defintions
- Removing flag icon
- Module is uninstallable again
- Small changes to the utils file
- Change require_once() calls in modules to require(), to fix a bug
  preventing some Activities labels translations.

520c-3 - 08-04-2009
----------------------------------------------------------------------
- Updated strings to 520c

520-2 - 28-12-2008
----------------------------------------------------------------------
- Small translation error fixed in Users ("E-ail")
- Updated Prospects module to be more normalized ("Targets")
- Added UPGRADING paragraph to the LICENSE for visibility prior to
  installing

520-1 - 22-12-2008
----------------------------------------------------------------------
- New version naming system (the fix for the bug in Sugar that cuts 
  off installed module's versions is taking too long for my taste)
- Normalized a lot of strings in Campaigns and accompanying modules
- Updated to 520 strings

510b_madcap-1 - 19-11-2008
----------------------------------------------------------------------
- Strings updated to 520

510GA_madcap-2 - 04-09-2008
----------------------------------------------------------------------
- Import strings updated to 5.1 GA, strings were missing
- Updated private phone strings

510GA_madcap-1 - 04-09-2008
----------------------------------------------------------------------
- 5.1.0 GA strings added

510RC_madcap-2 - 25-08-2008
----------------------------------------------------------------------
- Translation for Config/Users added
- Added missing Home Dashlets translation and removed conflicting &
  unneeded files

510RC_madcap-1 - 20-06-2008
----------------------------------------------------------------------
- Initial release for 5.1RC

500e_madcap-3 - ??-??-2008
----------------------------------------------------------------------
- Accounts are now called "Relaties" instead of "Bedrijven"
- Some uppercase issues fixed
- INSTALLATION/UOGRADE sections added to this document

500e_madcap-2 - 29-05-2008
----------------------------------------------------------------------
- Some strings translated in Users, which can be seen outside of the
  Configuration pages

500e_madcap-1 - 16-05-2008
----------------------------------------------------------------------
- Update to 500e strings

500c_madcap-2 - 11-04-2008
----------------------------------------------------------------------
- All kinds of small fixes

500c_madcap-1 - 09-04-2008
----------------------------------------------------------------------
- Updated to Chile patch

500b_madcap-4 - 09-04-2008
----------------------------------------------------------------------
- Main language file update
- Considered 500b compatible

500b_madcap-3.1 - 09-04-2008
----------------------------------------------------------------------
- Lots and Lots of string updates

5.0.0b_madcap-3 - 28-03-2008
----------------------------------------------------------------------
- PHPMailer translation added
- Let SugarCRM handle the copying of files instead of manifest.php
- Icon added (Dutch flag)
- Newly added (500c) strings added
- Now for CE and 5.0.0* only
- Added STATUS title with current status report

500b_madcap-2 - 20-03-2008
----------------------------------------------------------------------
- Campaigns, email setup, diagnostic added

500b_madcap-2 - 19-03-2008
----------------------------------------------------------------------
- Translation for notify e-mails added
- Manifest.php minor updates

500b1 - 19-02-2008
----------------------------------------------------------------------
- Administration module just takes the en_us translation
- JS calendar issue resolved

5.0.0RCa - 05-12-2007
----------------------------------------------------------------------
- A lot of work done on the Studio and E-mail client trans

5.0.0RC - 29-11-2007
----------------------------------------------------------------------
- New version number for usage with Sugar versions
- From this point forward, no more Sugar Translation Suite (only
  used for the initial translation)
- A lot of string updates

1.0.3 - 23-11-2007
----------------------------------------------------------------------
- Fixes in Documents module
- Fixes in Opportunities module

1.0.2 - 23-11-2007
----------------------------------------------------------------------
- Jobs/Jobgroups/Candidates removed (Sugar-shipped modules only)

1.0.1 - 23-11-2007
----------------------------------------------------------------------
- ZuckerDocs translation added
- Numerous fixes
- Much more modules copied (SQL limit bug)

1.0 - 16-11-2007
- Initial release for SugarCRM 5.0RC

pre-1.0
- Boring
