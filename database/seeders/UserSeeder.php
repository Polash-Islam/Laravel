<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;  // Import the User model
use Illuminate\Support\Facades\Hash;  // Import Hash for password hashing

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'polash Islam',  
            'email' => 'polashprince2@gmail.com', 
            'password' => Hash::make('12345678'),  
        ]);
    }
}
