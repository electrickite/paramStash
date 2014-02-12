<?php
/**
 * paraStash snippet for paramStash extra
 * Fetches URL parameters from the parameter stash
 *
 * @package paramstash
 */

$output = array();
$prefix = !empty($separator) ? '?' : '';
$prefix = !empty($pre) ? '&' : $prefix;
$suffix = !empty($post) ? '&' : '';

if ( ! empty($_SESSION['paramStash'])) {
  $stash = $_SESSION['paramStash'];

  // Get user specified parameters or get them all
  if (empty($params)) {
    $paramList = array_keys($stash);
  } else {
    $paramList = explode(',', str_replace(' ', '', $params));
  }

  foreach ($paramList as $param) {
    $paramName = !empty($valueOnly) ? '' : $param . '=';
    if (isset($stash[$param])) {
      $output[] = $paramName . $stash[$param]['value'];
    }
  }
}

$formatted = implode('&', $output);
return $formatted ? $prefix . $formatted . $suffix : '';
