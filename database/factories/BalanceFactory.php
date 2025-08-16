<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Enums\ActiveEnum;
use App\Enums\UserTypeEnum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BalanceFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'balance' => $balance = fake()->randomFloat(2, 100, 1000),
            'used_balance' => $used_balance = abs(fake()->randomFloat(2, 100, 1000) - $balance),
            'remain_balance' => abs($balance - $used_balance),
            'user_id' => User::all()->random()->id,
            'active' => ActiveEnum::ACTIVE,
            'created_by' => 1,
        ];
    }
}