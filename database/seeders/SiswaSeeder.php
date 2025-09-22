<?php

namespace Database\Seeders;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Siswa::factory(20)->create();
        DB::table('siswas')->insert([
           [
                'nama' => 'Oktari',
                'kelas' => 'RPL-1A',
                'jurusan' =>'Rekayasa Perangkat Lunak',
            
            ],
        ]);
    }
}
