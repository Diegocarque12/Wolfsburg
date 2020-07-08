<?php

use Illuminate\Database\Seeder;
use App\category;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
        	'name' => 'Carnes',
        	'description' => 'Todo lo que se puede servir en vasos.'
        ]);

        category::create([
            'name' => 'Postres',
            'description' => 'Lo mas apetitoso del restaurante'
        ]);

        category::create([
            'name' => 'Pastas',
            'description' => 'Lo mas apetitoso del restaurante'
        ]);

        category::create([
            'name' => 'Bebidas',
            'description' => 'Lo mas apetitoso del restaurante'
        ]);

        category::create([
            'name' => 'Ensaladas',
            'description' => 'Lo mas apetitoso del restaurante'
        ]);
    }
}
