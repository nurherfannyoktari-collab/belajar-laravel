<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Mahasiswa::factory(10)->create();
        //DB::table('mahasiswas')->insert([
           // [
                //'name' => 'Oktari',
                //'email' => 'nurherfannyoktari@gmail.com',
                //'no_hp' =>'086547891452',
            
            //],
        //]);
    }
}
