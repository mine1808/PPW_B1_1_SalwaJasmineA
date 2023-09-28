<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->text(50),
            'harga' => $this->faker->numberBetween(10, 1000),
            'stok' => $this->faker->numberBetween(1, 100),
            'id_suplier' => $this->faker->uuid, 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
