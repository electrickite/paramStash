<?php
/**
 * en default topic lexicon file for paramStash extra
 *
 * @package paramstash
 */

/**
 * Description
 * -----------
 * en default topic lexicon strings
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package paramstash
 **/



/* Used in transport.settings.php */
$_lang['setting_paramstash.case_sensitive'] = 'Case sensitive';
$_lang['setting_paramstash.case_sensitive_desc'] = 'Determines if parameter names are case sensitive. If true, Foo and foo will be treated as distinct parameters';
$_lang['setting_paramstash.lifetime'] = 'Stash lifetime';
$_lang['setting_paramstash.lifetime_desc'] = 'The number of seconds a URL parameter should be kept in the parameter stash. Leaving the setting blank means cached parameters will never expire.';
$_lang['setting_paramstash.params'] = 'Stash parameters';
$_lang['setting_paramstash.params_desc'] = 'Comma separated list of URL parameters to place in the parameter stash. If not set, all parameters will be added.';