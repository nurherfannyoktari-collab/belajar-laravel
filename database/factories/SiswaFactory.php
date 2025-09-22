<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
            'nama'    => fake()->name(),
            'kelas'   => fake()->randomElement(['RPL-1A', 'TKJ-1B', 'RPL-2A']),
            'jurusan' => fake()->randomElement(['Rekayasa Perangkat Lunak', 'Teknik Komputer Dan Jaringan ']),
        
        ];
    }
}
