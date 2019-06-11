<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
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
                'name' => 'adultos',
                'slug' => 'adultos',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                
            ],
            [
                'name' => 'joven',
                'slug' => 'joven',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                
            ],
            [
                'name' => 'ninnos',
                'slug' => 'ninnos',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                
            ],
            [
                'name' => 'masculino',
                'slug' => 'masculino',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                
            ],
            [
                'name' => 'femenino',
                'slug' => 'femenino',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                
            ],
            [
                'name' => 'ancianos',
                'slug' => 'ancianos',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                
            ]
        );

        Tag::insert($data);

    }
}
