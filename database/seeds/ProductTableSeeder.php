<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=> 'Olive Oil',
            'description'=> 'cold press healthy pure oilve oil',
            'price'=>5,
            'img'=>'olive'
        ]);

        Product::create([
            'name'=> 'Macadonia Oil',
            'description'=> 'cold press healthy pure Macadonia oil',
            'price'=>3,
            'img'=>'macadonia'
        ]);

        Product::create([
            'name'=> 'Almond',
            'description'=> 'cold press healthy pure almond oil',
            'price'=>2,
            'img'=>'almond'
        ]);

        Product::create([
            'name'=> 'Black Seed oil',
            'description'=> 'cold press healthy pure black seed oil',
            'price'=>1,
            'img'=>'blackSeed'
        ]);

        Product::create([
            'name'=> 'coconut Oil',
            'description'=> 'cold press healthy pure cocount oil',
            'price'=>6,
            'img'=>'coconut'
        ]);

    }
}
