<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['fetch_question/(:any)'] = 'admin/Question/fetch_question/$1';

$route['student_validate'] = 'user/Student/student_validate';
$route['start_exam'] = 'user/Student/exam_description';
$route['start_question_paper'] = 'user/Student/exam_board';




$route['admin'] = 'admin/Admin/admin_login';
$route['admin_validate'] = 'admin/Admin/admin_validate';
$route['admin_panel'] = 'admin/Admin/admin_panel';
$route['admin_logout'] = 'admin/Admin/admin_logout';
$route['save_question'] = 'admin/Question/save_question';
$route['update_question'] = 'admin/Question/update_question';

$route['delete_question/(:any)/(:any)'] = 'admin/Question/delete_question/$1/$2';

$route['schedule_exam'] = 'admin/Question/schedule_exam';
$route['submit_student_answer'] = 'user/Student/save_answer';
$route['finish_exam'] = 'user/Student/finish_exam';

