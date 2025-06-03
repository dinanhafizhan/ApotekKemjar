<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $permissions = [
        'tambah-user', 'edit-user', 'hapus-user', 'lihat-user',
        'tambah-obat', 'edit-obat', 'hapus-obat', 'lihat-obat',
        'tambah-transaksi', 'edit-transaksi', 'hapus-transaksi', 'lihat-transaksi',
    ];

    foreach ($permissions as $permission) {
        Permission::firstOrCreate(['name' => $permission]);
    }

    $admin = Role::firstOrCreate(['name' => 'admin']);
    $user = Role::firstOrCreate(['name' => 'user']);

    $admin->givePermissionTo($permissions);
    $user->givePermissionTo(['tambah-transaksi', 'lihat-transaksi']);
    }

}
