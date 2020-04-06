<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //ユーザファクトリを実行して、IDと紐付け　
        'user_id' => factory(\App\User::class),
        'title' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraph
    ];});
