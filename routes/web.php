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

Route::get('/', function () {
    return view('website.pages.homepage');
});


Route::get('dashboard', function () {
    return view('admin.pages.homepage');
});


Route::get('npihome', function () {
    return view('website.pages.homepage');
});

Route::get('whatsnew', function () {
    return view('website.pages.whatsnew');
});

Route::get('contactus', function () {
    return view('website.pages.contact');
});


Route::get('undermaintenance', function () {
    return view('website.pages.undermaintenance');
});


Route::get('faq', function () {
    return view('website.pages.faq');
});


Route::get('companyinformation', function () {
    return view('website.pages.companyinfo');
});

Route::get('editcompanyinformation', function () {
    return view('companyinformation.edit');
});


Route::get('companyinformations', function () {
    return view('companyinformation.index');
});
Route::resource('companyinformations','CompanyInformationController');


Route::get('faqs', function () {
    return view('faqs.index');
});

Route::get('services', function () {
    return view('website.pages.services');
});

Route::get('editfaq', function () {
    return view('faqs.edit');
});

Route::get('addfaq', function () {
    return view('faqs.create');
});
Route::resource('faqs','FaqController');

Route::get('admincontactsubmissions', function () {
    return view('contactsubmissions.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
