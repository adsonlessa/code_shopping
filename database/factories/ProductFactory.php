<?php

use Faker\Generator as Faker;

$factory->define(CodeShopping\Models\Product::class, function (Faker $faker) {
    return [        
         'name' =>$faker->city, 
        //Slug é criado no model
         'description' =>$faker->text($maxNbChars=255),
         'price' =>$faker->randomFloat(2,100,1000), 
         // stock é default 0 na migration;
         // 'stock' =>$faker->randomFloat(0,100,1000)
    ];
});
