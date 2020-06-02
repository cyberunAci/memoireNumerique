<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Media;
use Faker\Generator as Faker;

$factory->define(Media::class, function (Faker $faker) {
    return [
        'video' => $faker->firstName,
        'image' => 'https://www.youtube.com/yts/img/yt_1200-vflhSIVnY.png',
        'id_type' => 1
    ];
});
