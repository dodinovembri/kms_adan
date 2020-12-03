<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;

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

Auth::routes([  
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);
// Auth::routes();

Route::get('/', 'FrontendController@index')->name('welcome');
Route::get('/home', 'Backend\DashboardController@index')->name('dashboard');
Route::get('/home/{id}', 'Backend\DashboardController@search')->name('search');
Route::get('/backend', 'Backend\DashboardController@index')->name('dashboard');

Route::name('frontend.')->group(function () {
	Route::name('knowledge_post.')->group(function () {
		Route::get('frontend/knowledge_post/show/{id}', 'FrontendController@show')->name('show');
		Route::post('frontend/knowledge_post/search', 'FrontendController@search')->name('search');
		Route::get('frontend/knowledge_post/searchbyid/{id}', 'FrontendController@searchbyid')->name('searchbyid');
	});		
});

Route::name('backend.')->group(function () {
	Route::name('social_media.')->group(function () {
		Route::get('backend/social_media/index', 'Backend\SocialMediaController@index')->name('index');
		Route::get('backend/social_media/create', 'Backend\SocialMediaController@create')->name('create');
		Route::post('backend/social_media/store', 'Backend\SocialMediaController@store')->name('store');
		Route::get('backend/social_media/show/{id}', 'Backend\SocialMediaController@show')->name('show');
		Route::get('backend/social_media/edit/{id}', 'Backend\SocialMediaController@edit')->name('edit');
		Route::post('backend/social_media/update/{id}', 'Backend\SocialMediaController@update')->name('update');
		Route::get('backend/social_media/destroy/{id}', 'Backend\SocialMediaController@destroy')->name('destroy');
	});
	Route::name('category.')->group(function () {
		Route::get('backend/category/index', 'Backend\CategoryController@index')->name('index');
		Route::get('backend/category/create', 'Backend\CategoryController@create')->name('create');
		Route::post('backend/category/store', 'Backend\CategoryController@store')->name('store');
		Route::get('backend/category/show/{id}', 'Backend\CategoryController@show')->name('show');
		Route::get('backend/category/edit/{id}', 'Backend\CategoryController@edit')->name('edit');
		Route::post('backend/category/update/{id}', 'Backend\CategoryController@update')->name('update');
		Route::get('backend/category/destroy/{id}', 'Backend\CategoryController@destroy')->name('destroy');
	});	
	Route::name('knowledge_post.')->group(function () {
		Route::get('backend/knowledge_post/index', 'Backend\KnowledgePostController@index')->name('index');
		Route::get('backend/knowledge_post/create', 'Backend\KnowledgePostController@create')->name('create');
		Route::post('backend/knowledge_post/store', 'Backend\KnowledgePostController@store')->name('store');
		Route::get('backend/knowledge_post/show/{id}', 'Backend\KnowledgePostController@show')->name('show');
		Route::get('backend/knowledge_post/edit/{id}', 'Backend\KnowledgePostController@edit')->name('edit');
		Route::post('backend/knowledge_post/update/{id}', 'Backend\KnowledgePostController@update')->name('update');
		Route::get('backend/knowledge_post/destroy/{id}', 'Backend\KnowledgePostController@destroy')->name('destroy');
	});	
	Route::name('knowledge_post_detail.')->group(function () {
		Route::get('backend/knowledge_post_detail/index/{id}', 'Backend\KnowledgePostDetailController@index')->name('index');
		Route::get('backend/knowledge_post_detail/create', 'Backend\KnowledgePostDetailController@create')->name('create');
		Route::post('backend/knowledge_post_detail/store', 'Backend\KnowledgePostDetailController@store')->name('store');
		Route::get('backend/knowledge_post_detail/show/{id}', 'Backend\KnowledgePostDetailController@show')->name('show');
		Route::get('backend/knowledge_post_detail/edit/{id}', 'Backend\KnowledgePostDetailController@edit')->name('edit');
		Route::post('backend/knowledge_post_detail/update/{id}', 'Backend\KnowledgePostDetailController@update')->name('update');
		Route::get('backend/knowledge_post_detail/destroy/{id}', 'Backend\KnowledgePostDetailController@destroy')->name('destroy');
	});			
	Route::name('dimension.')->group(function () {
		Route::get('backend/dimension/index', 'Backend\DimensionController@index')->name('index');
		Route::get('backend/dimension/create', 'Backend\DimensionController@create')->name('create');
		Route::post('backend/dimension/store', 'Backend\DimensionController@store')->name('store');
		Route::get('backend/dimension/show/{id}', 'Backend\DimensionController@show')->name('show');
		Route::get('backend/dimension/edit/{id}', 'Backend\DimensionController@edit')->name('edit');
		Route::post('backend/dimension/update/{id}', 'Backend\DimensionController@update')->name('update');
		Route::get('backend/dimension/destroy/{id}', 'Backend\DimensionController@destroy')->name('destroy');
	});
	Route::name('driver_type.')->group(function () {
		Route::get('backend/driver_type/index', 'Backend\DriverTypeController@index')->name('index');
		Route::get('backend/driver_type/create', 'Backend\DriverTypeController@create')->name('create');
		Route::post('backend/driver_type/store', 'Backend\DriverTypeController@store')->name('store');
		Route::get('backend/driver_type/show/{id}', 'Backend\DriverTypeController@show')->name('show');
		Route::get('backend/driver_type/edit/{id}', 'Backend\DriverTypeController@edit')->name('edit');
		Route::post('backend/driver_type/update/{id}', 'Backend\DriverTypeController@update')->name('update');
		Route::get('backend/driver_type/destroy/{id}', 'Backend\DriverTypeController@destroy')->name('destroy');
	});	
	Route::name('user.')->group(function () {
		Route::get('backend/user/index', 'Backend\UserController@index')->name('index');
		Route::get('backend/user/create', 'Backend\UserController@create')->name('create');
		Route::post('backend/user/store', 'Backend\UserController@store')->name('store');
		Route::get('backend/user/show/{id}', 'Backend\UserController@show')->name('show');
		Route::get('backend/user/edit/{id}', 'Backend\UserController@edit')->name('edit');
		Route::post('backend/user/update/{id}', 'Backend\UserController@update')->name('update');
		Route::get('backend/user/destroy/{id}', 'Backend\UserController@destroy')->name('destroy');
	});		
	Route::name('fuel_type.')->group(function () {
		Route::get('backend/fuel_type/index', 'Backend\FuelTypeController@index')->name('index');
		Route::get('backend/fuel_type/create', 'Backend\FuelTypeController@create')->name('create');
		Route::post('backend/fuel_type/store', 'Backend\FuelTypeController@store')->name('store');
		Route::get('backend/fuel_type/show/{id}', 'Backend\FuelTypeController@show')->name('show');
		Route::get('backend/fuel_type/edit/{id}', 'Backend\FuelTypeController@edit')->name('edit');
		Route::post('backend/fuel_type/update/{id}', 'Backend\FuelTypeController@update')->name('update');
		Route::get('backend/fuel_type/destroy/{id}', 'Backend\FuelTypeController@destroy')->name('destroy');
	});
	Route::name('vehicle_type.')->group(function () {
		Route::get('backend/vehicle_type/index', 'Backend\VehicleTypeController@index')->name('index');
		Route::get('backend/vehicle_type/create', 'Backend\VehicleTypeController@create')->name('create');
		Route::post('backend/vehicle_type/store', 'Backend\VehicleTypeController@store')->name('store');
		Route::get('backend/vehicle_type/show/{id}', 'Backend\VehicleTypeController@show')->name('show');
		Route::get('backend/vehicle_type/edit/{id}', 'Backend\VehicleTypeController@edit')->name('edit');
		Route::post('backend/vehicle_type/update/{id}', 'Backend\VehicleTypeController@update')->name('update');
		Route::get('backend/vehicle_type/destroy/{id}', 'Backend\VehicleTypeController@destroy')->name('destroy');
	});
	Route::name('vehicle.')->group(function () {
		Route::get('backend/vehicle/index', 'Backend\VehicleController@index')->name('index');
		Route::get('backend/vehicle/create', 'Backend\VehicleController@create')->name('create');
		Route::post('backend/vehicle/store', 'Backend\VehicleController@store')->name('store');
		Route::get('backend/vehicle/show/{id}', 'Backend\VehicleController@show')->name('show');
		Route::get('backend/vehicle/edit/{id}', 'Backend\VehicleController@edit')->name('edit');
		Route::post('backend/vehicle/update/{id}', 'Backend\VehicleController@update')->name('update');
		Route::get('backend/vehicle/destroy/{id}', 'Backend\VehicleController@destroy')->name('destroy');
	});	
	Route::name('operational_vehicle.')->group(function () {
		Route::get('backend/operational_vehicle/index', 'Backend\OperationalVehicleController@index')->name('index');
		Route::get('backend/operational_vehicle/create', 'Backend\OperationalVehicleController@create')->name('create');
		Route::post('backend/operational_vehicle/store', 'Backend\OperationalVehicleController@store')->name('store');
		Route::get('backend/operational_vehicle/show/{id}', 'Backend\OperationalVehicleController@show')->name('show');
		Route::get('backend/operational_vehicle/edit/{id}', 'Backend\OperationalVehicleController@edit')->name('edit');
		Route::post('backend/operational_vehicle/update/{id}', 'Backend\OperationalVehicleController@update')->name('update');
		Route::get('backend/operational_vehicle/destroy/{id}', 'Backend\OperationalVehicleController@destroy')->name('destroy');
	});		
});