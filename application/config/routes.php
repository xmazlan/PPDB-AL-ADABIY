<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']    = 'web';
$route['404_override']          = 'web/error_not_found';
$route['pendaftaran']           = 'web/pendaftaran';
$route['logcs']                 = 'web/logcs';
$route['translate_uri_dashes']  = FALSE;
