<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([

        	'name' => 'Niño Paano',
        	'email' => 'admin1@admin.com',
            'password' => bcrypt('romel1234')

        ]);
    }
}
