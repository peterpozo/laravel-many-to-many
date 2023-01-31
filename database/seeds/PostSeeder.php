<?php

use App\Post;
use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = Category::all('id')->all();
        for ($i=0; $i < 100; $i++) {
            $title = $faker->words(rand(3,7), true);
            // $title = 'Ciao a Tutti';
            // $img_path = Storage::put('uploads', $data['uploaded_img']);
            Post::create([
                'category_id'   => $faker->randomElement($categories)->id,
                'slug' =>Post::getslug($title),
                'title'=>$title,
                'image' =>'https://picsum.photos/id/'. rand(0, 1000) .'/500/400',
                // 'uploaded_img'  => $img_path,
                'content' => $faker ->paragraphs(rand(1, 10), true),
                'excerpt' => $faker ->paragraph(),
            ]);
        }
    }
}
