<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $factory = $this->faker;
        //$status = config('customer.status');
        return [
            'user_id' => 1,
            'name' =>$factory->name,
            'contacted_at' => $factory->date('Y-m-d'),
            'status' => 'Active',
        ];
    }
}
