<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main/login';
$route['log'] = 'main/enter';
$route['(:any)'] = '/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
