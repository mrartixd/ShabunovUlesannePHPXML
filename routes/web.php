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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function() {
});
Route::get('/home', 'HomeController@index');
//Route::get('new', 'HomeController@create');
$router->resource('new','HomeController');
Route::get('suc','HomeController@suc');
Auth::routes();

Route::get('rss', function () {


    /* create new feed */
    $feed = App::make("feed");
 
    $feed->setCache(60, 'laravelFeedKey');

    /* creating rss feed with our most recent 20 posts */
    $posts = \DB::table('news')->orderBy('created_at', 'desc')->take(10)->get();
 
    if (!$feed->isCached())
    {
    /* set your feed's title, description, link, pubdate and language */
    $feed->title = 'Shabunov XML';
    $feed->description = 'Это XML файл';
    $feed->logo = 'img/xml_logo.png';
    $feed->link = url('feed');
    $feed->setDateFormat('datetime'); // 'datetime', 'timestamp' or 'carbon'
    $feed->pubdate = $posts[0]->created_at;
    $feed->lang = 'en';
    $feed->setShortening(true); // true or false
    $feed->setTextLimit(100); // maximum length of description text
 
 
    foreach ($posts as $post)
    {
        $feed->add($post->title, $post->author, URL::to($post->slug), $post->created_at, $post->description, $post->content);
    }
}
 
    return $feed->render('atom');
 });