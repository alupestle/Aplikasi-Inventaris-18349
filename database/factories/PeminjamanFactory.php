<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Peminjaman::class;

    public function definition(): array
    {
        return [
            'id_peminjam' => $this->faker->randomNumber(),
            'tanggal_pinjam' => $this->faker->date(),
            'tanggal_kembali' => $this->faker->optional()->date(),
            'status_peminjaman' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
