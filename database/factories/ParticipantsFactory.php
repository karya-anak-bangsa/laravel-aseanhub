<?php

namespace Database\Factories;

use App\Models\Participants;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ParticipantsFactory extends Factory
{
    protected $model = Participants::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('id_ID');
        $members = $this->faker->numberBetween(1, 5);

        return [
            'team_name'               => $this->faker->company,
            'participants_name_1' => $this->faker->name,
            'participants_name_2' => $members >= 2 ? $this->faker->name : null,
            'participants_name_3' => $members >= 3 ? $this->faker->name : null,
            'participants_name_4' => $members >= 4 ? $this->faker->name : null,
            'participants_name_5' => $members >= 5 ? $this->faker->name : null,
            'participants_country'    => $this->faker->randomElement([
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
            'participants_phone'      => $this->faker->numerify('08##-####-####'),
            'status_registration'     => $this->faker->randomElement([
                'Pending',
                'Verified',
                'Rejected'
            ]),
            'status_urban_design'     => $this->faker->randomElement([
                'Not Submitted',
                'Submitted'
            ]),
            'email'                   => $this->faker->unique()->safeEmail(),
            'password'                => Hash::make('12341234'),
            'otp_code' => null,
            'otp_expired_at' => null,
            'email_verified_at' => now(),
        ];
    }
}
