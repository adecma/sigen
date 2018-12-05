<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data()->each(function($data) {
            $this->call($data);
        });
    }

    public function data()
    {
        $data = [
            RoleSeeder::class,
            DaerahSeeder::class,
            DesaSeeder::class,
            KelompokSeeder::class,
            UserSeeder::class,
            AttachUserToRoleSeeder::class,
            KategoriGenerusSeeder::class,
            JenisPersonSeeder::class,
        ];

        return collect($data);
    }
}
