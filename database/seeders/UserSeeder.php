<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat sample admin
        $admin = new \App\Models\User();
        $admin->name  = "Admin";
        $admin->email = "adminutama@gmail.com";
        $admin->password = bcrypt('rahasia'); // enskripsi
        $admin->save();
    }
}
