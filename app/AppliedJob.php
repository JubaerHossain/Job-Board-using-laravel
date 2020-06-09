<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function invite()
    {
        return $this->hasOne(Invite::class);
    }
    public function education()
    {
        return $this->hasOne(education::class);
    }
}
