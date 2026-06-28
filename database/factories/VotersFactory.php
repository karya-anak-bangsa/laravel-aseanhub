<?php

namespace Database\Factories;

use App\Models\Voters;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class VotersFactory extends Factory
{
    # ...
    protected $model = Voters::class;

    public function definition(): array
    {
        # ...
        $this->faker = \Faker\Factory::create('id_ID');

        $ip_address = [
            '192.168.1.10',
            '192.168.1.11',
            '192.168.1.12',
            '10.0.0.5',
            '10.0.0.6',
            '10.200.16.1',
            '10.200.16.2',
        ];

        return [
            'voters_name'    => $this->faker->name(),
            'voters_country' => $this->faker->randomElement([
                'Brunei Darussalam',
                'Cambodia',
                'Indonesia',
                'Laos',
                'Malaysia',
                'Myanmar',
                'Philippines',
                'Singapore',
                'Thailand',
                'Vietnam',
                'Other Country',
            ]),
            'ip_address'     => $this->faker->randomElement($ip_address),
            'mac_address'    => $this->faker->macAddress(),
            'email'          => $this->faker->unique()->safeEmail(),
            'password'       => Hash::make('12341234'),
            'otp_code' => null,
            'otp_expired_at' => null,
            'email_verified_at' => now(),
        ];
    }
}
