<?php

namespace Database\Seeders;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::factory(10)->create();
       // DB::table('products')->insert([
          //  [
               // 'name' => 'Oktari Nurherfanny',
               // 'price' => '456734681',
               // 'description' =>'saya mahasiswa prodi sistem informasi',
            
          //  ],
        //]);
    }
}
