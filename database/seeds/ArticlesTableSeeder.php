<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $articles = new Article();

            $articles->title = $faker->sentence(2);
            $articles->subtitle = $faker->text(20);
            $articles->author = $faker->name();
            $articles->text = $faker->text(150);
            $articles->pubblication_date = $faker->datetime();


            $articles->save();

        }
    }
}
