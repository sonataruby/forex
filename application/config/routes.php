<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['shadown.html'] = 'home/shadown';
$route['events.html'] = 'home/events';
$route['buy.html'] = 'home/buy';
$route['singal.html'] = 'home/singal';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
