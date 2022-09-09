<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAuthentication>
 */
class UserAuthenticationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            //
            'realname'  =>  $name,
            'company_name'  =>  $this->faker->company(),
            'logo'  =>  '',
            'brief'  =>  $this->faker->catchPhrase(),
            'status'  =>  1,
            'credit_code'  =>  $this->faker->randomLetter() . $this->faker->randomNumber(9, true),
            'registered_capital'  =>  $this->faker->randomNumber(1, true) . '00万',
            'legal_representative'  =>  $name,
            'industry'  =>  '机械设备',
            'establish_date'  =>  $this->faker->date("Y-m-d", 'now'),
            'approval_date'  =>  $this->faker->date("Y-m-d", 'now'),
            'type'  =>  '工业企业',
            'address'  =>  $this->faker->state() . $this->faker->city() . $this->faker->streetName(),
            'registration_authority'  =>  $this->faker->sentence(5, true),
            'business_scope'  =>  $this->faker->sentence(5, true),
            'staff_size'  =>  $this->faker->randomNumber(3, false),
            'qualifications'  =>  $this->faker->paragraph(3, true),
            'examine_status'    =>  1,
            'examine_at'    =>  $this->faker->date("Y-m-d H:i:s", 'now'),
        ];
    }
}
