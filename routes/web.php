<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@index')->name('front.home');
Auth::routes();

Route::middleware(['admin'])->prefix('admin')->group(function(){

    Route::get('dashboard', 'AdminController@dashboard')->name('admDashboard');
    //category
    Route::get('category', 'AdminController@category')->name('admin.category');
    Route::post('store-category', 'AdminController@store_category')->name('admin.store_category');
    Route::post('update-category', 'AdminController@update_category')->name('admin.update_category');
    Route::delete('delete-category/{id}', 'AdminController@delete_category')->name('admin.delete_category');
   //sub category
    Route::get('sub-category', 'AdminController@sub_category')->name('admin.sub_category');
    Route::post('store-sub-category', 'AdminController@store_sub_category')->name('admin.store_sub_category');
    Route::get('edit-sub-category/{id}', 'AdminController@edit_sub_category')->name('admin.edit_sub_category');
    Route::post('update-sub-category/{id}', 'AdminController@update_sub_category')->name('admin.update_sub_category');
    Route::delete('delete-sub-category/{id}', 'AdminController@delete_sub_category')->name('admin.delete_sub_category');
    //job
    Route::get('job-list','AdminController@joblist')->name('admin.joblist');
    Route::post('job-approve/{id}','AdminController@approve_job')->name('admin.approve_job');
    Route::delete('job-delete/{id}','AdminController@delete_job')->name('admin.delete_job');
    Route::get('job-show/{id}','AdminController@JobShow')->name('admin.JobShow');
    Route::get('job-applied','AdminController@appliedjob')->name('admin.appliedjob');
    Route::get('view-resume/{id}','AdminController@viewResume')->name('admin.viewResume');
    Route::delete('applied-job-delete/{id}','AdminController@applied_delete_job')->name('admin.applied_delete_job');
    //company
    Route::get('company-list','AdminController@company_list')->name('admin.company_list');
    Route::delete('company-delete/{id}','AdminController@company_delete')->name('admin.company_delete');
    //company
    Route::get('employee-list','AdminController@employee_list')->name('admin.employee_list');
    Route::delete('employee-delete/{id}','AdminController@employee_delete')->name('admin.employee_delete');

});
Route::middleware(['employee'])->prefix('employee')->group(function(){
    Route::get('dashboard', 'EmployeeController@dashboard')->name('empDashboard');
    Route::get('profile','EmployeeController@showProfile')->name('empProfile');
    Route::post('profile','EmployeeController@updateProfile')->name('empProfileUpdate');
    Route::get('password','EmployeeController@showPassword')->name('empPass');
    Route::post('password','EmployeeController@updatePassword')->name('empPassUpdate');
    Route::post('edit-resume-store','EmployeeController@updateResume')->name('updateEmpResume');
    Route::get('edit-resume/training/{id}/delete','EmployeeController@deleteTrainingResume')->name('delEmpResume');
    Route::get('edit-resume/reference/{id}/delete','EmployeeController@deleteReferenceResume')->name('delRefResume');
    Route::get('upload-resume','EmployeeController@showUploadResume')->name('uploadResume');
    Route::post('upload-resume','EmployeeController@uploadResume')->name('uploadTheResume');
    Route::get('view-resume','EmployeeController@viewResume')->name('viewResume');
    Route::post('view-invitation/{id}','EmployeeController@viewInvitation')->name('viewInvitation');
    Route::get('following employer','EmployeeController@followedemployee')->name('followedemployee');
    //j
    Route::get('view-resume','EmployeeController@viewResum')->name('viewResum');
    Route::get('apply-job/{id}','EmployeeController@showApplyJob')->name('showApplyJob');
    Route::post('apply-job/{id}','EmployeeController@applyJob')->name('applyJob');
    Route::get('online-application','EmployeeController@showOnlineApplication')->name('empOnlineApp');
    Route::get('delete-application/{id}','EmployeeController@deleteApplication')->name('deleteApplication');
    Route::get('Inviation-job','EmployeeController@invitation_job')->name('employe.invitation');
    Route::get('company-Inviation','EmployeeController@company_invitation')->name('employe.company-invitation');
    //j
    Route::get('edit-resume','EmployeeController@edit_Resume')->name('edit_Resume');
    Route::get('email-resume','EmployeeController@email_Resume')->name('employee.email_Resume');
});
Route::middleware(['company'])->prefix('company')->group(function(){
    Route::get('dashboard', 'CompanyController@dashboard')->name('cmpDashboard');
    Route::get('post-job', 'CompanyController@showPostJob')->name('postJob');
    Route::post('post-job', 'CompanyController@postJob')->name('postJobData');
    Route::get('post-job/{id}', 'CompanyController@postJobShow')->name('postJobShow');
    Route::get('post-job-edit/{id}', 'CompanyController@editpost')->name('editpost');
    Route::post('post-job-edit/{id}', 'CompanyController@postJobEdit')->name('postJobEdit');
    Route::get('post-job-publish/{id}', 'CompanyController@postJobpublish')->name('postJobpublish');
    Route::get('profile','CompanyController@showProfile')->name('profile');
    Route::post('generalProfile','CompanyController@updateGeneralProfile')->name('generalProfileUpdate');
    Route::post('companyProfile','CompanyController@updateCompanyProfile')->name('companyProfileUpdate');
    Route::get('password','CompanyController@showPassword')->name('companyPassword');
    Route::post('password','CompanyController@changePassword')->name('companyPasswordUpdate');
    Route::get('show-applicant','CompanyController@applicantSho')->name('Em_applican');
    Route::get('view-resume/{id}','CompanyController@viewResume')->name('company.viewResume');
    Route::post('applicant-invterview/{id}','CompanyController@Applicant_invterview')->name('company.Applicant_invterview');
    Route::post('applicant-invites/{id}','CompanyController@Applicant_invites')->name('company.Applicant_invites');
    Route::post('applicant-search','CompanyController@emplyee_search')->name('company.emplyee_search');
    Route::get('cv-lookup', 'CompanyController@cv_lookup')->name('company.cv_lookup');
    Route::get('all-cv-list', 'CompanyController@total_cv')->name('company.total_cv');
    Route::get('employee-resume/{id}','CompanyController@CompanyResume')->name('company.CompanyResume');
    Route::get('cv-view', 'CompanyController@cv_view')->name('company.cv_view');
    Route::post('invitation', 'CompanyController@invitation')->name('company.jobinvitation');
    Route::get('company/message/{id}', 'CompanyController@message')->name('company.message');
});
Route::middleware(['modifier'])->prefix('modifier')->group(function(){
    Route::get('dashboard', 'ModifierController@dashboard')->name('modDashboard');
});

/*
 *All Public Route Lists
 */
//company login route
Route::get('/company-login','Auth\LoginController@showCompanyLogin');
Route::get('/company-register','Auth\RegisterController@showCompany');
Route::post('/company-register','Auth\RegisterController@regCompany');
Route::get('/employee-register','Auth\RegisterController@showEmployee');
Route::post('/employee-register','Auth\RegisterController@registerEmployee');
Route::get('/company-package','PagesController@companyPackage');
Route::get('/company-package/basic-package','PagesController@basicPackage');
Route::get('company-package/ad-package','PagesController@adPackage');
Route::get('company-package/service-package','PagesController@servicePackage');
Route::get('company-package/help','PagesController@help');


Route::get('/home', 'HomeController@index')->name('home');

//search routes
Route::get('/search','PagesController@showSearchPage');
Route::post('/search','PagesController@searchFromHome');
Route::get('ajaxsearch/','PagesController@ajaxSearch');
//end search routes

Route::get('/company/view/{id}','PagesController@showCompany');
Route::get('/jobapply/view/{id}','PagesController@showJob')->name('view.jobapply');

Route::get('company/login',function (){
    return view('home.companyLogin');
});

Route::get('company/register',function (){
    return view('home.companyRegister');
});

//company side views
Route::get('company/home',function (){
    return view('company.home');
});
/* Route::get('company/applicant',function (){
    return view('company.applicant');
}); */
Route::get('company/message',function (){
    return view('company.companyMessage');
});
Route::get('company/pay',function (){
    return view('company.exPay');
});
Route::get('company/cv',function (){
    return view('company.exploreCv');
});
Route::get('company/order',function (){
    return view('company.orderForm');
});
Route::get('company/postjob',function (){
    return view('company.postjob');
});

//---------------------------------
//employee
Route::get('employee/home',function (){
    return view('employee.home');
});
Route::get('employee/test',function (){
    return view('employee.skillTest');
});
Route::get('employee/shortlist',function (){
    return view('employee.shortlist');
});
Route::get('employee/changePass',function (){
    return view('employee.changePass');
});
Route::get('employee/companyView',function (){
    return view('employee.companyView');
});
Route::get('employee/onlineApplication',function (){
    return view('employee.onlineApplication');
});
Route::get('employee/editProfile',function (){
    return view('employee.editProfile');
});
Route::get('employee/editResume',function (){
    return view('employee.editResume');
});
Route::get('employee/emailResume',function (){
    return view('employee.emailResume');
});
Route::get('employee/forgetPass',function (){
    return view('employee.forgetPass');
});
Route::get('employee/invitation',function (){
    return view('employee.companyInvitaiton');
});
Route::get('employee/application',function (){
    return view('employee.sendApplication');
});
Route::get('employee/resume',function (){
    return view('employee.uploadResume');
});
Route::get('employee/viewResume',function (){
    return view('employee.viewResume');
});
//APi routes - -----------
Route::middleware('cors')->prefix('countryApi')->group(function(){
    Route::get('country','Api\CountryApiController@country');
    Route::get('state/{name}','Api\CountryApiController@state');
    Route::get('city/{name}','Api\CountryApiController@city');
    //sub category finder
    Route::get('category','Api\CountryApiController@category');
    Route::get('sub-category/{name}','Api\CountryApiController@subCategory');
});

