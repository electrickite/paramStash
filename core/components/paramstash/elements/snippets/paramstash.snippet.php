<?php
/**
 * paraStash snippet for paramStash extra
 * Fetches URL parameters from the parameter stash
 *
 * @package paramstash
 */

$params = $modx->getOption('params', $scriptProperties);
$separator = $modx->getOption('separator', $scriptProperties, false);
$valueOnly = $modx->getOption('valueOnly', $scriptProperties, false);
$pre = $modx->getOption('pre', $scriptProperties, false);
$post = $modx->getOption('post', $scriptProperties, false);

$output = array();
$prefix = $separator ? '?' : '';
$prefix = $pre ? '&' : $prefix;
$suffix = $post ? '&' : '';

if ( ! empty($_SESSION['paramStash'])) {
  $stash = $_SESSION['paramStash'];

  // Get user specified parameters or get them all
  if ($params) {
    $paramList = explode(',', str_replace(' ', '', $params));
  } else {
    $paramList = array_keys($stash);
  }

  foreach ($paramList as $param) {
    $stashName = $modx->getOption('paramstash.case_sensitive') ? $param : strtolower($param);
    $paramName = $valueOnly ? '' : $param . '=';

    if (isset($stash[$stashName])) {
      $output[] = $paramName . $stash[$stashName]['value'];
    }
  }
}

$formatted = implode('&', $output);
return $formatted ? $prefix . $formatted . $suffix : '';