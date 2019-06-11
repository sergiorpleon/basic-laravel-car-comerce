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

Route::get('/admin/index', 
[ 
  'middleware' => 'auth',
  'as' => 'admin',
  'uses' => 'StoreController@admin'
]
);

Route::resource('admin/tag', 'Admin\TagController');
Route::resource('admin/category', 'Admin\CategoryController');
Route::resource('admin/product', 'Admin\ProductController');
Route::resource('admin/user', 'Admin\UserController');
Route::resource('admin/order', 'Admin\OrderController')->only([
  'index'
]);



Route::bind('slugprod', function($slug){
  return App\Product::where('slug', $slug)->first();
});

Route::bind('category', function($category){
  return App\Category::find($category);
});
Route::bind('product', function($product){
  return App\Product::find($product);
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/welcome', 
[ 'as' => 'welcome',
  'uses' => 'StoreController@welcome'
]
);


Route::get('/', 
[ 'as' => 'home',
  'uses' => 'StoreController@index'
]
);

Route::get('/product/{slug}/', 
[ 'as' => 'product-detail',
  'uses' => 'StoreController@show'
]
);



Route::get('/cart/show/', 
[ 'as' => 'cart-show',
  'uses' => 'CartController@show'
]
);

Route::get('cart/add/{slugprod}/',
  [
    'as' => 'cart-add',
    'uses' => 'CartController@add'
  ]
);

Route::get('cart/delete/{slugprod}/',
  [
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
  ]
);

Route::get('cart/trash/',
  [
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
  ]
);

Route::get('cart/update/{slug}/{quantity}/',
  [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
  ]
);

/*
Route::get('cart/update/{product}/',
  [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
  ]
);
*/

Route::get('cart/order-detail/',
  [
    'middleware' => 'auth',
    'as' => 'order-detail',
    'uses' => 'CartController@orderdetail'
  ]
);

Route::get('buy/',
  [
    'as' => 'buy',
    'uses' => 'CartController@buy'
  ]
);



//USER
Auth::routes();
/*
Route::get('auth/login',
  [
    'as' => 'login-get',
    'uses' => 'Auth\LoginController@getLogin'
  ]
);
Route::post('auth/login',
  [
    'as' => 'login-post',
    'uses' => 'Auth\LoginController@postLogin'
  ]
);
Route::get('auth/logout',
  [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@getLogout'
  ]
);

Route::get('auth/register',
  [
    'as' => 'register-get',
    'uses' => 'Auth\AuthController@getRegister'
  ]
);
Route::post('auth/register',
  [
    'as' => 'register-post',
    'uses' => 'Auth\AuthController@postRegister'
  ]
);
*/

//ADMIN
/*
Route::get('admin/category', 
[
  'as' => 'category-index',
  'uses'=>'Admin\CategoryController@index'
]);
Route::get('admin/category/create', 
[
  'as' => 'category-create',
  'uses'=>'Admin\CategoryController@create'
]);
*/

