<?php

namespace Database\Factories;

use App\Models\Balance;
use Illuminate\Database\Eloquent\Factories\Factory;

class BalanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Balance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $r = [];
        //     'name' => $this->faker->name()
        $r['user_id'] = $this->faker->numberBetween(1, 10);
        $r['value'] = $this->faker->numberBetween(-1000, 10000);
        $r['balance'] = $this->faker->numberBetween(-5001, 5010);

        return $r;
    }

}
