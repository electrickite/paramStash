<?php
/**
 * Properties file for paramStash snippet
 *
 * Copyright 2013 by Corey Hinshaw <hinshaw.25@osu.edu>
 * Created on 09-04-2013
 *
 * @package paramstash
 * @subpackage build
 */




$properties = array (
  'params' => 
  array (
    'name' => 'params',
    'desc' => 'prop_paramstash.snipParams_desc',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'paramstash:properties',
    'area' => '',
    'desc_trans' => 'prop_paramstash.snipParams_desc',
    'area_trans' => '',
  ),
  'separator' => 
  array (
    'name' => 'separator',
    'desc' => 'prop_paramstash.separator_desc',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => false,
    'lexicon' => 'paramstash:properties',
    'area' => '',
    'desc_trans' => 'prop_paramstash.separator_desc',
    'area_trans' => '',
  ),
  'valueOnly' => 
  array (
    'name' => 'valueOnly',
    'desc' => 'prop_paramstash.valueonly_desc',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => false,
    'lexicon' => 'paramstash:properties',
    'area' => '',
    'desc_trans' => 'prop_paramstash.valueonly_desc',
    'area_trans' => '',
  ),
);

return $properties;

