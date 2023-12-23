<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'shop_id' => Shop::factory(),
            'date' => $this->faker->date(),
            'number' => $this->faker->numberBetween(1,10)
        ];
    }
}
