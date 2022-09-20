<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'PagesController@root')->name('root');

// 帮助中心
Route::get('help', 'PagesController@help')->name('help');

// 需求市场
Route::get('market', 'PagesController@market')->name('market');
Route::post('market_search', 'PagesController@market_search')->name('market_search');

// 资源库
Route::get('repository', 'PagesController@repository')->name('repository');
Route::get('repository/{company}', 'PagesController@repository_show')->name('repositoryshow');

// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 用户注册相关路由
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 密码重置相关路由
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// 再次确认密码（重要操作前提示）
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
Route::get('users/supplies/{user}', 'UsersController@supplies')->name('users.supplies');
Route::get('users/purchases/{user}', 'UsersController@purchases')->name('users.purchases');
Route::get('users/supplyorders/{user}', 'UsersController@supplyorders')->name('users.supplyorders');
Route::get('users/purchaseorders/{user}', 'UsersController@purchaseorders')->name('users.purchaseorders');

// 新闻资讯相关路由
Route::resource('news', 'NewsController', ['only' => ['show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::get('news/list/{category}', 'NewsController@index')->name('news.index');

// 新闻资讯分类相关路由
Route::resource('categories', 'NewsCategoriesController', ['only' => ['show']]);

// 上传图片
Route::post('upload_image', 'NewsController@uploadImage')->name('news.upload_image');

// 供应相关路由
Route::resource('supplies', 'SuppliesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::get('supplytypes/list', 'GoodsTypesController@allsupplytypes')->name('goodstypes.allsupplytypes');
Route::get('supplytypes/{goodstype}', 'GoodsTypesController@supplytypes')->name('goodstypes.supplytypes');
Route::post('upload_supply_image', 'SuppliesController@uploadImage')->name('supplies.upload_image');

// 采购相关路由
Route::resource('purchases', 'PurchasesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::get('purchasetypes/list', 'GoodsTypesController@allpurchasetypes')->name('goodstypes.allpurchasetypes');
Route::get('purchasetypes/{goodstype}', 'GoodsTypesController@purchasetypes')->name('goodstypes.purchasetypes');
Route::post('upload_purchase_image', 'PurchasesController@uploadImage')->name('purchases.upload_image');

// 采购订单
Route::resource('purchase_orders', 'PurchaseOrdersController', ['only' => ['show', 'store', 'update', 'edit', 'destroy']]);
Route::get('purchase_orders/index/{user}', 'PurchaseOrdersController@index')->name('purchase_orders.index');
Route::get('purchase_orders/create/{purchase}', 'PurchaseOrdersController@create')->name('purchase_orders.create');

// 供应订单
Route::resource('supply_orders', 'SupplyOrdersController', ['only' => ['show', 'store', 'update', 'edit', 'destroy']]);
Route::get('supply_orders/index/{user}', 'SupplyOrdersController@index')->name('supply_orders.index');
Route::get('supply_orders/create/{supply}', 'SupplyOrdersController@create')->name('supply_orders.create');

// 采购订单操作记录
Route::resource('purchase_order_actions', 'PurchaseOrderActionsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

// 供应订单操作记录
Route::resource('supply_order_actions', 'SupplyOrderActionsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
