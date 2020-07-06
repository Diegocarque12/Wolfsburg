<?php

use Illuminate\Database\Seeder;
use App\productMenu;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productMenu::create([
        	'name' => 'Coca Cola',
        	'price' => '2',
        	'description' => 'La mejor bebida.',
        	'category_id' => '1'
        ]);

        productMenu::create([
        	'name' => 'Fanta',
        	'price' => '3',
        	'description' => 'La fanta es la Fanta.',
        	'category_id' => '1'
        ]);

        productMenu::create([
            'name' => 'Camarones',
            'price' => '10',
            'description' => 'Camarones al ajillo y matequilla de la casa',
            'category_id' => '2'
        ]);
    }
}
