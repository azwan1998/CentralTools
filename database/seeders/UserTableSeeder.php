<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Koli;
use App\Models\Item;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->role = "admin";
        $user->password = bcrypt('12345678');
        $user->save();

    }
}
