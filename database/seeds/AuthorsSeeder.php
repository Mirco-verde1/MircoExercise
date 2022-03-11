<?php

use App\Author;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            # code...
            $author = new Author();
            $author->name = $faker->name();
            $author->surname = $faker->lastName();
            $author->birth = $faker->date();
            $author->save();

        }
    }
}
