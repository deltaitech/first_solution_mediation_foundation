<?php

use App\Http\Controllers\Dashboard\ConsultationController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::prefix('dashboard')->group(function () {

        //admin login
        Route::get('login', 'Auth\AuthController@login')->name('dashboard.login')->middleware('guest:admin');
        Route::post('authenticate', 'Auth\AuthController@authenticate')->name('authenticate');

        Route::middleware(['auth:admin'])->group(function () {
            Route::get('/', 'Auth\AuthController@home')->name('admin.home');
            Route::get('logout', 'Auth\AuthController@logout')->name('admin.logout');


            //role routes
            Route::resource('roles', 'RoleController');

            //admin users routes
            Route::resource('admin-users', 'AdminUserController');
            Route::get('my-profile', 'AdminUserController@profile')->name('admin.profile');
            Route::put('my-profile/{id}/update', 'AdminUserController@updateProfile')->name('admin.profile.update');

            //slider routes
            Route::resource('sliders', 'SliderController');

            //features routes
            Route::resource('features', 'FeatureController');

            //product routes
            Route::resource('services', 'ServiceController');

            //partners routes
            Route::resource('partners', 'PartnerController');

            //pages routes
            Route::resource('pages', 'PageController');

            //contact routes
            Route::resource('contacts', 'SettingContactController');

            //setting routes
            Route::resource('settings', 'SettingController');

            //contact_requests routes
            Route::resource('contact_requests', 'ContactRequestController');
            Route::get('contact_requests/{contact_request}/reply', 'ContactRequestController@reply')->name('contact_requests.reply');
            Route::post('contact_requests/{contact_request}/send_mail', 'ContactRequestController@send_mail')->name('contact_requests.send_mail');

            //consultation_requests
            Route::resource('consultation_requests', 'ConsultationController');
            Route::get('consultation_requests/{consultation_request}/reply', [ConsultationController::class, 'reply'])->name('consultation_requests.reply');
            Route::post('consultation_requests/{consultation_request}/send_mail', [ConsultationController::class, 'send_mail'])->name('consultation_requests.send_mail');
        });
    });
});

Route::get('unsubscribe/{id}', 'NewsLetterController@unsubscribe')->name('news-letters.unsubscribe');
Route::post('unsubscribe/action', 'NewsLetterController@unsubscribeAction')->name('news-letters.unsubscribe_action');
Route::get('unsubscribe/confirmation', function () {
    return view('admin.news_letters.unsubscribe_confirmation');
})->name('news-letters.unsubscribe_confirmation');
