<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;


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

// Route::get(
//     '/',

//     function () {
//         return view('welcome');
//     }
// );

Route::group([
    'namespace' => 'Frontend',
], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('aboutus', 'FrontendController@aboutus')->name('aboutus');
    Route::get('contact', 'FrontendController@contact')->name('contact');
    Route::get('career', 'FrontendController@career')->name('career');
    Route::get('career/{slug}', 'FrontendController@careerDetail')->name('careerdetail');
    // Route::get('service', 'FrontendController@service')->name('service');
    Route::get('singleservice/{slug}', 'FrontendController@singleservice')->name('singleservice');
    Route::post('sendmail', 'FrontendController@sendMail')->name('sendmail');
});
Route::group([
    'namespace' => 'Backend',
    'middleware' => ['auth:sanctum'],
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    foreach (config('custom.menu') as $menu) {
        Route::resource($menu['slug'], str_replace(' ', '', ucwords(str_replace("-", " ", $menu['slug']) . 'Controller')));
    }
});
