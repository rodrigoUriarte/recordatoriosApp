<?php

use Illuminate\Database\Seeder;
use App\User;

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
        
        User::create([
            'name' =>'RUriarte',
            'email' =>'ruriarte@gmail.com',
            'password' => password_hash('123123',PASSWORD_DEFAULT)
        ]);
    }
}
