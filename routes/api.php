<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Slider
    Route::post('sliders/media', 'SliderApiController@storeMedia')->name('sliders.storeMedia');
    Route::apiResource('sliders', 'SliderApiController');

    // About Us
    Route::post('about-uss/media', 'AboutUsApiController@storeMedia')->name('about-uss.storeMedia');
    Route::apiResource('about-uss', 'AboutUsApiController');

    // Faq
    Route::apiResource('faqs', 'FaqApiController');

    // What Makes Different
    Route::apiResource('what-makes-differents', 'WhatMakesDifferentApiController');

    // Product
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductApiController');

    // Subscribe
    Route::apiResource('subscribes', 'SubscribeApiController');

    // Setting
    Route::post('settings/media', 'SettingApiController@storeMedia')->name('settings.storeMedia');
    Route::apiResource('settings', 'SettingApiController');
});
