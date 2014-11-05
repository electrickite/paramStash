<?php
/**
 * paraStash plugin for paramStash extra
 * Stores URL parameters in the stash and purges old entries
 *
 * @package paramstash
 */

// If our session doesn't have a parameter stash, create one
if ( !isset($_SESSION['paramStash']) || !is_array($_SESSION['paramStash']) ) {
  $_SESSION['paramStash'] = array();
}
$stash =& $_SESSION['paramStash'];

// Remove the q parameter used by MODX
$params = $_GET;
unset($params[$modx->getOption('request_param_alias')]);

// Clean out expired parameters
$lifetime = $modx->getOption('paramstash.lifetime');

if ($lifetime) {
  $expirationTime = time() - $lifetime;
  foreach ($stash as $name => $data) {
    if ($data['timestamp'] < $expirationTime) {
      unset($stash[$name]);
    }
  }
}

// Get parameters to stash from system setting
$paramSetting = $modx->getOption('paramstash.params');
if (empty($paramSetting)) {
  $allowedParams = array_keys($params);
} else {
  $allowedParams = explode(',', str_replace(' ', '', $paramSetting));
}

// Stash URL parameters
foreach ($params as $name => $value) {
  if ( ! $modx->getOption('paramstash.case_sensitive')) $name = strtolower($name);
  $value = urlencode($value);

  if (
    in_array($name, $allowedParams) &&
    (empty($stash[$name]) || $stash[$name]['value'] != $value)
  ) {
    $stash[$name] = array(
      'value' => $value,
      'timestamp' => time(),
    );
  }
}