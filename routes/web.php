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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', 'JobProfilesController@index')->name('profiles');
Route::get('/profiles/{category}', 'JobProfilesController@profileCategory')->name('profileCategory');
Route::get('/profile/{id}', 'JobProfilesController@profile')->name('profile');

Route::get('/user/{name}', 'UserProfileController@user')->name('user');
Route::put('/user/{id}', 'UserProfileController@update')->name('profile.update');
Route::get('/createjobprofile/{name}', 'UserProfileController@create')->name('profile.create');
Route::post('/createprofile/{userid}', 'UserProfileController@store')->name('profile.store');
Route::put('/account/{id}', 'UserProfileController@change')->name('account.update');


Route::get('/contact', 'ContactController@index')->name('contact.show');
Route::post('/contacted', 'ContactController@store')->name('contact.store');



Route::resource('order', 'OrderController');

Route::get('/computers', 'myProductsController@index')->name('computers');
Route::resource('reviews', 'ReviewController');
Route::resource('replies', 'ReplyController');
Route::get('/selling/{userid}', 'OrderController@showSelling')->name('order.showSelling');
Route::get('/funds/{userid}', 'OrderController@showFunds')->name('funds.show');
Route::post('/withdraw', 'OrderController@withdraw')->name('funds.withdraw');

//search
Route::get('/search', 'SearchController@search')->name('search');



//   Chats Routes start
Route::get('/chat', 'ChatsController@index')->name('chat');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');


Route::get('/stars', function () {
    return view('stars');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/test', 'TestController@insert')->name('insert');
Route::any('sendemail', function () {
    if (Request::get('message') != null)
        $data = array(
            'bodyMessage' => Request::get('message')
        );
    else
        $data[] = '';
    Mail::send('email', $data, function ($message) {

        $message->from('donotreply@demo.com', 'Just Laravel');

        $message->to(Request::get('toEmail'))->subject('Just Laravel demo email using SendGrid');
    });
    return Redirect::back()->withErrors([
        'Your email has been sent successfully'
    ]);
});
