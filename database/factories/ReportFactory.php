<?php

namespace Database\Factories;

use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => "2", // Example of creating a new user and using its ID
            'nama_bencana' => $this->faker->word,
            'tanggal_kejadian' => $this->faker->date,
            'id_jeniskejadian' => $this->faker->numberBetween(1, 3),
            'keterangan' => $this->faker->sentence,
            'timestamp_report' => now(),
            'status' => $this->faker->randomElement(['On Process', 'Selesai', 'Belum Diverifikasi']),
            'lokasi_longitude' => $this->faker->longitude,
            'lokasi_latitude' => $this->faker->latitude,
        ];
    }
}
