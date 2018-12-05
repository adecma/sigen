<?php

use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desa')->insert(
            $this->data()->toArray()
        );
    }

    private function data()
    {
        $data = [
            [
                'kode' => 'BARAT',
                'nama' => 'Desa Barat',
                'daerah_id' => 1,
            ],
            [
                'kode' => 'TIMUR',
                'nama' => 'Desa Barat',
                'daerah_id' => 1,
            ],
            [
                'kode' => 'RANTAU',
                'nama' => 'Desa Rantau',
                'daerah_id' => 1,
            ],
        ];

        return collect($data)->map(function($data) {
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

            return $data;
        });
    }
}
