<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "auth";
$route['404_override'] = '';
$route['admin'] = "admin/auth";
$route['auth/login'] = "admin/auth/login";
$route['category_table/(:any)'] = "admin/category_table/$1";
$route['badge/(:any)'] = "admin/badge/$1";
$route['preparation/(:any)'] = "admin/preparation/$1";
$route['sorter_list_box/(:any)'] = "admin/sorter_list_box/$1";
$route['control_tournament/(:any)/(:any)'] = "admin/control_tournament/$1/$2";
$route['sortition/(:any)'] = "admin/sortition/$1";
$route['analysis_result/(:any)'] = "admin/analysis_result/$1";
$route['category_table/(:any)/(:num)/(:num)'] = "admin/category_table/$1/$2/$3";


/* End of file routes.php */
/* Location: ./application/config/routes.php */