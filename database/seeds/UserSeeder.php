<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Restaurant;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        [
            'name' =>'Matthew',
            'email' => 'mats@live.it',
            'email_verified_at' => now(),
            'password' =>  Hash::make('matsmats'),
            'remember_token' => Str::random(10),
        ],
        [
            'name' =>'Nunzio',
            'email' => 'nunzio@live.it',
            'email_verified_at' => now(),
            'password' =>  Hash::make('nunzionunzio'),
            'remember_token' => Str::random(10),
        ],
        [
            'name' =>'AleYoyo',
            'email' => 'Aleyoyo@live.it',
            'email_verified_at' => now(),
            'password' =>  Hash::make('aleyoyoaleyoyo'),
            'remember_token' => Str::random(10),
        ],
        [
            'name' =>'Sacha',
            'email' => 'sacha@live.it',
            'email_verified_at' => now(),
            'password' => Hash::make('sachasacha'),
            'remember_token' => Str::random(10),
        ],
     ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
