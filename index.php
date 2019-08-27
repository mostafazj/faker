<?php
require __DIR__ . '/../vendor/autoload.php';
$faker = Faker\Factory::create();

$input = ($_POST['bottom']);
$input2 = ($_POST['bottom2']);
        for ($i = 1; $i <= $input2; $i++) {
            $Name[$i] = $faker->name;
        }
        for ($i = 1; $i <= $input2; $i++) {
            $Address[$i] = $faker->address;
        }
        for ($i = 1; $i <= $input2; $i++) {
            $Email[$i] = $faker->email;
        }
        for ($i = 1; $i <= $input2; $i++) {
            $Text[$i] = $faker->text;
        }
        for ($i = 1; $i <= $input2; $i++) {
            $City[$i] = $faker->city;
        }
        if ($input == "name") {
            $_GET = $Name;
        } elseif ($input == "address") {
            $_GET = $Address;
        } elseif ($input == "email") {
            $_GET = $Email;
        } elseif ($input == "text") {
            $_GET = $Text;
        } elseif ($input == "city") {
            $_GET = $City;
        }
