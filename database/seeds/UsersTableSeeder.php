<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        User::create(array(
            'name' => 'Scott Madeira',
            'email' => 'scottmadeira@gmail.com',
            'password' => Hash::make('asdfasdf'),
            'isAdmin' => 1,
        ));
    
        User::create(array(
            'name' => 'Tommy Smith',
            'email' => 'tsmith90210@ggmail.com',
            'password' => Hash::make('asdfasdf'),
            'isAdmin' => 0,
        ));
    
        User::create(array(
            'name' => 'Juju Dropped-Ball',
            'email' => 'juju@ggmail.com',
            'password' => Hash::make('qwerqwer'),
            'isAdmin' => 0,
        ));
    }
}
