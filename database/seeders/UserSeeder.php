<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $user = User::create([
            'name' => 'Xuannt',
            'email' => 'xuannt@axalize.vn',
            'role' => 1,
            'password' => Hash::make('Abcd1234')
        ]);

        $user = User::create([
            'name' => 'XuanntAdmin',
            'email' => 'xuannt1902@gmail.com',
            'role' => 1,
            'password' => Hash::make('Abcd1234')
        ]);
        
    }
}
