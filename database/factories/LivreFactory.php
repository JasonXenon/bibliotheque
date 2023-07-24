<?php

namespace Database\Factories;

use App\Models\Auteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genres = ['Fiction', 'Non-fiction', 'Science Fiction', 'Romance', 'Thriller'];


        return [
            'title'=>fake()->title(),
            'ISBN'=>fake()->isbn13(),
            'dateParution'=>fake()->dateTimeBetween('-2 years, -30 days'),
            'genre' => $genres[array_rand($genres)],
            'aut_id' => Auteur::get()->random()->id,
            'nbr_exemplaires' => fake()->numberBetween(5, 15),
            'emprunts' => 0,
            'disponible'=> true,
        ];
    }
}
