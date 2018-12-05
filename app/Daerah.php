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

    public function user()
    {
        return $this->morphOne(User::class, 'assign', 'assign_type', 'assign_id', 'id');
    }
}
