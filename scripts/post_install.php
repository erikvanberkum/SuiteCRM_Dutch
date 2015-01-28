<?php

/**
 * Dutch Language file SuiteCRM version 7 
 * Copyright (c) 2014-2015 Hortindustrias Ltd.
 * Copyright (c) 2010-2012 Prudento (http://www.prudento.com)
 * Copyright (c) 2007-2009 Madcap BV (http://madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

/**
 * @author Wichard Noppert <vertaling@prudento.com>
 * @author Loek van Gool <l.vgool@madcap.nl>
 * @package MadDLP
 */

function post_install() {
  $file = 'config_override.php';
  $langdef = "\n//Added by Dutch Language Pack installer\n\$sugar_config['languages']['nl_NL'] = 'Nederlands (NL)';\n";
  $current = null;
  if(is_writable($file)) {
    $current = file_get_contents($file);
    if(!strstr($current, "<?php")) {
      $current .= "<?php ";
    }
  } else {
    $current .= "<?php ";
  }
  if (strstr($current, $langdef)) {
    echo "<b>Definition already exists in config_override.php. No action is needed.</b><br>";
    return;
  }
  if(is_file($file) && !is_writable($file)) {
    ?>
    Error: No permissions to write to config_override.php. Open `config_override.php` in the Sugar directory and add this code to the bottom:<br><br>
    &lt;?php $sugar_config['languages']['nl_NL'] = 'Nederlands (NL)'; ?>
    <br><br>
    <b>Without this modification the Dutch language pack will not work!</b>
    <?php
    return;
  } elseif(!is_file($file) && !is_writable(".")) {
    ?>
    Error: No permissions to create config_override.php. Create a file `config_override.php` in the Sugar directory and put this code in that file:<br><br>
    &lt;?php $sugar_config['languages']['nl_NL'] = 'Nederlands (NL)'; ?>
    <br><br>
    <b>Without this modification the Dutch language pack will not work!</b>
    <?php
    return;
  }
  $current .= $langdef;
  file_put_contents($file, $current);
  echo "<b>Succesfully added language pack to config_override.php</b><br>";
}
