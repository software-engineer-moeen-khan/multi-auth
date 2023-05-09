<?php

use Faker\Generator as Faker;
use Moeen\Multiauth\Model\Permission;

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
