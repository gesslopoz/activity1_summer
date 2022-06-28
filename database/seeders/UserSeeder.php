<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
                'name'=> 'Gesselle Lopoz',
                'email'=> 'gesselle@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('gesselle12345')
            ],
            [
                'name'=> 'Jenifir Lopoz',
                'email'=> 'jenifir@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('jenifir12345')
            ],

            [
                'name'=> 'Cris John Lopoz',
                'email'=> 'cris_john@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('cris_john12345')
            ],
            [
                'name'=> 'Sandra Lopoz',
                'email'=> 'sandra@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('sandra12345')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
