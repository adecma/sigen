<?php

use Illuminate\Database\Seeder;
use App\Daerah;
use App\Desa;
use App\Kelompok;
use App\User;
use App\Role;

class AttachUserToRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data()->each(function($data) {
            $data['user']->attachRole($data['role']);
            if($data['assign']) {
                $data['assign']->user()->save($data['user']);
            }
        });
    }

    private function data()
    {
        $user = User::all();
        $daerah = Daerah::all();
        $desa = Desa::all();
        $kelompok = Kelompok::all();
        $role = Role::all();

        $roleSuperAdmin = $role->shift();
        $roleAdminDaerah = $role->shift();
        $roleViewerDaerah = $role->shift();
        $roleAdminDesa = $role->shift();
        $roleViewerDesa = $role->shift();
        $roleAdminKelompok = $role->shift();
        $roleViewerKelompok = $role->shift();

        $me = [];
        $me['user'] = $user->shift();
        $me['role'] = $roleSuperAdmin;
        $me['assign'] = null;

        $box = [$me];

        foreach($daerah as $d) {
           foreach([$roleAdminDaerah, $roleViewerDaerah] as $r) {
               $u = [];
               $u['user'] = $user->shift();
               $u['role'] = $r;
               $u['assign'] = $d;

                array_push($box, $u);
           }
        }

        foreach($desa as $d) {
           foreach([$roleAdminDesa, $roleViewerDesa] as $r) {
                $u = [];
                $u['user'] = $user->shift();
                $u['role'] = $r;
                $u['assign'] = $d;

                array_push($box, $u);
           }
        }

        foreach($kelompok as $d) {
           foreach([$roleAdminKelompok, $roleViewerKelompok] as $r) {
                $u = [];
                $u['user'] = $user->shift();
                $u['role'] = $r;
                $u['assign'] = $d;

                array_push($box, $u);
           }
        }

        return collect($box);
    }
}
