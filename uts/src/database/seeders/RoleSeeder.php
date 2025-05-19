<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat roles
       $superAdmin = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        $dokter = Role::firstOrCreate(['name' => 'dokter', 'guard_name' => 'web']);

        // Daftar model yang akan dibuatkan permission-nya
        $models = [
            'activity_log',
            'kunjungan',
            'logo',
            'pasien',
            'riwayat_medis',
            'role',
            'seo',
            'user',
        ];

        // Aksi yang umum
        $actions = ['view', 'view_any', 'create', 'update', 'delete', 'delete_any'];

        // Buat semua permission
        foreach ($models as $model) {
            foreach ($actions as $action) {
                Permission::firstOrCreate([
                    'name' => "{$action}_{$model}",
                    'guard_name' => 'web',
                ]);
            }
        }

        // Berikan semua permission ke super_admin
        $superAdmin->givePermissionTo(Permission::all());

        // Permission untuk dokter: hanya view dan update (tanpa delete)
        $dokterAllowed = [
            'view_user', 'update_user',

            'view_pasien', 'view_any_pasien', 'create_pasien', 'update_pasien',

            'view_riwayat_medis', 'view_any_riwayat_medis', 'create_riwayat_medis', 'update_riwayat_medis',

            'view_kunjungan', 'view_any_kunjungan', 'create_kunjungan', 'update_kunjungan',
        ];

        foreach ($dokterAllowed as $permissionName) {
            $permission = Permission::where('name', $permissionName)->first();
            if ($permission) {
                $dokter->givePermissionTo($permission);
            }
        }
    }
}