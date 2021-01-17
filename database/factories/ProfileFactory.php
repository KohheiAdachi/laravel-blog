<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'birthday' => $this->faker->dateTimeBetween('-100 years', '-18 years'),
            'author_id' => function () {
                return Author::factory()->create()->id;
            },
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'website' => $this->faker->domainName,
        ];
    }
}
