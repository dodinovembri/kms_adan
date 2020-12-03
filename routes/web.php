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
	Route::name('operational_vehicle.')->group(function () {
		Route::get('frontend/operational_vehicle/index', 'Frontend\OperationalVehicleController@index')->name('index');
		Route::get('frontend/operational_vehicle/show/{id}', 'Frontend\OperationalVehicleController@show')->name('show');
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
	Route::name('meassure.')->group(function () {
		Route::get('backend/meassure/index', 'Backend\MeassureController@index')->name('index');
		Route::get('backend/meassure/create', 'Backend\MeassureController@create')->name('create');
		Route::post('backend/meassure/store', 'Backend\MeassureController@store')->name('store');
		Route::get('backend/meassure/show/{id}', 'Backend\MeassureController@show')->name('show');
		Route::get('backend/meassure/edit/{id}', 'Backend\MeassureController@edit')->name('edit');
		Route::post('backend/meassure/update/{id}', 'Backend\MeassureController@update')->name('update');
		Route::get('backend/meassure/destroy/{id}', 'Backend\MeassureController@destroy')->name('destroy');
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
	Route::name('operational_vehicle_detail.')->group(function () {
		Route::get('backend/operational_vehicle_detail/index/{id}', 'Backend\OperationalVehicleDetailController@index')->name('index');
		Route::get('backend/operational_vehicle_detail/create', 'Backend\OperationalVehicleDetailController@create')->name('create');
		Route::post('backend/operational_vehicle_detail/store', 'Backend\OperationalVehicleDetailController@store')->name('store');
		Route::get('backend/operational_vehicle_detail/show/{id}', 'Backend\OperationalVehicleDetailController@show')->name('show');
		Route::get('backend/operational_vehicle_detail/edit/{id}', 'Backend\OperationalVehicleDetailController@edit')->name('edit');
		Route::post('backend/operational_vehicle_detail/update/{id}', 'Backend\OperationalVehicleDetailController@update')->name('update');
		Route::get('backend/operational_vehicle_detail/destroy/{id}', 'Backend\OperationalVehicleDetailController@destroy')->name('destroy');
	});	
	Route::name('vehicle_dimension.')->group(function () {
		Route::get('backend/vehicle_dimension/index', 'Backend\VehicleDimensionController@index')->name('index');
		Route::get('backend/vehicle_dimension/create', 'Backend\VehicleDimensionController@create')->name('create');
		Route::post('backend/vehicle_dimension/store', 'Backend\VehicleDimensionController@store')->name('store');
		Route::get('backend/vehicle_dimension/show/{id}', 'Backend\VehicleDimensionController@show')->name('show');
		Route::get('backend/vehicle_dimension/edit/{id}', 'Backend\VehicleDimensionController@edit')->name('edit');
		Route::post('backend/vehicle_dimension/update/{id}', 'Backend\VehicleDimensionController@update')->name('update');
		Route::get('backend/vehicle_dimension/destroy/{id}', 'Backend\VehicleDimensionController@destroy')->name('destroy');
	});	
	Route::name('vehicle_engine.')->group(function () {
		Route::get('backend/vehicle_engine/index', 'Backend\VehicleEngineController@index')->name('index');
		Route::get('backend/vehicle_engine/create', 'Backend\VehicleEngineController@create')->name('create');
		Route::post('backend/vehicle_engine/store', 'Backend\VehicleEngineController@store')->name('store');
		Route::get('backend/vehicle_engine/show/{id}', 'Backend\VehicleEngineController@show')->name('show');
		Route::get('backend/vehicle_engine/edit/{id}', 'Backend\VehicleEngineController@edit')->name('edit');
		Route::post('backend/vehicle_engine/update/{id}', 'Backend\VehicleEngineController@update')->name('update');
		Route::get('backend/vehicle_engine/destroy/{id}', 'Backend\VehicleEngineController@destroy')->name('destroy');
	});	
	Route::name('vehicle_performance.')->group(function () {
		Route::get('backend/vehicle_performance/index', 'Backend\VehiclePerformanceController@index')->name('index');
		Route::get('backend/vehicle_performance/create', 'Backend\VehiclePerformanceController@create')->name('create');
		Route::post('backend/vehicle_performance/store', 'Backend\VehiclePerformanceController@store')->name('store');
		Route::get('backend/vehicle_performance/show/{id}', 'Backend\VehiclePerformanceController@show')->name('show');
		Route::get('backend/vehicle_performance/edit/{id}', 'Backend\VehiclePerformanceController@edit')->name('edit');
		Route::post('backend/vehicle_performance/update/{id}', 'Backend\VehiclePerformanceController@update')->name('update');
		Route::get('backend/vehicle_performance/destroy/{id}', 'Backend\VehiclePerformanceController@destroy')->name('destroy');
	});	
	Route::name('vehicle_suspention.')->group(function () {
		Route::get('backend/vehicle_suspention/index', 'Backend\VehicleSuspentionController@index')->name('index');
		Route::get('backend/vehicle_suspention/create', 'Backend\VehicleSuspentionController@create')->name('create');
		Route::post('backend/vehicle_suspention/store', 'Backend\VehicleSuspentionController@store')->name('store');
		Route::get('backend/vehicle_suspention/show/{id}', 'Backend\VehicleSuspentionController@show')->name('show');
		Route::get('backend/vehicle_suspention/edit/{id}', 'Backend\VehicleSuspentionController@edit')->name('edit');
		Route::post('backend/vehicle_suspention/update/{id}', 'Backend\VehicleSuspentionController@update')->name('update');
		Route::get('backend/vehicle_suspention/destroy/{id}', 'Backend\VehicleSuspentionController@destroy')->name('destroy');
	});		
	Route::name('vehicle_velg_tire.')->group(function () {
		Route::get('backend/vehicle_velg_tire/index', 'Backend\VehicleVelgTireController@index')->name('index');
		Route::get('backend/vehicle_velg_tire/create', 'Backend\VehicleVelgTireController@create')->name('create');
		Route::post('backend/vehicle_velg_tire/store', 'Backend\VehicleVelgTireController@store')->name('store');
		Route::get('backend/vehicle_velg_tire/show/{id}', 'Backend\VehicleVelgTireController@show')->name('show');
		Route::get('backend/vehicle_velg_tire/edit/{id}', 'Backend\VehicleVelgTireController@edit')->name('edit');
		Route::post('backend/vehicle_velg_tire/update/{id}', 'Backend\VehicleVelgTireController@update')->name('update');
		Route::get('backend/vehicle_velg_tire/destroy/{id}', 'Backend\VehicleVelgTireController@destroy')->name('destroy');
	});		
	Route::name('vehicle_active_safety.')->group(function () {
		Route::get('backend/vehicle_active_safety/index', 'Backend\VehicleActiveSafetyController@index')->name('index');
		Route::get('backend/vehicle_active_safety/create', 'Backend\VehicleActiveSafetyController@create')->name('create');
		Route::post('backend/vehicle_active_safety/store', 'Backend\VehicleActiveSafetyController@store')->name('store');
		Route::get('backend/vehicle_active_safety/show/{id}', 'Backend\VehicleActiveSafetyController@show')->name('show');
		Route::get('backend/vehicle_active_safety/edit/{id}', 'Backend\VehicleActiveSafetyController@edit')->name('edit');
		Route::post('backend/vehicle_active_safety/update/{id}', 'Backend\VehicleActiveSafetyController@update')->name('update');
		Route::get('backend/vehicle_active_safety/destroy/{id}', 'Backend\VehicleActiveSafetyController@destroy')->name('destroy');
	});	
	Route::name('vehicle_passive_safety.')->group(function () {
		Route::get('backend/vehicle_passive_safety/index', 'Backend\VehiclePassiveSafetyController@index')->name('index');
		Route::get('backend/vehicle_passive_safety/create', 'Backend\VehiclePassiveSafetyController@create')->name('create');
		Route::post('backend/vehicle_passive_safety/store', 'Backend\VehiclePassiveSafetyController@store')->name('store');
		Route::get('backend/vehicle_passive_safety/show/{id}', 'Backend\VehiclePassiveSafetyController@show')->name('show');
		Route::get('backend/vehicle_passive_safety/edit/{id}', 'Backend\VehiclePassiveSafetyController@edit')->name('edit');
		Route::post('backend/vehicle_passive_safety/update/{id}', 'Backend\VehiclePassiveSafetyController@update')->name('update');
		Route::get('backend/vehicle_passive_safety/destroy/{id}', 'Backend\VehiclePassiveSafetyController@destroy')->name('destroy');
	});		
	Route::name('vehicle_security.')->group(function () {
		Route::get('backend/vehicle_security/index', 'Backend\VehicleSecurityController@index')->name('index');
		Route::get('backend/vehicle_security/create', 'Backend\VehicleSecurityController@create')->name('create');
		Route::post('backend/vehicle_security/store', 'Backend\VehicleSecurityController@store')->name('store');
		Route::get('backend/vehicle_security/show/{id}', 'Backend\VehicleSecurityController@show')->name('show');
		Route::get('backend/vehicle_security/edit/{id}', 'Backend\VehicleSecurityController@edit')->name('edit');
		Route::post('backend/vehicle_security/update/{id}', 'Backend\VehicleSecurityController@update')->name('update');
		Route::get('backend/vehicle_security/destroy/{id}', 'Backend\VehicleSecurityController@destroy')->name('destroy');
	});	
	Route::name('vehicle_comfort.')->group(function () {
		Route::get('backend/vehicle_comfort/index', 'Backend\VehicleComfortController@index')->name('index');
		Route::get('backend/vehicle_comfort/create', 'Backend\VehicleComfortController@create')->name('create');
		Route::post('backend/vehicle_comfort/store', 'Backend\VehicleComfortController@store')->name('store');
		Route::get('backend/vehicle_comfort/show/{id}', 'Backend\VehicleComfortController@show')->name('show');
		Route::get('backend/vehicle_comfort/edit/{id}', 'Backend\VehicleComfortController@edit')->name('edit');
		Route::post('backend/vehicle_comfort/update/{id}', 'Backend\VehicleComfortController@update')->name('update');
		Route::get('backend/vehicle_comfort/destroy/{id}', 'Backend\VehicleComfortController@destroy')->name('destroy');
	});		
	Route::name('vehicle_exterior.')->group(function () {
		Route::get('backend/vehicle_exterior/index', 'Backend\VehicleExteriorController@index')->name('index');
		Route::get('backend/vehicle_exterior/create', 'Backend\VehicleExteriorController@create')->name('create');
		Route::post('backend/vehicle_exterior/store', 'Backend\VehicleExteriorController@store')->name('store');
		Route::get('backend/vehicle_exterior/show/{id}', 'Backend\VehicleExteriorController@show')->name('show');
		Route::get('backend/vehicle_exterior/edit/{id}', 'Backend\VehicleExteriorController@edit')->name('edit');
		Route::post('backend/vehicle_exterior/update/{id}', 'Backend\VehicleExteriorController@update')->name('update');
		Route::get('backend/vehicle_exterior/destroy/{id}', 'Backend\VehicleExteriorController@destroy')->name('destroy');
	});
	Route::name('vehicle_communication.')->group(function () {
		Route::get('backend/vehicle_communication/index', 'Backend\VehicleCommunicationController@index')->name('index');
		Route::get('backend/vehicle_communication/create', 'Backend\VehicleCommunicationController@create')->name('create');
		Route::post('backend/vehicle_communication/store', 'Backend\VehicleCommunicationController@store')->name('store');
		Route::get('backend/vehicle_communication/show/{id}', 'Backend\VehicleCommunicationController@show')->name('show');
		Route::get('backend/vehicle_communication/edit/{id}', 'Backend\VehicleCommunicationController@edit')->name('edit');
		Route::post('backend/vehicle_communication/update/{id}', 'Backend\VehicleCommunicationController@update')->name('update');
		Route::get('backend/vehicle_communication/destroy/{id}', 'Backend\VehicleCommunicationController@destroy')->name('destroy');
	});										
});