<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_person')->insert($this->data()->toArray());
    }

    private function data()
    {
        $data = [
            [
                'nama' => 'Generus',
            ],
            [
                'nama' => 'Pengurus',
            ],
            [
                'nama' => 'Pengajar',
            ]
        ];

        return collect($data)->map(function($data) {
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

            return $data;
        });
    }
}
