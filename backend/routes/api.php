<?php

use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\LoginRegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\BasketsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\SubcategoriesController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\LikedProductsController;
use App\Http\Controllers\Api\FinishedOrdersController;
use App\Http\Controllers\Api\MessagesController;
use App\Http\Controllers\Api\ChatRoomsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// USERS

// get all users
Route::get('users', [UsersController::class, 'get']);
// get user by id
Route::get('users/{id}', [UsersController::class, 'getById']);
// add user
Route::post('users', [UsersController::class, 'add']);
// update user
Route::put('users/{id}/update', [UsersController::class, 'update']);
// delete user
Route::delete('users/{id}/delete', [UsersController::class, 'delete']);


// LOGIN AND REGISTER

// login user
Route::post('login', [LoginRegisterController::class, 'login']);
// register user
Route::post('register', [LoginRegisterController::class, 'register']);


// CATEGORIES

// get all categories
Route::get('categories', [CategoriesController::class, 'get']);
// get category by id
Route::get('categories/id/{id}', [CategoriesController::class, 'getById']);
// get category by name
Route::get('categories/name/{name}', [CategoriesController::class, 'getByName']);
// create categories
Route::get('categories/create', [CategoriesController::class, 'add']);


// SUBCATEGORIES

// get subcategories of category
Route::get('subcategories/category/{category_id}', [SubcategoriesController::class, 'getByCategory']);
// get subcategory of category by name
Route::get('subcategories/name/{name}/category/{category_id}', [SubcategoriesController::class, 'getById']);
// create subcategories for category
Route::get('subcategories/create/category/{category_id}', [SubcategoriesController::class, 'add']);
// create all subcategories
Route::get('subcategories/create', [SubcategoriesController::class, 'addAll']);


// BASKETS

// get basket for user
Route::get('baskets/{user_id}', [BasketsController::class, 'getByUserId']);
// add item to basket
Route::post('baskets/add/{user_id}/{product_id}', [BasketsController::class, 'add']);
// decrease item quantity from basket
Route::delete('baskets/delete/{user_id}/{product_id}', [BasketsController::class, 'deleteItem']);
// delete all items of given id from basket
Route::delete('baskets/delete_all_items/{user_id}/{product_id}', [BasketsController::class, 'deleteAllItems']);
// update product in basket
Route::put('baskets/update/{user_id}/{product_id}/{quantity}', [BasketsController::class, 'update']);


// PRODUCTS

// get all products
Route::get('products', [ProductsController::class, 'getAll']);
// get 1 product
Route::get('products/product/{product_id}', [ProductsController::class, 'getOne']);
// get products from category
Route::get('products/category/{category_id}', [ProductsController::class, 'getFromCategory']);
// get products from subcategory
Route::get('products/subcategory/{subcategory_id}', [ProductsController::class, 'getFromSubcategory']);

// create a product
// sample creation JSON:
// {
//     "name": "product name",
//     "price": 9.99,
//     "description": "product description",
//     "image_url": "https://example.com/image.jpg",
//     "subcategory_id": 1,
//     "license_needed": true
// }
Route::post('products/create', [ProductsController::class, 'add']);
// delete a product
Route::delete('products/delete/{product_id}', [ProductsController::class, 'delete']);
// delete all products
Route::delete('products/delete/all', [ProductsController::class, 'deleteAll']);


// LIKED PRODUCTS

// get Liked products
Route::get('liked_products/{user_id}', [LikedProductsController::class, 'get']);
// add to liked products
Route::post('liked_products/add/{user_id}/{product_id}', [LikedProductsController::class, 'add']);
// delete from liked products
Route::delete('liked_products/delete/{user_id}/{product_id}', [LikedProductsController::class, 'delete']);
// get most popular products
Route::get('liked_products/popular/{amount}', [LikedProductsController::class, 'getMostPopular']);


// FINISHED ORDERS

// get all finished orders of all users
Route::get('finished_orders', [FinishedOrdersController::class, 'getAll']);
// get all finished orders of user
Route::get('finished_orders/{user_id}', [FinishedOrdersController::class, 'getAllOfUser']);
// add finished orders of user
Route::post('finished_orders/{user_id}', [FinishedOrdersController::class, 'add']);
// delete finished orders of user
Route::delete('finished_orders/delete/{user_id}', [FinishedOrdersController::class, 'delete']);


// MESSAGES

// get all finished orders of all users
Route::get('messages/{user_id}/{room_id}', [MessagesController::class, 'getMessages']);
// get all finished orders of all users
Route::post('messages/send_message/{user_id}/{room_id}', [MessagesController::class, 'sendMessage']);


// CHAT ROOMS

// get all chat rooms
Route::get('chat_rooms', [ChatRoomsController::class, 'get']);
// get all chat rooms
Route::get('chat_rooms/{user_id}', [ChatRoomsController::class, 'getRoomsOfUser']);
// get all users of given chat room that have permission to write
Route::get('chat_rooms/permissions/{room_id}', [ChatRoomsController::class, 'getUsersWithPermission']);
// create chat room for 2 and more users
Route::post('chat_rooms/create', [ChatRoomsController::class, 'create']);
// create chat room for 2 and more users
Route::delete('chat_rooms/delete/{room_id}', [ChatRoomsController::class, 'delete']);