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
Route::get('/index', 'FrontendController@index')->name('index');
Route::get('/product_list/{id}', 'FrontendController@product_list')->name('product_list');
Route::get('/cart/{id}', 'FrontendController@cart')->name('cart');

Route::get('/home', 'FrontendController@index')->name('home');
Route::post('/home', 'FrontendController@search')->name('search');
Route::get('/admin', 'HomeController@index')->middleware(CheckRole::class)->name('admin');

Route::name('fe.')->group(function () {
	Route::get('fe/index', 'FrontendController@index')->name('index');
	Route::get('fe/profile', 'Fe\ProfileController@index')->name('profile');
	Route::get('fe/about_us', 'Fe\AboutUsController@index')->name('about_us');
	Route::get('fe/contact_us', 'Fe\ContactUsController@index')->name('contact_us');

	Route::name('review.')->group(function () {
		Route::post('fe/review/store/{id}', 'Fe\ReviewController@store')->name('store');
	});

	Route::name('cart.')->group(function () {
		Route::post('fe/cart/store', 'Fe\CartController@store')->name('store');
		Route::get('fe/cart/index', 'Fe\CartController@index')->name('index');
		Route::get('fe/cart/show', 'Fe\CartController@show')->name('show');
		Route::get('fe/cart/destroy/{id}', 'Fe\CartController@destroy')->name('destroy');
		Route::post('fe/cart/update', 'Fe\CartController@update')->name('update');
	});

	Route::name('serviceq.')->group(function () {
		Route::get('fe/serviceq/index', 'Fe\ServiceqController@index')->name('index');
		Route::post('fe/serviceq/store', 'Fe\ServiceqController@store')->name('store');
	});	

	Route::name('order.')->group(function () {
		Route::post('fe/order/store', 'Fe\OrderController@store')->name('store');
	});	

	Route::name('history.')->group(function () {
		Route::get('fe/history/index', 'Fe\OrderHistoryController@index')->name('index');
		Route::get('admin/history/show/{id}', 'Fe\OrderHistoryController@show')->name('show');		
	});		
});

Route::name('admin.')->group(function () {
	
	Route::name('user.')->group(function () {
		Route::get('admin/user/index', 'Admin\UserController@index')->name('index');
		Route::get('admin/user/create', 'Admin\UserController@create')->name('create');
		Route::post('admin/user/store', 'Admin\UserController@store')->name('store');
		Route::get('admin/user/show/{id}', 'Admin\UserController@show')->name('show');
		Route::get('admin/user/edit/{id}', 'Admin\UserController@edit')->name('edit');
		Route::post('admin/user/update/{id}', 'Admin\UserController@update')->name('update');
		Route::post('admin/user/destroy/{id}', 'Admin\UserController@destroy')->name('destroy');
	});

	Route::name('product.')->group(function () {
		Route::get('admin/product/index', 'Admin\ProductController@index')->name('index');
		Route::get('admin/product/create', 'Admin\ProductController@create')->name('create');
		Route::post('admin/product/store', 'Admin\ProductController@store')->name('store');
		Route::get('admin/product/show/{id}', 'Admin\ProductController@show')->name('show');
		Route::get('admin/product/edit/{id}', 'Admin\ProductController@edit')->name('edit');
		Route::post('admin/product/update/{id}', 'Admin\ProductController@update')->name('update');
		Route::post('admin/product/destroy/{id}', 'Admin\ProductController@destroy')->name('destroy');
	});

	Route::name('product_category.')->group(function () {
		Route::get('admin/product_category/index', 'Admin\ProductCategoryController@index')->name('index');
		Route::get('admin/product_category/create', 'Admin\ProductCategoryController@create')->name('create');
		Route::post('admin/product_category/store', 'Admin\ProductCategoryController@store')->name('store');
		Route::get('admin/product_category/show/{id}', 'Admin\ProductCategoryController@show')->name('show');
		Route::get('admin/product_category/edit/{id}', 'Admin\ProductCategoryController@edit')->name('edit');
		Route::post('admin/product_category/update/{id}', 'Admin\ProductCategoryController@update')->name('update');
		Route::post('admin/product_category/destroy/{id}', 'Admin\ProductCategoryController@destroy')->name('destroy');
	});	

	Route::name('order.')->group(function () {
		Route::get('admin/order/index', 'Admin\OrderController@index')->name('index');
		Route::get('admin/order/create', 'Admin\OrderController@create')->name('create');
		Route::post('admin/order/store', 'Admin\OrderController@store')->name('store');
		Route::get('admin/order/show/{id}', 'Admin\OrderController@show')->name('show');
		Route::get('admin/order/edit/{id}', 'Admin\OrderController@edit')->name('edit');
		Route::post('admin/order/update/{id}', 'Admin\OrderController@update')->name('update');
		Route::post('admin/order/destroy/{id}', 'Admin\OrderController@destroy')->name('destroy');
	});	

	Route::name('order_status.')->group(function () {
		Route::get('admin/order_status/index', 'Admin\OrderStatusController@index')->name('index');
		Route::get('admin/order_status/create', 'Admin\OrderStatusController@create')->name('create');
		Route::post('admin/order_status/store', 'Admin\OrderStatusController@store')->name('store');
		Route::get('admin/order_status/show/{id}', 'Admin\OrderStatusController@show')->name('show');
		Route::get('admin/order_status/edit/{id}', 'Admin\OrderStatusController@edit')->name('edit');
		Route::post('admin/order_status/update/{id}', 'Admin\OrderStatusController@update')->name('update');
		Route::post('admin/order_status/destroy/{id}', 'Admin\OrderStatusController@destroy')->name('destroy');
	});	

	Route::name('questionnaire.')->group(function () {
		Route::get('admin/questionnaire/index', 'Admin\QuestionnaireController@index')->name('index');
		Route::get('admin/questionnaire/create', 'Admin\QuestionnaireController@create')->name('create');
		Route::post('admin/questionnaire/store', 'Admin\QuestionnaireController@store')->name('store');
		Route::get('admin/questionnaire/show/{id}', 'Admin\QuestionnaireController@show')->name('show');
		Route::get('admin/questionnaire/edit/{id}', 'Admin\QuestionnaireController@edit')->name('edit');
		Route::post('admin/questionnaire/update/{id}', 'Admin\QuestionnaireController@update')->name('update');
		Route::post('admin/questionnaire/destroy/{id}', 'Admin\QuestionnaireController@destroy')->name('destroy');
	});		

	Route::name('payment_method.')->group(function () {
		Route::get('admin/payment_method/index', 'Admin\PaymentMethodController@index')->name('index');
		Route::get('admin/payment_method/create', 'Admin\PaymentMethodController@create')->name('create');
		Route::post('admin/payment_method/store', 'Admin\PaymentMethodController@store')->name('store');
		Route::get('admin/payment_method/show/{id}', 'Admin\PaymentMethodController@show')->name('show');
		Route::get('admin/payment_method/edit/{id}', 'Admin\PaymentMethodController@edit')->name('edit');
		Route::post('admin/payment_method/update/{id}', 'Admin\PaymentMethodController@update')->name('update');
		Route::post('admin/payment_method/destroy/{id}', 'Admin\PaymentMethodController@destroy')->name('destroy');
	});	

	Route::name('discount_point.')->group(function () {
		Route::get('admin/discount_point/index', 'Admin\DiscountPointController@index')->name('index');
		Route::get('admin/discount_point/edit/{id}', 'Admin\DiscountPointController@edit')->name('edit');
		Route::post('admin/discount_point/update/{id}', 'Admin\DiscountPointController@update')->name('update');
	});	

	Route::name('servequal.')->group(function () {
		Route::get('admin/servequal/index', 'Admin\ServequalController@index')->name('index');
		Route::get('admin/servequal/edit/{id}', 'Admin\ServequalController@edit')->name('edit');
		Route::post('admin/servequal/update/{id}', 'Admin\ServequalController@update')->name('update');
	});		
});
