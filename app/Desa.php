<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';

    public function daerah()
    {
        return $this->belongsTo(Daerah::class, 'daerah_id', 'id');
    }

    public function kelompok()
    {
        return $this->hasMany(Kelompok::class, 'kelompok_id', 'id');
    }

    public function user()
    {
        return $this->morphOne(User::class, 'assign', 'assign_type', 'assign_id', 'id');
    }
}
