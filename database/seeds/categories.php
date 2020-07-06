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
        	'name' => 'Bebidas',
        	'description' => 'Todo lo que se puede servir en vasos.'
        ]);

        category::create([
            'name' => 'Alimentos',
            'description' => 'Lo mas apetitoso del restaurante'
        ]);
    }
}
