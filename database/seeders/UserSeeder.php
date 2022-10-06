<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'user@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "User";
            $user->email = "user@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }
    }
}