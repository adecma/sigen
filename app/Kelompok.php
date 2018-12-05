<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $table = 'kelompok';

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id', 'id');
    }

    public function user()
    {
        return $this->morphOne(User::class, 'assign', 'assign_type', 'assign_id', 'id');
    }
}
