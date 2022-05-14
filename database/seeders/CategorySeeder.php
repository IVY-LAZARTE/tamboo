<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            
            [
                'id' => 2,
                'name' => 'Lácteos Lajeñita',
                'responsable' => 'Esther Guadalupe Mendez',
                'slug' => Str::slug('Lacteos Lajeñita'),
                'numero_contacto' => 77283762,
                'numero_cuenta' => 111111,
                'user_id' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Lácteos del Campo - Sach Ltda',
                'responsable' => 'Marisol Poma',
                'slug' => Str::slug('Lácteos del Campo - Sach Ltda'),
                'numero_contacto' => 77736169,
                'numero_cuenta' => 222222,
                'user_id' => 3,
            ],

            [
                'id' => 4,
                'name' => 'Tiwanaku',
                'responsable' => 'Wilfredo Pablo Marin Parra',
                'slug' => Str::slug('Tiwanaku'),
                'numero_contacto' => 71263529,
                'numero_cuenta' => 333333,
                'user_id' => 4,
            ],

            [
                'id' => 5,
                'name' => 'Lácteos de Altiplano',
                'responsable' => 'Richard Ajno',
                'slug' => Str::slug('Lacteos de Altiplano'),
                'numero_contacto' => 71523688,
                'numero_cuenta' => 4444444,
                'user_id' => 5,
            ],
            [
                'id' => 6,
                'name' => 'Amalic',
                'responsable' => 'Carmela Condori P.',
                'slug' => Str::slug('Amalic'),
                'numero_contacto' => 71964961,
                'numero_cuenta' => 555555,
                'user_id' => 6,
            ],
            [
                'id' => 7,
                'name' => 'Crismar Lácteos',
                'responsable' => 'Silvia Cristina Mayta Solíz',
                'slug' => Str::slug('Crismar Lacteos'),
                'numero_contacto' => 73566203,
                'numero_cuenta' => 666666,
                'user_id' => 7,
            ],
            [
                'id' => 8,
                'name' => 'Rosita',
                'responsable' => 'Amalia Rosa Mamani ',
                'slug' => Str::slug('Rosita'),
                'numero_contacto' => 72073618,
                'numero_cuenta' => 777777,
                'user_id' => 8,
            ],
           
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();
        }

    }
}
