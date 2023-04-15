<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    protected $model = Produit::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reference'=>$this->faker->randomNumber(6),
            'designation'=>$this->faker->word,
            'prix'=>$this->faker->numberBetween(10,100),
            'tva'=>$this->faker->numberBetween(1,5),
            'quantite'=> $this->faker->numberBetween(0,100),
            'description'=>$this->faker->sentence(random_int(10,30))
        ];
    }
}
