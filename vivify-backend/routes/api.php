<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/{blog}', 'BlogController@show');

Route::post('/comment', 'CommentController@store');


Route::get('/sermons', 'SermonController@index');
Route::get('/sermons/{sermon}', 'SermonController@show');
Route::get('/sermons-featured', 'SermonController@getFeatured');
Route::get('/sermons/all/{sermon_id}', 'SermonController@indexByCategory');

Route::get('/podcasts', 'PodcastController@index');
Route::get('/podcasts/{podcast}', 'PodcastController@show');
Route::get('/podcasts-featured', 'PodcastController@getFeatured');


Route::get('/devotionals', 'DevotionalController@index');
Route::get('/devotionals/{devotional}', 'DevotionalController@show');
Route::get('/devotionals/all/{devotion_id}', 'DevotionalController@indexByCategory');
Route::get('/devotionals-featured', 'DevotionalController@getFeatured');

Route::get('/devotions', 'DevotionController@index');
Route::get('/devotions/{devotion}', 'DevotionController@show');

Route::get('/sermon_groups', 'SermonGroupController@index');
Route::get('/sermon_groups/{sermon_group}', 'SermonGroupController@show');

Route::get('/gallery', 'GalleryPictureController@index');
Route::get('/gallery/{gallery_picture}', 'GalleryPictureController@show');

Route::get('/quotes', 'QuoteController@index');
