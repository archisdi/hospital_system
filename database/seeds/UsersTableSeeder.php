<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ 
            'name' => 'Administrator',
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'Edwina anky parande',
            'username' => 'edwinanki',
            'role' => 'doctor',
            'password' => bcrypt('edwinanki')
        ]);

        User::create([
            'name' => 'Puruhita Ananda A',
            'username' => 'puruhita',
            'role' => 'doctor',
            'password' => bcrypt('puruhita')
        ]);

        User::create([
            'name' => 'Achika Fauzia A',
            'username' => 'achika',
            'role' => 'doctor',
            'password' => bcrypt('achika')
        ]);

        User::create([
            'name' => 'Jonathan Robert',
            'username' => 'jonathan',
            'role' => 'doctor',
            'password' => bcrypt('jonathan')
        ]);

    }
}
