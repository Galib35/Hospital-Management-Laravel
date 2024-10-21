<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Books2Controller;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DoctorsController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){

    return view('welcome');

});

//Route::get('testing','DcotorsController@indexx');
Route::get('testing','App\Http\Controllers\DcotorsController@indexx');

//Route::get('testing2','App\Http\Controllers\DcotorsController@hi');

Route::get('/service/{id}', 'App\Http\Controllers\ServiceController@show')->name('service');

Route::get('testing2', 'App\Http\Controllers\DcotorsController@showBookingForm');

//Route::get('/testing2', 'App\Http\Controllers\BooksController@showBookingForm');

//Route::post('/testing2', 'App\Http\Controllers\BooksController@submitForm');
// Route::post('/testing2', 'App\Http\Controllers\BooksController@submitForm')->name('submit.form');

// route for index

Route::view('/index','index')->name('index');
Route::get('/index',[BooksController::class,'showBookingForm']);
Route::post('/index',[BooksController::class,'submitForm'])->name('index');



//  route for doctors

//Route::view('/doctors','doctors')->name('doctors');

Route::get('/doctors', [DoctorsController::class, 'showDoctor'])->name('doctors');
Route::post('/doctors', [DoctorsController::class, 'submitForm'])->name('doctors');


//Route::view('/book','book')->name('book');
Route::get('/book',[Books2Controller::class,'showBookingForm'])->name('book');
Route::post('/book',[Books2Controller::class,'submitForm']);


// route for blogs

// Route::get('/blogs', function () {
//     // Your logic for the blogs route
//     return view('blogs');
// })->name('blogs');


Route::get('/blogs', [BlogController::class,'show'])->name('blogs');



// Admin


// Admin Login

// Route::get('/admin_login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');

// Route::post('/admin_login', [AdminController::class, 'login'])->name('admin.login.submit');

// Route::post('/create_account', [AdminController::class, 'createAccountPage'])->name('admin.create_account.button');


// Route::get('/create_account', [AdminController::class, 'showCreateAccountForm'])->name('admin.createAccount');
// Route::post('/create_account', [AdminController::class, 'createAccount'])->name('admin.createAccount');

// Route::get('/admin_login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
// Route::post('/admin_login', [AdminController::class, 'login'])->name('admin.login.submit');
// Route::post('/admin_create_account', [AdminController::class, 'showCreateAccountForm'])->name('admin.create_account.form');
// Route::post('/admin_create_account', [AdminController::class, 'createAccount'])->name('admin.create_account.submit');

Route::get('/admin_login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin_login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin_create_account', [AdminController::class, 'showCreateAccountForm'])->name('admin.create_account.form');
Route::post('/admin_create_account', [AdminController::class, 'createAccount'])->name('admin.create_account.submit');


 Route::get('/admin_dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
Route::get('/admin_dashboard', [AdminController::class, 'adminDashboardCount'])->name('admin.dashboard.count');


Route::get('/admin_dashboard/total_doctor', [AdminController::class, 'showTotalDoctorDashboard'])->name('admin.dashboard.doctor');
Route::get('/admin_dashboard/total_doctor', [AdminController::class, 'showTotalDoctorDashboard2'])->name('admin.dashboard.doctor');

Route::get('/admin_dashboard/job_request', [AdminController::class, 'showDoctorJobRequestDashboard'])->name('admin.dashboard.jobRequest');
//Route::get('/admin_dashboard/job_request', [AdminController::class, 'showTotalDoctorDashboard2'])->name('admin.dashboard.doctor2');
//Route::post('/update_status', [AdminController::class, 'showDoctorJobRequestUpdateStatus'])->name('admin.update_status');
//Route::delete('/admin_dashboard/job_request/{id}/{status}', [AdminController::class, 'showDoctorJobRequestUpdateStatus'])->name('admin.update_status');
Route::post('/update_status/{id}/{status}', [AdminController::class, 'showDoctorJobRequestUpdateStatus'])->name('updateStatus');



Route::get('/admin_dashboard/patient_appointment', [AdminController::class, 'showPatientAppointmentDashboard'])->name('admin.dashboard.patient_appointment');
Route::get('/admin_dashboard/patient_appointment', [AdminController::class, 'collectPatientAppointmentDashboard'])->name('admin.dashboard.patient_appointment');


Route::get('/admin_dashboard/patient_record', [AdminController::class, 'showPreviousPatientInfo'])->name('admin.previous_patient.info');


Route::get('/admin_dashboard/appointment_list', [AdminController::class, 'showAppointmentListInfo'])->name('admin.appointment_list.info');


Route::get('admin_dashboard/admin_info',[AdminController::class , 'showAdminInfo'])->name('admin.info');
Route::get('admin_dashboard/admin_info/{id}',[AdminController::class , 'showAdminInfoDelete'])->name('admin.info.delete');


Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');


Route::get('/doctor_login', [AdminController::class, 'showDoctorLoginForm'])->name('doctor.login.form');
Route::post('/doctor_login', [AdminController::class, 'doctorLogin'])->name('doctor.login.submit');
Route::get('/doctor_create_account', [AdminController::class, 'showDoctorCreateAccountForm'])->name('doctor.create_account.form');
Route::post('/doctor_create_account', [AdminController::class, 'doctorCreateAccount'])->name('doctor.create_account.submit');


Route::get('/doctor_dashboard', [AdminController::class, 'showDoctorDashboard'])->name('doctor.dashboard');
// Route::get('/doctor_dashboard', [AdminController::class, 'showDoctorDashboardCurrent'])->name('doctor.dashboard');
// Route::get('/doctor_dashboard', [AdminController::class, 'showDoctorCurrentPatient'])->name('doctor.dashboard');
// Route::get('/doctor_dashboard', [AdminController::class, 'showDoctorPreviousPatient'])->name('doctor.dashboard');




Route::post('/update_status_doctor_dashboard/{id}/{status}', [AdminController::class, 'showUncheckedPatient'])->name('doctor.updateStatus');



Route::get('/doctor_dashboard/previous_patient',[AdminController::class, 'showDoctorPreviousPatient'])->name('doctor.previous_patient');
Route::get('/doctor/logout', [AdminController::class, 'doctorLogout'])->name('doctor.logout');
;


