<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= [
            [
                'name' => 'Yami Yugi',
                'email' => 'yamiyugi@email.com',
                'password' => Hash::make('yugi123'),
            ],
            [
                'name' => 'Bad Bunny',
                'email' => 'badbunny@email.com',
                'password' => Hash::make('bunny123'),
            ],
            [
                'name' => 'Eren Uzumaki',
                'email' => 'erenuzumaki@email.com',
                'password' => Hash::make('eren123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
