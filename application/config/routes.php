<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/******* Auth *******/
$route['login']             = 'AuthController/index';
$route['register']             = 'AuthController/index_register';
$route['activation']         = 'AuthController/index_activation';
$route['register/save']     = 'AuthController/register';
$route['login/do-login']     = 'AuthController/login';
$route['verification']         = 'AuthController/verification';
$route['generate-token']     = 'AuthController/generate_newToken';
$route['activation/save']     = 'AuthController/generate_newToken_withEmail';
$route['logout']             = 'AuthController/logout';

/******* Admin *******/
$route['admin']                     = 'AdminController/index';
$route['admin/user']                 = 'AdminController/index_user';
$route['admin/user/detail']         = 'AdminController/index_detail_user';
$route['admin/user/add']             = 'AdminController/index_add_user';
$route['admin/user/add/save']         = 'AdminController/save_user';
$route['admin/user/delete']         = 'AdminController/delete_account';
$route['admin/user/reset-password'] = 'AdminController/reset_password';
$route['admin/user/activation']     = 'AdminController/activation_account';
$route['admin/message']             = 'AdminController/index_message';
$route['admin/message/detail']         = 'AdminController/index_detail_message';

/******* User *******/
$route['user']                 = 'UserController/index';
$route['user/profile']         = 'UserController/index_profile';
$route['input_cs']             = 'UserController/inputCS';

/******* Home *******/
$route['contact/save']         = 'Home/contact_save';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
