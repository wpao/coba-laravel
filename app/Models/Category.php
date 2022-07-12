<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

// Post::create([
//     'title' => 'Judul Pertama',
//     'category_id' => 1,
//     'slug' => 'judul-pertama',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fugiat dolorem culpa, deserunt asperiores unde consequuntur possimus ',
//     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fugiat dolorem culpa, deserunt asperiores unde consequuntur possimus itaque quibusdam esse obcaecati voluptates impedit amet doloremque ipsa ullam, vel molestiae explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nulla soluta dolor hic voluptatem neque cupiditate,</p><p>facilis aliquam alias, quidem, tempore ut dolores ratione quis fugiat laboriosam doloremque unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eaque maiores ipsum iste, mollitia excepturi deleniti reprehenderit autem alias officia suscipit fugiat itaque? Voluptatibus omnis ab molestias dignissimos? Ut, neque?</p>'
// ])

// Post::create([
//     'title' => 'Judul Kedua',
//     'slug' => 'judul-kedua',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fugiat dolorem culpa, deserunt asperiores unde consequuntur possimus ',
//     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fugiat dolorem culpa, deserunt asperiores unde consequuntur possimus itaque quibusdam esse obcaecati voluptates impedit amet doloremque ipsa ullam, vel molestiae explicabo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nulla soluta dolor hic voluptatem neque cupiditate,</p><p>facilis aliquam alias, quidem, tempore ut dolores ratione quis fugiat laboriosam doloremque unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eaque maiores ipsum iste, mollitia excepturi deleniti reprehenderit autem alias officia suscipit fugiat itaque? Voluptatibus omnis ab molestias dignissimos? Ut, neque?</p>'
// ])