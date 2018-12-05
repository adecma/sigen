<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'daerah';

    public function desa()
    {
        return $this->hasMany(Desa::class, 'daerah_id', 'id');
    }
}
