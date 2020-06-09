<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
//     protected $fillable = ['user_id'];
    protected $guarded = ['id'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function job()
    {
        return $this->hasMany(Job::class);
    }
    public function applied_jobs()
    {
        return $this->hasMany(AppliedJob::class);
    }
}
