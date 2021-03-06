<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name' => 'Calin Monea',
            'email' => 'calinmonea2002@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }

}
