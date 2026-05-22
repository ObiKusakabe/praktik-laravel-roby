<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nim' => $this->faker->unique()->numerify('##########'),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Administrasi Bisnis']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
