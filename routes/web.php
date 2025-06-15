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

Route::get('/','siteController@homePage');
Route::get('/trainings','siteController@Trainings');
Route::get('/trainings/{id}','siteController@single_training');
Route::post('join/training','siteController@joinTraining')->name('join.training');
Route::get('certifications','siteController@certifications');
Route::get('/certifications/{id}','siteController@single_certification')->name('single_certification');
Route::get('certification','siteController@certification')->name('certificate');
Route::view('/verification', 'frontend.verification'); // to load the page
Route::get('/verify/{cert_number?}','siteController@frontendShow')->name('verify.cert');

Route::get('/verification/search','siteController@frontSearch')->name('verifications.front.search');


Route::post('join/certificate','siteController@save_request_certification')->name('join.request.certificate');
Route::get('services','siteController@show_all_services');
Route::get('services/{id}','siteController@single_service');
Route::get('services/tag/{id}','siteController@tag_services');
Route::get('about/us','siteController@about_us');
Route::get('contact/us','siteController@ContacUs');
Route::get('search','siteController@searchCertificate')->name('search.certificate');
Route::post('send/message','siteController@save_message')->name('save.message');
Route::get('/profile','siteController@profile')->middleware('auth');
Route::get('/logout','siteController@logout')->middleware('auth');
Route::get('/profile/edit','siteController@edit_profile')->middleware('auth');
Route::post('/profile/edit','siteController@update_user_info')->name('edit.profile')->middleware('auth');
Route::get('/regulation-for-logo-use-and-mark', function (){
    return view('frontend.regulation-for-logo-use-and-mark');
})->name('regulation-for-logo-use-and-mark');
Route::get('/impartiality-confidentiality-policy', function (){
    return view('frontend.impartiality-confidentiality-policy');
})->name('impartiality-confidentiality-policy');

Route::post('subscribe','siteController@subScribe')->name('join.subscribe');

Route::get('/accreditation/{id}', 'siteController@single_accreditation')->name('single_accreditation');

Route::view('/training_process_page', 'frontend.training_process_page')->name('training_process_page');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test-mail', function () {
    try {
        Mail::raw('This is a test email from Laravel.', function ($message) {
            $message->to('ahmed12348.com@gmail.com')
                    ->subject('Test Mail from Laravel');
        });

        return 'Mail sent successfully!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});