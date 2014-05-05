<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

/**
 * Dutch Language file SuiteCRM version 7 
 * Copyright (c) 2014 Acniti (http:/www.acniti.com)
 * Copyright (c) 2007 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

$mod_strings = array (
  'LBL_NAME' => 'Taak naam',
  'LBL_EXECUTE_TIME' => 'Uitvoertijd'
  'LBL_SCHEDULER_ID' 	=> 'Scheduler',
'LBL_STATUS' 	=> 'Job Status',
'LBL_RESOLUTION' 	=> 'Result',
'LBL_MESSAGE' 	=> 'Messages',
'LBL_DATA' 	=> 'Job Data',
'LBL_REQUEUE' 	=> 'Retry on failure',
'LBL_RETRY_COUNT' 	=> 'Maximum retries',
'LBL_FAIL_COUNT' 	=> 'Failures',
'LBL_INTERVAL' 	=> 'Minimum interval between tries',
'LBL_CLIENT' 	=> 'Owning client',
'LBL_PERCENT'	=> 'Pecent complete',
// Errors
'ERR_CALL' 	=> "Cannot call function: %s",
'ERR_CURL' => "No CURL - cannot run URL jobs",
'ERR_FAILED' => "Unexpected failure, please check PHP logs and sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s in %s on line %d",
'ERR_NOUSER' => "No User ID specified for the job",
'ERR_NOSUCHUSER' => "User ID %s not found",
'ERR_JOBTYPE' 	=> "Unknown job type: %s",
'ERR_TIMEOUT' => "Forced failure on timeout",
'ERR_JOB_FAILED_VERBOSE' => 'Job %1$s (%2$s) failed in CRON run',
);