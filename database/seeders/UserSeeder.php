<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Kimberly Vargas',
            'email' => 'kimvargas@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(99)->create();
    }
}
