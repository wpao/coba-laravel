<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Jack Sparrow",
        "email" => "sandhika@gmail.com",
        "image" => "sparrow.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show']);

// Post::create([
//     "title" => "Judul Ke Tiga",
//     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fugiat dolorem culpa, deserunt asperiores unde consequuntur possimus itaque quibusdam esse obcaecati voluptates impedit amet doloremque ipsa ullam, vel molestiae explicabo?",
//     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fugiat dolorem culpa, deserunt asperiores unde consequuntur possimus itaque quibusdam esse obcaecati voluptates impedit amet doloremque ipsa ullam, vel molestiae explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nulla soluta dolor hic voluptatem neque cupiditate,</p><p>facilis aliquam alias, quidem, tempore ut dolores ratione quis fugiat laboriosam doloremque unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eaque maiores ipsum iste, mollitia excepturi deleniti reprehenderit autem alias officia suscipit fugiat itaque? Voluptatibus omnis ab molestias dignissimos? Ut, neque?</p>"
// ])
