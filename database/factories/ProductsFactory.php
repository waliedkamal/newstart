<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\products;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {
    return [
                    
        'pro_name'=>$faker->sentence(3),
        'pro_rice'=>$faker->randomDigit(100),          
        'pro_desc'=>$faker->paragraph(10),          
        'pro_image'=>'https://picsum.photos/200/300',        

    
    ];
});
