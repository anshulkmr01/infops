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
$route['result/(:any)'] = 'admin/Result/result/$1';
$route['student_result/(:any)'] = 'admin/Result/student_result/$1';
$route['student_validate'] = 'user/Student/student_validate';
$route['start_exam'] = 'user/Student/exam_description';
$route['start_question_paper'] = 'user/Student/exam_board';
$route['registered_users/(:any)'] = 'admin/StudentData/registered_users/$1';
$route['view_student_data/(:any)'] = 'admin/StudentData/view_student_data/$1';
$route['remove_student_id/(:any)'] = 'admin/StudentData/remove_student_id/$1';
$route['remove_student_enroll/(:any)'] = 'admin/StudentData/remove_student_enroll/$1';
$route['remove_course_buyer/(:any)'] = 'admin/StudentData/remove_course_buyer/$1';


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
$route['examlogin'] = 'user/Student/examination';

/*Infops*/
$route['vision'] = 'Home/vision';
$route['what_we_do'] = 'Home/what_we_do';
$route['how_to_track'] = 'Home/how_to_track';
$route['disipline'] = 'Home/disipline';
$route['document_required'] = 'Home/document_required';
$route['latest_application'] = 'Home/latest_application';
$route['mock_test'] = 'Home/mock_test';
$route['contact_us'] = 'Home/contact_us';
$route['academic_training'] = 'Home/academic_training';
$route['course_content'] = 'Home/course_content';
$route['digital_marketing_traning'] = 'Home/digital_marketing_traning';
$route['imat_examination'] = 'Home/imat_examination';
$route['freelancing'] = 'Home/freelancing';
$route['band'] = 'Home/band';
$route['current_affair_mock'] = 'Home/current_affair_mock';
$route['english_mock'] = 'Home/english_mock';
$route['IELS_mock'] = 'Home/IELS_mock';
$route['reasoning_mock'] = 'Home/reasoning_mock';
$route['maths_mock'] = 'Home/maths_mock';
$route['term_condition'] = 'Home/term_condition';
$route['privacy_policy'] = 'Home/privacy_policy';
$route['registration'] = 'Home/registration';
$route['student_login'] = 'Home/student_login';
$route['document_registration_form/(:any)'] = 'Home/document_registration_form/$1';

/*End Infops*/

// Jobs
$route['authentication'] = 'job/Job/authentication';
$route['atm'] = 'job/Job/atm';
$route['auth_card_ops'] = 'job/Job/auth_card_ops';
$route['clm_agri_collection'] = 'job/Job/clm_agri_collection';
$route['operation'] = 'job/Job/operation';
$route['operation_sales_officer'] = 'job/Job/operation_sales_officer';
$route['rbb_carm'] = 'job/Job/rbb_carm';
$route['rbb_personal_banking'] = 'job/Job/rbb_personal_banking';
$route['merchaint_relationship'] = 'job/Job/merchaint_relationship';
$route['rbb_prefered_retail_manager'] = 'job/Job/rbb_prefered_retail_manager';
$route['relationship_manager'] = 'job/Job/relationship_manager';
$route['relationship_manager_pvt_bank'] = 'job/Job/relationship_manager_pvt_bank';
$route['ra_transp'] = 'job/Job/ra_transp';
$route['traning_quality_manager'] = 'job/Job/traning_quality_manager';
$route['asst_auditor'] = 'job/Job/asst_auditor';
$route['audi'] = 'job/Job/audi';
$route['collection'] = 'job/Job/collection';
$route['sales_manager_indirect_channel_payment_business'] = 'job/Job/sales_manager_indirect_channel_payment_business';
$route['area_head_forex'] = 'job/Job/area_head_forex';
$route['sales_manager_bkd'] = 'job/Job/sales_manager_bkd';
$route['sales_manager'] = 'job/Job/sales_manager';
$route['sales_mgr_crs_pytm'] = 'job/Job/sales_mgr_crs_pytm';
$route['mrm_ecom'] = 'job/Job/mrm_ecom';
$route['terriotry_head'] = 'job/Job/terriotry_head';
$route['prod_mgr_assets'] = 'job/Job/prod_mgr_assets';
$route['sap'] = 'job/Job/sap';
$route['gib_area_head'] = 'job/Job/gib_area_head';
$route['merchant_e_com'] = 'job/Job/merchant_e_com';
$route['rbb_branch_manager'] = 'job/Job/rbb_branch_manager';
// end Jobs

//Student Registration or Login

$route['register_new_student'] = 'apply_online/Student_Registrtion/register_new_student';
$route['login_student'] = 'apply_online/Student_Registrtion/login_student';
$route['student_logout'] = 'apply_online/Student_Registrtion/student_logout';
$route['submit_user_document'] = 'apply_online/Student_Registrtion/submit_user_document';
$route['payment/(:any)/(:any)'] = 'apply_online/Student_Registrtion/payment/$1/$2';
$route['payment_success'] = 'apply_online/Student_Registrtion/payment_success';
$route['payment_failure'] = 'apply_online/Student_Registrtion/payment_failure';

//Student Registration or login

$route['contact_us_email'] = 'Home/contact_us_email';