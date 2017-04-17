<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            Patient::create([
                'name' => $faker->name,
                'gender' => 'male',
                'birth_date' => $faker->date(),
                'birth_place' => $faker->city,
                'occupation' => $faker->jobTitle,
                'marital_status' => 0,
                'address' => $faker->address,
                'blood_type' => 'A',
                'id_card_number'=> $faker->randomNumber(6),
                'parent_name' => $faker->name,
                'n_families' => $faker->randomNumber(1)
            ]);
        }
    }
}
