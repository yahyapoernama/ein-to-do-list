<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
        $name = fake()->unique()->name();
        $sysName = strtolower(str_replace([' ', '.'], '', $name));

        return [
            'name' => $name,
            'email' => $sysName . '@aliasesein.com',
            'email_verified_at' => now(),
            'role' => 'User',
            'username' => $sysName,
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }


    public function admin()
    {
        return $this->state(fn (array $attributes) => [
            'name' => 'Admin ' . $attributes['name'],
            'email' => 'admin_' . $attributes['email'],
            'role' => 'Admin',
            'username' => 'admin_' . $attributes['username'],
            'password' => static::$password ??= Hash::make('admin123'),
        ]);
    }
}
