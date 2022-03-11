<?php

use App\Author;
use App\Book;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class BooksSeeder extends Seeder
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
            $book = new Book();
            $book->title = $faker->sentence();
            $book->year = $faker->date();
            $book->category = $faker->text();
            $book->description = $faker->text();
            $book->author_id = rand(1,20);

            $book->save();

        }
    }
}
