<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Berita;
use Faker\Generator as Faker;

$factory->define(Berita::class, function (Faker $faker) {
    return [  
        'judul' => $faker->sentence(),  
        'slug' => \Str::slug($faker->sentence()),
        'isi' => $faker->paragraph(10),
        'gambar' => $faker->sentence().'.jpg',
        'author' => $faker->name,
    ];
});
