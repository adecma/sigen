<?php

use Illuminate\Database\Seeder;

class KelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelompok')->insert(
            $this->data()->toArray()
        );
    }

    private function data()
    {
        $data = [
            [
                'kode' => 'P4',
                'nama' => 'Kelompok Pondok Empat',
                'desa_id' => 1,
            ],
            [
                'kode' => 'PALM',
                'nama' => 'Kelompok Palm',
                'desa_id' => 1,
            ],
            [
                'kode' => 'TIMUR',
                'nama' => 'Kelompok TIMUR',
                'desa_id' => 2,
            ],
            [
                'kode' => 'S4',
                'nama' => 'Kelompok Simpang Empat',
                'desa_id' => 2,
            ],
            [
                'kode' => 'KASTURI',
                'nama' => 'Kelompok Kasturi',
                'desa_id' => 3,
            ],
            [
                'kode' => 'SIDODADI',
                'nama' => 'Kelompok Sidodadi',
                'desa_id' => 3,
            ],
        ];

        return collect($data)->map(function($data) {
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

            return $data;
        });
    }
}
