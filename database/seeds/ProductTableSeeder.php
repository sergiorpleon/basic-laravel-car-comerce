<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
                'name' => 'Belt',
                'slug' => 'belt',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 255.00,
                'image' => 'http://127.0.0.1:8000/image/image1.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 3,
            ],
            [
                'name' => 'Boots',
                'slug' => 'boot',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 300.00,
                'image' => 'http://127.0.0.1:8000/image/image2.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1,
            ],
            [
                'name' => 'Briefcase',
                'slug' => 'briefcase',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 300.00,
                'image' => 'http://127.0.0.1:8000/image/image3.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 4,
            ],
            [
                'name' => 'Carry',
                'slug' => 'carry',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 310.00,
                'image' => 'http://127.0.0.1:8000/image/image4.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 4,
            ],
            [
                'name' => 'Casual',
                'slug' => 'casual',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, explicabo.',
                'price' => 200.00,
                'image' => 'http://127.0.0.1:8000/image/image5.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 3,
            ],
            [
                'name' => 'Dufell bag',
                'slug' => 'dufell-bag',
                'description' => 'lorem20',
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'price' => 230.00,
                'image' => 'http://127.0.0.1:8000/image/image6.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 4,
            ],
            [
                'name' => 'Hats cap',
                'slug' => 'hats-cap',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 255.00,
                'image' => 'http://127.0.0.1:8000/image/image7.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2,
            ],
            [
                'name' => 'Laptop bag',
                'slug' => 'laptop-bag',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 300.00,
                'image' => 'http://127.0.0.1:8000/image/image8.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 4,
            ],
            [
                'name' => 'Loafer',
                'slug' => 'loafer',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 300.00,
                'image' => 'http://127.0.0.1:8000/image/image9.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1,
            ],
            [
                'name' => 'Luxury',
                'slug' => 'luxury',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 310.00,
                'image' => 'http://127.0.0.1:8000/image/image10.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 3,
            ],
            [
                'name' => 'Oxfprd',
                'slug' => 'oxfprd',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, tenetur fugiat sed deserunt omnis illum. Minima laborum dolores placeat deserunt. Los heroes estan de moda, usa una de estas y para que este de moda',
                'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, explicabo.',
                'price' => 200.00,
                'image' => 'http://127.0.0.1:8000/image/image11.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1,
            ],
            [
                'name' => 'Scaver',
                'slug' => 'scaver',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, tenetur fugiat sed deserunt omnis illum. Minima laborum dolores placeat deserunt. Los heroes estan de moda, usa una de estas y para que este de moda',
                'extract' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'price' => 230.00,
                'image' => 'http://127.0.0.1:8000/image/image12.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2,
            ],
            [
                'name' => 'Sneaker',
                'slug' => 'sneaker',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 300.00,
                'image' => 'http://127.0.0.1:8000/image/image13.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1,
            ],
            [
                'name' => 'Sport',
                'slug' => 'sport',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto dolores eius fuga ipsum eos, at adipisci aut ipsam enim obcaecati.',
                'extract' => 'Lorem input bla bla',
                'price' => 310.00,
                'image' => 'http://127.0.0.1:8000/image/image14.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 3,
            ],
            [
                'name' => 'Sunglasses',
                'slug' => 'sunglasses',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, tenetur fugiat sed deserunt omnis illum. Minima laborum dolores placeat deserunt. Los heroes estan de moda, usa una de estas y para que este de moda',
                'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, explicabo.',
                'price' => 200.00,
                'image' => 'http://127.0.0.1:8000/image/image15.jpg',
                'visible' => TRUE,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2,
            ]

        );

        Product::insert($data);
    }
}
