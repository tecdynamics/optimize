<?php

use Tec\Base\Facades\AdminHelper;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Tec\Optimize\Http\Controllers'], function () {
    AdminHelper::registerRoutes(function () {
        Route::group(['prefix' => 'settings'], function () {
            Route::get('optimize', [
                'as' => 'optimize.settings',
                'uses' => 'Settings\OptimizeSettingController@edit',
            ]);

            Route::put('optimize', [
                'as' => 'optimize.settings.update',
                'uses' => 'Settings\OptimizeSettingController@update',
                'permission' => 'optimize.settings',
            ]);
        });
    });
});
