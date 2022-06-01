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
        $user->name = "admin1";
        $user->email = "admin@gmail.com";
        $user->role = "admin";
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User;
        $user->name = "azwan";
        $user->email = "azwan@gmail.com";
        $user->role = "user";
        $user->password = bcrypt('12345678');
        $user->save();

        $koli = new Koli;
        $koli->koli = "Power Tools";
        $koli->user_id = 1;
        $koli->save();
        
        $koli = new Koli;
        $koli->koli = "Cabel";
        $koli->user_id= 2;
        $koli->save();
    }
}
