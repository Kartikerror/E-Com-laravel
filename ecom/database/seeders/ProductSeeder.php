<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')
        ->insert([
            [
            'name'=>'LG Mobile',
            'price'=>'10000',
            'description'=>'a smartphone with 4gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQflfKP43E_JRTEGs0Jc69917xF7wX8D3UlVg&usqp=CAU'
            ],
            [
            'name'=>'Samsung Mobile',
            'price'=>'15000',
            'description'=>'a smartphone with 8gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7dQMIMfQBSt9L-4ZRA5EPTHp__1Xco9c3rQ&usqp=CAU'
            ],
            [
            'name'=>'LG Fridge',
            'price'=>'20000',
            'description'=>'a fridge with much more feature',
            'category'=>'fridge',
            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjgjEVrwBar637eI87uM7hC6cT6FQ0IP4oJQ&usqp=CAU'
            ],
            [
            'name'=>'Samsung Fridge',
            'price'=>'50000',
            'description'=>'a Fridge with much more feature',
            'category'=>'fridge',
            'gallery'=>'2wCEAAoHCBUVFRgVFRYYGRgaGRgaGBgYGBoaGhgaHhgaGRgYGBkcIS4lHB4rIRoYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8PGBERGDEhGB0xMTQ0MTExMTQxMTE0NDExNDExMTQxMTExMTExNDExNDExMTQxMTExMTExMTExMTExMf'
            ],
            [
            'name'=>'LG TV',
            'price'=>'25000',
            'description'=>'a tv with much more feature',
            'category'=>'tv',
            'gallery'=>'https://png.pngtree.com/element_our/20190531/ourmid/pngtree-realistic-stereo-product-physical-lcd-tv-png-image_1322808.jpg'
            ],
            [
            'name'=>'Samsung TV',
            'price'=>'40000',
            'description'=>'a smarttv with much more feature',
            'category'=>'tv',
            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQflfKP43E_JRTEGs0Jc69917xF7wX8D3UlVg&usqp=CAU'
            ],
        ]);
    }
}
