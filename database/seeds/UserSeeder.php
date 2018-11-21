<?php

use Illuminate\Database\Seeder;
use App\User;

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
        $data = [
            [
                'name' => 'Ade Prast',
                'email' => 'adecma18@gmail.com',
                'username' => 'adecma',
                'password' => bcrypt('rahasia'),
            ],
        ];

        return collect($data);
    }
}
