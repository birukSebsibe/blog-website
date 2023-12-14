<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Admin_users;

class admin_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin_users::create([
            'name'           =>  'admin',
            'email'           =>  'admin@gmail.com',
            'password'           =>  Hash::make('password'),
            'remember_token'           =>  str_random(10),


        ]);



    }
}
