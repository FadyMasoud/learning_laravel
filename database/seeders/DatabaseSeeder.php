<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;   // optional
use App\Models\User;                   // optional (for factory or Eloquent insert)


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
//     public function run(): void
// {

//     // \App\Models\User::factory(10)->create();
//     DB::table('users')->insert([
//         'name' => 'Admin User',
//         'email' => 'admin@example.com',
//         'password' => bcrypt('123456'),
//     ]);
// }

 public function run(): void
    {
        // 10 random users
        User::factory(10)->create();
        

        // 1 known admin
        User::factory()->create([
            'name'     => 'foyda',
            'email'    => 'foyda@example.com',
            'password' => Hash::make('123456'),
        ]);
    }


}
