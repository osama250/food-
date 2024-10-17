<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{

    public function run(): void
    {
        $permissions = [
            'View Admins',
            'Create Admins',
            'Edit Admins',
            'Update Admins',
            'Delete Admins',
            'View Roles',
            'Create Roles',
            'Update Roles',
            'Delete Roles',
            'Edit Setting',
            'View Client',
            'Create Client',
            'Update Client',
            'Delete Client',
        ];
        foreach ($permissions as $permission) {
            \Spatie\Permission\Models\Permission::updateOrCreate( [ 'name' => $permission ] );
        }


    }
}
