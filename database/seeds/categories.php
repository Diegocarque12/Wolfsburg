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
        	'description' => 'Lo mas apetitoso en carnes del restaurante.'
        ]);

        category::create([
            'name' => 'Postres',
            'description' => 'Lo mas apetitoso en postres del restaurante'
        ]);

        category::create([
            'name' => 'Pastas',
            'description' => 'Lo mas apetitoso en pastas  del restaurante'
        ]);

        category::create([
            'name' => 'Bebidas',
            'description' => 'Todo lo que se puede servir en vasos.'
        ]);

        category::create([
            'name' => 'Ensaladas',
            'description' => 'Lo mas apetitoso en ensaladas del restaurante'
        ]);
    }
}
