<?php

/**
 * Dutch Language file SuiteCRM version 7 
 * Copyright (c) 2014 Acniti (http:/www.acniti.com) 
 * Copyright (c) 2010-2012 Prudento (http://www.prudento.com) 
 * Copyright (c) 2007-2009 Madcap BV (http://madcap.nl)(no langer active)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

/**
 * @author Erik van Berkum <erik@vanberkum.me>
 * @author Wichard Noppert <w.noppert@prudento.com>
 * @author Loek van Gool <l.vgool@madcap.nl> (no langer active)
 * @package MadDLP
 */

$manifest = array(
  'name'                      => 'Nederlands (NL)',
  'type'                      => 'module',
  'is_uninstallable'          => true,
  'acceptable_sugar_versions' => array(
    'regex_matches' => array(
      0 => "6.*.*",
    ),
  ),
  'acceptable_sugar_flavors'  => array(
    'CE',
  ),
  'author'                    => 'Acniti',
  'description'               => 'Dutch language for SuiteCRM',
  'published_date'            => '2014-05-19',
  'version'                   => '7.1.110',
);

$installdefs = array(
  'id'                        => 'nl_NL',
  'copy'              => array(
    array(
      'from'                  => '<basepath>/custom/include/dutch/dutch_langpack_utils.php',
      'to'                    => 'custom/include/dutch/dutch_langpack_utils.php',
    ),
    array(
      'from'                  => '<basepath>/custom/modules/Home/AboutDLP.php',
      'to'                    => 'custom/modules/Home/AboutDLP.php',
    ),
    array(
      'from'                  => '<basepath>/custom/modules/Studio',
      'to'                    => 'custom/modules/Studio',
    ),
    array(
      'from'                  => '<basepath>/custom/include/SugarFields/Fields/Address',
      'to'                    => 'custom/include/SugarFields/Fields/Address',
    ),
    array(
      'from'                  => '<basepath>/custom/include/dutch/images',
      'to'                    => 'custom/include/dutch/images',
    ),
    array(
      'from'                  => '<basepath>/root',
      'to'                    => '.',
    ),
     array(
      'from'                  => '<basepath>/custom/Extension/application/Ext/Language',
      'to'                    => 'custom/Extension/application/Ext/Language',
   ),
   array(                                   
      'from'                  => '<basepath>/custom/Extension/modules',
      'to'                    => 'custom/Extension/modules',
    ), 
  ),
  'administration'    => array(
    array(
      'from'                  => '<basepath>/administration/dutch.php',
    ),
  ),
  'language'          => array(
    array(
      'from'                  => '<basepath>/language/Administration/nl_NL.dutch.php',
      'to_module'             => 'Administration',
      'language'              => 'nl_NL',
    ),
    array(
      'from'                  => '<basepath>/language/Administration/en_us.dutch.php',
      'to_module'             => 'Administration',
      'language'              => 'en_us',
    ),
    array(
      'from'                  => '<basepath>/custom/Extension/application/Ext/Language/nl_NL.moduleList.ext.php',
      'to_module'             => 'application',
      'language'              => 'nl_NL',
    ),
  ),
);
