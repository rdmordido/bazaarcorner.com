<?php

/**
 * Site related links
 */
Route::get('/', 'SiteController@index');
Route::get('about-us', 'SiteController@aboutUs');
Route::get('get-help', 'SiteController@getHelp');
Route::get('contact-us', 'SiteController@contactUs');
Route::get('privacy-policy', 'SiteController@privacyPolicy');
Route::get('terms-and-condition', 'SiteController@termsAndCondition');
Route::get('shipping-and-returns', 'SiteController@shippingAndReturns');

Route::get('login', 'SiteController@login');
Route::get('register', 'SiteController@register');
Route::get('logout', 'SiteController@logout');