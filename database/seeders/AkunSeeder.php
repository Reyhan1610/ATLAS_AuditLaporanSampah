<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name'=>'Admin',
                'isAdmin'=>true,
                'password'=> bcrypt('admin123'),
            ],
            [
                'username' => 'guest',
                'name'=>'Guest',
                'isAdmin'=>false,
                'password'=> bcrypt('guest123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
