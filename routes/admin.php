<?php

use App\Http\Controllers\admin\VerificationController;

Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'auth:admin'] ,function (){

    Route::get('logout','adminController@logout');

    Route::resource('teams','TeamController');
    Route::resource('partners','partnerController');
    Route::resource('clients','ClientController');
    Route::resource('services','serviceController');
    Route::resource('companies','CompanyController');
    Route::resource('trainings','TrainingController');
    Route::get('Request/trainings','TrainingController@Join_training');

    Route::resource('certifications','CertificationController');
    Route::get('certification/request','CertificationController@cerification_request');
    Route::post('certification/request/{id}','CertificationController@cerification_request_delete')->name('certificate_request.delete');
    Route::get('add/certificate/{id?}','CertificationController@add_certificate');
    Route::post('add/certificate/','CertificationController@save_certificate')->name('saveCertificate');
    Route::get('generate/serial/{id}','CertificationController@generate_serial');
    Route::get('show/certificate/pdf/{id}','CertificationController@certificate_show')->name('certificate.show');
    Route::get('edit/certificate/{id}','CertificationController@certificate_Edit')->name('certificate.edit');
    Route::post('update/certificate/{id}','CertificationController@Update_certificate')->name('certificate.update');

    Route::get('subscribers','settingController@subscribes');

    Route::get('/certifications/search','CertificationController@search')->name('certifications.search');


    Route::resource('tags','TagController');
    Route::get('branch','BranchController@index');
    Route::post('branch','BranchController@update')->name('branch.update');
    Route::get('dashboard','adminController@dashboard')->name('homePage');

    Route::get('our/values','settingController@Our_Values');
    Route::post('our/values','settingController@Our_Values_Update')->name('ourValue.update');

    Route::get('contactus','settingController@contactus');
    Route::get('social','settingController@show_social');
    Route::get('subscribes','settingController@subscribes');
    Route::get('/accreditations/search','AccreditationController@search')->name('accreditations.search');
    Route::resource('accreditations','AccreditationController');


    Route::post('social','settingController@update_social')->name('social.update');
    Route::post('contactus','settingController@ContactUs_update')->name('contact.update');
    Route::post('delete/message','settingController@Messages_delete')->name('message.destroy');
    Route::get('messages','settingController@Messages');



    Route::get('logout','adminController@Logout')->name('Logout');
  
    Route::resource('verifications','VerificationController');
    Route::get('verifications/{id}/pdf', 'VerificationController@downloadPDF')->name('verifications.pdf');

        // Route::get('/verify', [VerificationController::class, 'index'])->name('verification.index');
        // Route::post('/verify/search', [VerificationController::class, 'search'])->name('verification.search');
        // Route::get('/verify/create', [VerificationController::class, 'create'])->name('verification.create');
        // Route::post('/verify/store', [VerificationController::class, 'store'])->name('verification.store');
});


Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'guest:admin'] ,function (){
    Route::get('login','adminController@ShowLogin');
    Route::post('login','adminController@doLogin')->name('doLogin');

});
