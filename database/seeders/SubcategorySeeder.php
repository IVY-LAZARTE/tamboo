<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* empresa 1 */
            [
                'category_id' => 2,
                'name' => 'quesos',
                'slug' => Str::slug('quesos'),
              
            ],

            [
                'category_id' => 2,
                'name' => 'leches',
                'slug' => Str::slug('leches'),
            ],

            [
                'category_id' => 2,
                'name' => 'yogurt',
                'slug' => Str::slug('yogurt'),
            ],
            [
                'category_id' => 2,
                'name' => 'mantequilla',
                'slug' => Str::slug('mantequilla'),
            ],
            /*Empresa 2*/
            [
                'category_id' => 3,
                'name' => 'quesos',
                'slug' => Str::slug('quesos'),
            ],

            [
                'category_id' => 3,
                'name' => 'leches',
                'slug' => Str::slug('leches'),
            ],

            [
                'category_id' => 3,
                'name' => 'yogurt',
                'slug' => Str::slug('yogurt'),
            ],
            [
                'category_id' => 3,
                'name' => 'mantequilla',
                'slug' => Str::slug('mantequilla'),
            ],
            /*empresa 3*/
            [
                'category_id' => 4,
                'name' => 'quesos',
                'slug' => Str::slug('quesos'),
            ],

            [
                'category_id' => 4,
                'name' => 'leches',
                'slug' => Str::slug('leches'),
            ],

            [
                'category_id' => 4,
                'name' => 'yogurt',
                'slug' => Str::slug('yogurt'),
            ],
            [
                'category_id' => 4,
                'name' => 'mantequilla',
                'slug' => Str::slug('mantequilla'),
            ],
            /*empresa 4*/
            [
                'category_id' => 5,
                'name' => 'quesos',
                'slug' => Str::slug('quesos'),
                
            ],

            [
                'category_id' => 5,
                'name' => 'leches',
                'slug' => Str::slug('leches'),
            ],

            [
                'category_id' => 5,
                'name' => 'yogurt',
                'slug' => Str::slug('yogurt'),
            ],
            [
                'category_id' => 5,
                'name' => 'mantequilla',
                'slug' => Str::slug('mantequilla'),
            ],
            /*empresa 5*/
            [
                'category_id' => 6,
                'name' => 'quesos',
                'slug' => Str::slug('quesos')
            ],

            [
                'category_id' => 6,
                'name' => 'leches',
                'slug' => Str::slug('leches'),
            ],

            [
                'category_id' => 6,
                'name' => 'yogurt',
                'slug' => Str::slug('yogurt'),
            ],
            [
                'category_id' => 6,
                'name' => 'mantequilla',
                'slug' => Str::slug('mantequilla'),
            ],
              /*empresa 6*/
              [
                'category_id' => 7,
                'name' => 'quesos',
                'slug' => Str::slug('quesos')
            ],

            [
                'category_id' => 7,
                'name' => 'leches',
                'slug' => Str::slug('leches'),
            ],

            [
                'category_id' => 7,
                'name' => 'yogurt',
                'slug' => Str::slug('yogurt'),
            ],
            [
                'category_id' => 7,
                'name' => 'mantequilla',
                'slug' => Str::slug('mantequilla'),
            ],
              /*empresa 7*/
              [
                'category_id' => 8,
                'name' => 'quesos',
                'slug' => Str::slug('quesos')
            ],

            [
                'category_id' => 8,
                'name' => 'leches',
                'slug' => Str::slug('leches'),
            ],

            [
                'category_id' => 8,
                'name' => 'yogurt',
                'slug' => Str::slug('yogurt'),
            ],
            [
                'category_id' => 8,
                'name' => 'mantequilla',
                'slug' => Str::slug('mantequilla'),
            ],
        ];

        foreach ($subcategories as $subcategory) {
            

            Subcategory::create($subcategory);

        }
    }
}
