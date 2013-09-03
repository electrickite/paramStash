<?php
/**
 * Properties file for paramStash snippet
 *
 * Copyright 2013 by Corey Hinshaw <hinshaw.25@osu.edu>
 * Created on 09-03-2013
 *
 * @package paramstash
 * @subpackage build
 */




$properties = array (
  'params' => 
  array (
    'name' => 'params',
    'desc' => 'Comma separated list of parameters to fetch from the stash. Defaults to all parameters.',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => NULL,
    'area' => '',
    'desc_trans' => 'Comma separated list of parameters to fetch from the stash. Defaults to all parameters.',
    'area_trans' => '',
  ),
  'separator' => 
  array (
    'name' => 'separator',
    'desc' => 'Prefix the output with a URL query string separator.',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => false,
    'lexicon' => NULL,
    'area' => '',
    'desc_trans' => 'Prefix the output with a URL query string separator.',
    'area_trans' => '',
  ),
  'valueOnly' => 
  array (
    'name' => 'valueOnly',
    'desc' => 'Return only the values of each parameter, not the names.',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => false,
    'lexicon' => NULL,
    'area' => '',
    'desc_trans' => 'Return only the values of each parameter, not the names.',
    'area_trans' => '',
  ),
);

return $properties;

