<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->mimeType(),
            'descrizione' => fake()->paragraph(),
            'data_inizio' => fake()->date(),
            'data_fine' => fake()->date(),
            'stato' => fake()->randomElement(['In progettazione', 'Completato', 'In test', 'Da sviluppare']),
            'priorità' => fake()->randomElement(['Alta', 'Bassa']),
            'responsabile' => fake()->name(),
            'img_path' => fake()->imageUrl(360, 360, 'Projects', true, 'project', true)
        ];
    }
}
