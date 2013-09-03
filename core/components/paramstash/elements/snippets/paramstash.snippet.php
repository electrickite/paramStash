<?php
/**
 * paraStash snippet for paramStash extra
 * Fetches URL parameters from the parameter stash
 *
 * @package paramstash
 */

$stash = $_SESSION['paramStash'];
$output = array();

if ($separator) {
  $prefix = '?';
} else {
  $prefix = '';
}

// Get user specified parameters or get them all
if (empty($params)) {
  $paramList = array_keys($stash);
} else {
  $paramList = explode(',', str_replace(' ', '', $params));
}

foreach ($paramList as $param) {
  if ($valueOnly) {
    $output[] = $stash[$param]['value'];
  } else {
    $output[] = $param . '=' . $stash[$param]['value'];
  }
}

return $prefix . implode('&', $output);