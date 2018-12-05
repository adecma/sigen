<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daerah')->insert(
            $this->data()->toArray()
        );
    }

    private function data()
    {
        $data = [
            [
                'kode' => 'BJB',
                'nama' => 'Daerah Banjarbaru'
            ],
        ];

        return collect($data)->map(function($data) {
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

            return $data;
        });
    }
}
