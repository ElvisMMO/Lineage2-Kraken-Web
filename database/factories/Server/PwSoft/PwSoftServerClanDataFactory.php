<?php

namespace Database\Factories\Server\PwSoft;

use Illuminate\Database\Eloquent\Factories\Factory;

//Фейковые данные для тестирования PwSoft
class PwSoftServerClanDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // `account_name` VARCHAR(45) DEFAULT NULL,
    // `obj_Id` INT UNSIGNED NOT NULL DEFAULT 0,
    // `char_name` VARCHAR(35) NOT NULL,
    // `pvpkills` SMALLINT UNSIGNED DEFAULT NULL,
    // `pkkills` SMALLINT UNSIGNED DEFAULT NULL,
    // `classid` TINYINT UNSIGNED DEFAULT NULL,
    // `clanid` INT UNSIGNED DEFAULT NULL,
     public function definition()
     {
         return [
             'clan_id' => fake()->unique()->randomElement([4 , 5 , 6]),
             'clan_name' => fake()->unique()->randomElement(['clan_test_name_1_pwsoft' , 'clan_test_name_2_pwsoft' , 'clan_test_name_3_pwsoft']),
             'clan_level' => fake()->randomElement([1 , 2 , 3]),
             'reputation_score' => fake()->randomElement([10 , 20 , 5 , 3]),
             'hasCastle' =>  fake()->randomElement([0 , 1 , 0 , 0]),
         ];
     }
}