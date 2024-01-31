<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
 // 2: BusinessUnit 3:Manager
 $users = [
       
        [
            'name'=>'Affiq',
            'email'=>'Affiq@uniten.edu.my',
            'password'=> bcrypt('Affiq0302'),
            'user_level' => 2
        ],
        [
            'name'=>'Hasif',
            'email'=>'Hasif@uniten.edu.my',
            'password'=> bcrypt('Hasif1303'),
            'user_level' => 3
        ],

    ];
    
    // foreach item in the $users array (above), create user
    foreach ($users as $key => $user) {
    User::create($user);
    }
}

}
