<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];

    public function education()
    {
        return $this->hasOne(education::class);
    }

    public function training()
    {
        return $this->hasMany(Training::class);
    }

    public function reference()
    {
        return $this->hasMany(Reference::class);
    }
}
