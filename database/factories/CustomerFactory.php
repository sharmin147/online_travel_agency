<?php

// database/factories/CustomerFactory.php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Facades\Hash;
class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->uuid, // Generating a UUID for customer_id
            'first_name' => $this->faker->firstname,
            'last_name' => $this->faker->lastName,
            'email'=>$this->faker->email,
            // Other attributes and their respective Faker methods
        ];
    }


}

