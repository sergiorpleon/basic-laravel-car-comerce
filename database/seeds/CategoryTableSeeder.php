<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
            [
                'name' => 'Shoes',
                'slug' => 'shoes',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                'color' => '#448822',
            ],
            [
                'name' => 'Accesories',
                'slug' => 'accesories',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                'color' => '#445500',
            ],
            [
                'name' => 'Watches',
                'slug' => 'watches',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                'color' => '#445500',
            ],
            [
                'name' => 'Bags',
                'slug' => 'bags',
                'description' => 'Los heroes estan de moda, usa una de estas y para que este de moda',
                'color' => '#445500',
            ]
        );

        Category::insert($data);
    }
}
