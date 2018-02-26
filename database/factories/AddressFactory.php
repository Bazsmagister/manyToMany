<?php

use App\Customer;
use Faker\Generator as Faker;

$factory->define(App\Address::class, function (Faker $faker) {
    //static $increment = 1;  
    return [
          //'student_id' => function () {
        //    return factory(App\User::class)->create()->id;
        //},
        //'student_id'=> $faker->numberBetween($min = 1, $max = 10),
        /*
        'student_id' => function () {
            $values = [];
            for ($i = 0; $i < 10; $i++) {
                // get a random digit, but always a new one, to avoid duplicates
                return $values[] = $faker->unique()->randomDigit;
            }
        },
        */
       
        //'customer_id' => ($increment++) ,

        'customer_id' => $faker->unique()->randomElement($array = array ('1','2','3','4','5','6','7','8','9','10'), $count = 1),
        //'customer_id' => App\Customer::inRandomOrder()->first()->id,
        //'customer_id' => $faker->unique()->numberBetween(1,10),
        'zip'=> $faker->numberBetween($min = 1000, $max = 9999),
        'city'=> $faker->smallerCity,
        'street_name' => $faker->streetName,
        'street_number' => $faker->buildingNumber, //numberBetween($min = 1, $max = 200),
        
        'created_at'=> $faker->dateTimeBetween($startDate = '-5 years', $endDate = '-3 years', $timezone = null),
        'updated_at'=> $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
       

    ];
});
