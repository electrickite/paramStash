<?php
// If our session doesn't have a parameter stash, create one
if ( ! is_array($_SESSION['paramStash'])) {
  $_SESSION['paramStash'] = array();
}
$stash =& $_SESSION['paramStash'];

// Remove the q parameter used by MODX
$params = $_GET;
unset($params['q']);

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