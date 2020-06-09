<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinvitation extends Model
{
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
