<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            $this->data()->toArray()
        );
    }

    private function data()
    {
        $data = [
            [
                'name' => 'superAdmin',
                'display_name' => 'Super Admin',
                'description' => null,
            ],
            [
                'name' => 'adminDaerah',
                'display_name' => 'Admin Daerah',
                'description' => null,
            ],
            [
                'name' => 'viewerDaerah',
                'display_name' => 'Pengawas Daerah',
                'description' => null,
            ],
            [
                'name' => 'adminDesa',
                'display_name' => 'Admin Desa',
                'description' => null,
            ],
            [
                'name' => 'viewerDesa',
                'display_name' => 'Pengawas Desa',
                'description' => null,
            ],
            [
                'name' => 'adminKelompok',
                'display_name' => 'Admin Kelumpok',
                'description' => null,
            ],
            [
                'name' => 'viewerKelompok',
                'display_name' => 'Pengawas Kelompok',
                'description' => null,
            ],
        ];

        return collect($data)->map(function($data) {
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

            return $data;
        });
    }
}
