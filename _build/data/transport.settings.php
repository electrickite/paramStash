<?php
/**
 * systemSettings transport file for paramStash extra
 *
 * Copyright 2013 by Corey Hinshaw <hinshaw.25@osu.edu>
 * Created on 09-03-2013
 *
 * @package paramstash
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array (
  'key' => 'paramstash.lifetime',
  'name' => 'Stash lifetime',
  'description' => 'The number of seconds a URL parameter should be kept in the parameter stash. Leaving the setting blank means cached parameters will never expire.',
  'namespace' => 'paramstash',
  'xtype' => 'textfield',
  'value' => '3600',
  'area' => 'paramstash',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array (
  'key' => 'paramstash.params',
  'name' => 'Stash parameters',
  'description' => 'Comma separated list of URL parameters to place in the parameter stash. If not set, all parameters will be added.',
  'namespace' => 'paramstash',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'paramstash',
), '', true, true);
return $systemSettings;
