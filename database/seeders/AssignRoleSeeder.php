<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AssignRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1);
        $role = Role::find(1);

        $user->assignRole($role);

        $userUser = User::find(2);
        $userRole = Role::find(2);

        $userUser->assignRole($userRole);
    }
}
