<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Julio',
                'last_name' => 'Cesar',
                'email' => 'jc@gmail.com',
                'user' => 'admin',
                'password' => \Hash::make('123456'),
                'type' => 'admin',
                'active' => 1,
                'address' => 'Dir calle 1 e/ 2 y 3',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                
            ],
            [
                'name' => 'pepe',
                'last_name' => 'perez',
                'email' => 'pepe@gmail.com',
                'user' => 'user',
                'password' => \Hash::make('123456'),
                'type' => 'user',
                'active' => 1,
                'address' => 'Dir calle 1 e/ 2 y 3',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]
        );

        User::insert($data);
    }
}
