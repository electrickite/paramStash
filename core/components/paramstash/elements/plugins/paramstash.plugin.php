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
foreach ($stash as $name => $data) {
  if ($data['timestamp'] < time()-30) {
    unset($stash[$name]);
  }
}

// Stash URL parameters
foreach ($params as $name => $value) {
  $value = urlencode($value);
  if (empty($stash[$name]) || $stash[$name]['value'] != $value) {
    $stash[$name] = array(
      'value' => $value,
      'timestamp' => time(),
    );
  }
}