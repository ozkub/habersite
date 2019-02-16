<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::where('slug', 'admin')->first();
        $admin_perm = Permission::where('slug','create-users')->first();

        $admin = new User();
        $admin->name = 'Büşra Öztürk';
        $admin->email = 'busoz9526@gmail.com';
        $admin->password = bcrypt('bus123.root');
        $admin->save();
        $admin->roles()->attach($admin_role);
        $admin->permissions()->attach($admin_perm);
   }
}
