<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;
use Faker\Factory as Faker;
class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = Faker::create();

        for($i = 1; $i <= 10; $i++){
        $student = new Students;
        $student->name = $Faker->name;
        $student->email= $Faker->email;
        $student->gender = "M";
        $student->DOB = $Faker->date;
        $student->address = $Faker->address;
        $student->state = $Faker->state;
        $student->country = $Faker->country;
        $student->password = $Faker->password;
        $student->status = $Faker->boolean;
        $student->points = 20;
        $student->save();
        }
    }
}
