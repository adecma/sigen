<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Daerah;
use App\Desa;
use App\Kelompok;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
            $this->data()->each(function($data) {
                User::create($data);
            });
        User::reguard();
    }

    private function data()
    {
        $pass = bcrypt('rahasia');

        $data = [
            [
                'name' => 'Ade Prast',
                'email' => 'adecma18@gmail.com',
                'username' => 'adecma',
                'password' => $pass,
            ],
        ];

        $daerah = Daerah::all();
        $desa = Desa::all();
        $kelompok = Kelompok::all();

        $sum = $daerah->count() + $desa->count() + $kelompok->count();

        foreach(range(1, $sum*2) as $n) {
            $arr = [
                'name' => 'User ' . $n,
                'email' => "user{$n}@gmail.com",
                'username' => "user{$n}",
                'password' => $pass,
            ];
            array_push($data, $arr);
        }

        return collect($data);
    }
}
