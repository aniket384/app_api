<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class SuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Arm Web Info',
            'email' => 'armwebinfo@gmail.com',
            'password' => bcrypt('H4K3RzON3@N'),
        ]);
    }
}
