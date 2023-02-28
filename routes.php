<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Prospect';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index']='Prospect/index';
$route['Prospect/store']= 'Prospect/store';

$route['Prospect/edit/(:any)']='Prospect/edit/$1';
$route['Prospect/update/(:any)']='Prospect/update/$1';

/* $route['update']='Prospect/update'; */