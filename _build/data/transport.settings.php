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
  'key' => 'paramstash.params',
  'value' => '',
  'xtype' => 'textfield',
  'namespace' => 'paramstash',
  'area' => '',
  'name' => 'Stash parameters',
  'description' => 'Comma separated list of URL parameters to place in the parameter stash. If not set, all parameters will be added.',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array (
  'key' => 'paramstash.lifetime',
  'value' => '3600',
  'xtype' => 'textfield',
  'namespace' => 'paramstash',
  'area' => '',
  'name' => 'Stash lifetime',
  'description' => 'The number of seconds a URL parameter should be kept in the parameter stash. Leaving the setting blank means cached parameters will never expire.',
), '', true, true);
return $systemSettings;
