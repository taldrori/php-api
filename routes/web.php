<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/product'], function($router)
{
	$router->post('add','PostProductController@createProduct');
	
	$router->get('view/{id}','PostProductController@viewProduct');
	
	$router->put('update/{id}','PostProductController@updateProduct');
	
	$router->delete('delete/{id}','PostProductController@deleteProduct');
	
	$router->get('index','PostProductController@index');
	
	$router->get('cup','PostProductController@findCup');
});

$router->group(['prefix' => 'api/category'], function($router)
{
	$router->post('add','CategoryController@createCategory');
	
	$router->get('view/{id}','CategoryController@viewCategory');
	
	$router->put('update/{id}','CategoryController@updateCategory');
	
	$router->delete('delete/{id}','CategoryController@deleteCategory');
	
	$router->get('index','CategoryController@index');
	
	$router->post('add-product','CatProductController@addProductToCategory');
	
	$router->put('update-product-category/{id}','CatProductController@updateCategory');
	
	$router->delete('delete-product-category/{id}','CatProductController@deleteCatProduct');
	
	$router->get('{id}','CatProductController@findProductsOfCat');
});
	
