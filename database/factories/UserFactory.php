<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $domains = ['gmail.com', 'yandex.ru', 'mail.ru'];
    public function definition(): array
    {
        $randomDomain = $this->faker->randomElement($this->domains);
        return [
            'name' => fake('ru_RU')->firstName(),
//            'email' => fake('ru_RU')->unique()->safeEmail($randomDomain),
            'email' => $this->faker->unique()->safeEmail($randomDomain),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
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

    public function configure()
    {
        return $this->afterCreating(function ($user) {
            $user->email = $this->generateRandomEmail($user->name);
            $user->save();
        });
    }

    private function generateRandomEmail($name)
    {
        $domains = ['gmail.com', 'yandex.ru', 'mail.ru'];
        $randomDomain = $this->faker->randomElement($domains);

        // Генерируем email на основе имени пользователя и случайного домена
        return strtolower(str_replace(' ', '', $name)) . '@' . $randomDomain;
    }
}
