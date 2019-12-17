<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([

        	'name' => 'Romel Paano',
        	'email' => 'admin2@admin.com',
            'password' => bcrypt('romel1234')
        ]);
    }
}
