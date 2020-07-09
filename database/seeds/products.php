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
        	'name' => 'Filet Mignon',
        	'price' => '2',
        	'category_id' => '1'
        ]);

        productMenu::create([
        	'name' => 'New York Steak',
        	'price' => '2',
        	'category_id' => '1'
        ]);

        productMenu::create([
        	'name' => 'T-bone',
        	'price' => '3',
        	'category_id' => '1'
        ]);

        productMenu::create([
        	'name' => 'Tarta de chocolate',
        	'price' => '2',
        	'category_id' => '2'
        ]);

        productMenu::create([
        	'name' => 'Tiramisu',
        	'price' => '2',
        	'category_id' => '2'
        ]);

        productMenu::create([
        	'name' => 'Crepe',
        	'price' => '3',
        	'category_id' => '2'
        ]);

        productMenu::create([
            'name' => 'Alfajores',
            'price' => '10',
            'category_id' => '2'
        ]);
        productMenu::create([
        	'name' => 'Macaroni',
        	'price' => '2',
        	'category_id' => '3'
        ]);

        productMenu::create([
        	'name' => 'Farfalle',
        	'price' => '2',
        	'category_id' => '3'
        ]);

        productMenu::create([
        	'name' => 'Fettuchine',
        	'price' => '3',
        	'category_id' => '3'
        ]);
        productMenu::create([
        	'name' => 'Refresco natural',
        	'price' => '2',
        	'category_id' => '4'
        ]);

        productMenu::create([
        	'name' => 'Cappuccino regular',
        	'price' => '2',
        	'category_id' => '4'
        ]);

        productMenu::create([
        	'name' => 'Vino Blanco',
        	'price' => '3',
        	'category_id' => '4'
        ]);

        productMenu::create([
            'name' => 'Vino tinto',
            'price' => '10',
            'category_id' => '4'
        ]);

        productMenu::create([
        	'name' => 'Ensalada rusa',
        	'price' => '2',
        	'category_id' => '5'
        ]);

        productMenu::create([
        	'name' => 'Ensalada Olivier',
        	'price' => '2',
        	'category_id' => '5'
        ]);

        productMenu::create([
        	'name' => 'Ensalada Caprese',
        	'price' => '3',
        	'category_id' => '5'
        ]);



        
    }
}
