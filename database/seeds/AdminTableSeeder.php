<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@mhcjs.go.cr',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10),
          ]);
    }
}
