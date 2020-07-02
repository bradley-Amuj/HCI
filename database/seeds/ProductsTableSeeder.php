<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name'=>'grey gate',
            'slug'=>'grey gate',
            'category'=>'garden',
            'description'=>'hardened iron ore gate',
            'price'=>25000,


        ]);
    }
}
