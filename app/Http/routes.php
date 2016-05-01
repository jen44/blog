<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    
                            /**********
                                User
                            **********/
                                
    
    
    
    
    //Show Register Form
    Route::get('users/register', 'UserController@showRegisterForm');
    
    //Process Register
    Route::post('users', 'UserController@createUser');
    
    
  
    
    //Show User Detail
    Route::get('users/{id}', 'UserController@showUserDetail');
    
    
    //Show Edit User Detail Form
    Route::get('users/{id}/edit', 'UserController@showUserEdit');
    
    
    //Process Edit User Detail
    Route::put('users/{id}', 'UserController@editUser');
    
    
    
      //Show Login Form
    Route::get('login', 'LoginController@showLoginForm');
    
    
    //Process Login
    Route::post('login', 'LoginController@processLogin');
    
    
    //Process Logout
    Route::get('logout', 'LoginController@logout');
    
    

                            /**********
                                Post
                            **********/
    
    //Show all posts
    Route::get('posts/all', 'PostController@showPosts');
    
    //show individual posts with ID
    Route::get('posts/{id}', 'PostController@showIndivPosts') ->where(['id' =>'\d+']);;
    
    //Show post creation form
    Route::get('posts/create', 'PostController@showCreationForm');
    
    //Process post creation
    Route::post('posts/all', 'PostController@createPost');
    
    //Show 'my comments'
//    Route::get();
    
    //Show 'my posts'
    Route::get('myposts', 'PostController@adminPosts');
    
    
    
                            /************
                                Comment
                            *************/
});
