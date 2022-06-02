<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['data'] = 'data/index';
$route['default_controller'] = 'forms/view';
$route['(:any)'] = 'forms/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
