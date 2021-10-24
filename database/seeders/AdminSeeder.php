<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password')
        ]);

        $writer = User::create([
            'name'=>'writer',
            'email'=>'writer@writer.com',
            'password'=>bcrypt('password')
        ]);


        $writer_role = Role::create(['name' => 'writer']);
        $admin_role = Role::create(['name' => 'admin']);

        $permission = Permission::create(['name' => 'edit articles']);
        $admin_role->givePermissionTo($permission);

        $admin->assignRole($admin_role);
        $writer->assignRole($writer_role);
    }
}
