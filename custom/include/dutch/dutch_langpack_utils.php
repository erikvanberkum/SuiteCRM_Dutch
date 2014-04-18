<?php

/**
 * Copyright (c) 2007-2009 Madcap BV (http://madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

/**
 * @author Loek van Gool <l.vgool@madcap.nl>
 * @package DutchLanguagePack
 */

/**
 * Update a language array.
 *
 * Match the keys to moduleList or moduleListSingular and update values.
 *
 * @param array $array The target
 * @param array $source The mother
 * @return void
 */
if(!function_exists('dlp_update')) {
  function dlp_update($array, $source) {
    $val = null;
    foreach($array AS $key=>&$val) {
      if(!empty($source[$key])) {
        // The key is known in the source array, overwrite
        $val = $source[$key];
      }
    }
    return $array;
  }
}

/**
 * Return a module string respecting moduleList(-Singular).
 *
 * Types of output supported:
 * - "module name": Just the module name
 * - "new": A string usable as create link (nieuw/nieuwe)
 * - "this": Translation of "This $module" (dit/deze)
 *
 * @param string $module The module name
 * @param boolean $lc Lowercase output switch
 * @param boolean $singular Singular output switch
 * @param string $type Type of string required
 */
if(!function_exists('dpl_mod_get')) {
  function dpl_mod_get($module, $lc, $singular, $type = "module name") {
    global $app_list_strings;

    if(empty($module)) {
      return false;
    }
    $res = null;

    if(!is_array($app_list_strings['moduleListGender'])) {
      $app_list_strings = return_app_list_strings_language_madcap($GLOBALS['current_language']);
    }

    switch ($type) {

      case "module name":
        if($singular) {
          //As long as Bug #31110 is here, keep this
          $app_list_strings = return_app_list_strings_language_madcap($GLOBALS['current_language']);
          $res = $app_list_strings['moduleListSingular'][$module];
        } else {
          $res = $app_list_strings['moduleList'][$module];
        }

        if(empty($res)) {
          $s = ($singular) ? "singular" : "plural";
          //echo __METHOD__.": No ".$s." translation for ".$module."<br>";
          $GLOBALS['log']->error(__METHOD__.": No ".$s." translation for ".$module);
          //echo "<pre>";print_r($app_list_strings);echo "</pre>";
          $res = $module."(!)";
        }
        break;

      case "new":
        switch($app_list_strings['moduleListGender'][$module]) {
          case "het":
            $res = "Nieuw ".dpl_mod_get($module, true, $singular, "module name");
            break;
          default:
            $res = "Nieuwe ".dpl_mod_get($module, true, $singular, "module name");
            break;
        }
        if($lc === true) {
          return strtolower($res);
        }
        return $res;

      case "this":
        switch($app_list_strings['moduleListGender'][$module]) {
          case "het":
            $res = "Dit ".dpl_mod_get($module, true, $singular, "module name");
            break;
          default:
            $res = "Deze ".dpl_mod_get($module, true, $singular, "module name");
            break;
        }
        if($lc === true) {
          return strtolower($res);
        }
        return $res;

      case "double":
        switch($app_list_strings['moduleListGender'][$module]) {
          case "het":
            $res = "Dubbel ".dpl_mod_get($module, true, $singular, "module name");
            break;
          default:
            $res = "Dubbele ".dpl_mod_get($module, true, $singular, "module name");
            break;
        }
        if($lc === true) {
          return strtolower($res);
        }
        return $res;

      case "suffix":
        switch($app_list_strings['moduleListGender'][$module]) {
          case "het":
            $res = " ".dpl_mod_get($module, true, $singular, "module name");
            break;
          default:
            $res = "e ".dpl_mod_get($module, true, $singular, "module name");
            break;
        }
        if($lc === true) {
          return strtolower($res);
        }
        return $res;

      default:
        return false;
    }
    if($lc === true) {
      return strtolower($res);
    }
    return $res;
  }
}

/**
 * Return app_list_strings for a language
 *
 * Copied from utils.php w/ bugfix ("THE CHANGES")
 *
 * @param string $language
 * @param boolean $nocustomincludelanguage Do we include ./custom/include/language/?
 * @return array
 */
if(!function_exists('return_app_list_strings_language_madcap')) {
  function return_app_list_strings_language_madcap($language, $usecustomincludelanguage = true) {
    global $app_list_strings;
    global $sugar_config;

    $default_language = $sugar_config['default_language'];
    $temp_app_list_strings = $app_list_strings;
    $language_used = $language;

    include("include/language/en_us.lang.php");

    $en_app_list_strings = array();
    if($language_used != $default_language){
        require("include/language/$default_language.lang.php");

          if(file_exists("include/language/$default_language.lang.override.php")) {
              include("include/language/$default_language.lang.override.php");
          }

          if(file_exists("include/language/$default_language.lang.php.override")) {
              include("include/language/$default_language.lang.php.override");
          }

        $en_app_list_strings = $app_list_strings;
    }

    include("include/language/$language.lang.php");

    if(file_exists("include/language/$language.lang.override.php")) {
      include("include/language/$language.lang.override.php");
    }

    if(file_exists("include/language/$language.lang.php.override")) {
      include("include/language/$language.lang.php.override");
    }

    // cn: bug 6048 - merge en_us with requested language
      if (!empty($en_app_list_strings)) {
          $app_list_strings = sugarArrayMerge($en_app_list_strings, $app_list_strings);
      }

      if (file_exists("custom/application/Ext/Language/en_us.lang.ext.php")){
      $app_list_strings =  madcap_mergeCustomAppListStrings("custom/application/Ext/Language/en_us.lang.ext.php" , $app_list_strings) ;
     }

    if($language_used != $default_language){
         if(file_exists("custom/application/Ext/Language/$default_language.lang.ext.php")) {
            $app_list_strings =  madcap_mergeCustomAppListStrings("custom/application/Ext/Language/$default_language.lang.ext.php" , $app_list_strings);
              $GLOBALS['log']->info("Found extended language file: $default_language.lang.ext.php");
          }
          if($usecustomincludelanguage && file_exists("custom/include/language/$default_language.lang.php")) {
              include("custom/include/language/$default_language.lang.php");
              $GLOBALS['log']->info("Found custom language file: $default_language.lang.php");
          }
      }

    if(file_exists("custom/application/Ext/Language/$language.lang.ext.php")) {
      $app_list_strings = madcap_mergeCustomAppListStrings("custom/application/Ext/Language/$language.lang.ext.php" , $app_list_strings);
       $GLOBALS['log']->info("Found extended language file: $language.lang.ext.php");
    }

    if($usecustomincludelanguage && file_exists("custom/include/language/$language.lang.php")) {
      include("custom/include/language/$language.lang.php");
      $GLOBALS['log']->info("Found custom language file: $language.lang.php");
    }

    if(!isset($app_list_strings)) {
      $GLOBALS['log']->warn("Unable to find the application language file for language: ".$language);
      $language_used = $default_language;
      $app_list_strings = $en_app_list_strings;
    }

    if(!isset($app_list_strings)) {
      $GLOBALS['log']->fatal("Unable to load the application language file for the selected language($language) or the default language($default_language)");
      return null;
    }

    $return_value = $app_list_strings;
    $app_list_strings = $temp_app_list_strings;

    return $return_value;
  }
}

/**
* The dropdown items in custom language files is $app_list_strings['$key']['$second_key'] = $value not
* $GLOBALS['app_list_strings']['$key'] = $value, so we have to delete the original ones in app_list_strings and relace it with the custom ones.
 * @param file string the language that you want include,
 * @param app_list_strings array the golbal strings
 * @return array
 */
 //jchi 25347
if(!function_exists('madcap_mergeCustomAppListStrings')) {
  function madcap_mergeCustomAppListStrings($file , $app_list_strings){
    $app_list_strings_original = $app_list_strings;
    unset($app_list_strings);
    include($file);
    if(!isset($app_list_strings) || !is_array($app_list_strings)){
      return $app_list_strings_original;
    }
    //Bug 25347: We should not merge custom dropdown fields unless they relate to parent fields or the module list.
    foreach($app_list_strings as $key=>$value)
    {
      //CHANGED
      $exemptDropdowns = array("moduleList", "moduleListGender", "moduleListSingular", "parent_type_display", "record_type_display", "record_type_display_notes");
      if (!in_array($key, $exemptDropdowns) && array_key_exists($key, $app_list_strings_original))
      {
          unset($app_list_strings_original["$key"]);
      }
     }
     $app_list_strings = sugarArrayMergeRecursive($app_list_strings_original , $app_list_strings);
     return $app_list_strings;
  }
}
