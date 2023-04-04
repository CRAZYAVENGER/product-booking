<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserO extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Jonny',
            'last_name' => 'Doe',
            'email' => 'jonny@test.com',
            'mobile' => '123123123',
        ]);
    }
}
