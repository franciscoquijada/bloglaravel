<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        $posts = [];
        $faker = Factory::create();

        for($i=0; $i<10 ;$i++)
        {
            $date = date("Y-m-d H:i:s", strtotime("2018-04-01 08:00:00 + {$i} days"));
            $image = "Post_Image_".rand(1,5).".jpg";
            $posts[] = [
                'author_id' => rand(1,3),
                'title' => $faker->sentence(rand(8,12)),
                'except' => $faker->text(rand(50,100)),
                'body' => "akldjadkjasdk adlkasjlkasjdkasdjasdlkajsdlasdlkasjd
                aslkdjaskdjklasdjasjdlksadjksldlkasjdklasjd",
                'slug' => $faker->slug(),
                'image' => rand(0,1) == 1 ? $image : NULL,
                'created_at' => $date,
                'updated_at' => $date
            ];
        }
        DB::table('posts')->insert($posts);

    }
}
