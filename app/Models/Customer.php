<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;
    protected $fillable=[

    ];


     /**
    * Get all of the + for the Customer
    *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function definition(): array
    {
    $status = $this->faker->randomElement(['B','P','V']);
    return [
    'customer_id' => Customer::factory(),
    'amount' => $this->faker->numberBetween(100,20000),
    'status'=> $status,
    'billed_dated' => $this->faker->dateTimeThisDecade(),
    'paid_dated' => $status == 'P' ? $this->faker->dateTimeThisDecade() : NULL,
    ];
    }
}