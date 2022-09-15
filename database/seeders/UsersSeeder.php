<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // membuat Role
        $adminRole = Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator', // optional
        ]);

        $memberRole = Role::create([
            'name' => 'member',
            'display_name' => 'Project Member', // optional

        ]);

        // $memberRole = Role::create([
        //     'name' => 'member',
        //     'display_name' => 'Project Member', // optional

        // ]);

        // membuat sample user
        $adminUser = new User();
        $adminUser->name = 'Admin Project';
        $adminUser->email = 'admin@gmail.com'; // optional
        $adminUser->password = bcrypt('rahasia');
        $adminUser->save();
        $adminUser->attachRole($adminRole);

        $memberUser = new User();
        $memberUser->name = 'Member Project';
        $memberUser->email = 'guru@gmail.com'; // optional
        $memberUser->password = bcrypt('rahasia');
        $memberUser->save();
        $memberUser->attachRole($memberRole);

        // $memberUser = new User();
        // $memberUser->name = 'Member Project';
        // $memberUser->email = 'siswa@gmail.com'; // optional
        // $memberUser->password = bcrypt('rahasia');
        // $memberUser->save();
        // $memberUser->attachRole($memberRole);

    }
}
