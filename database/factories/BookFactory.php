<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [

        // "title" => $this->$faker->title,
        // "year" => $this->$faker->year,
        // "category" => $this->$faker->category,
        // "description" => $this->$faker->description,
        // "author" => Author::factory()->create(),
        // "title" => $this->$faker->title,


    ];
});
