<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //protected $fillable = ['*'];
    protected $guarded = ['id'];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function attributes()
    {
        return $this->hasOne(Attributes::class);
    }
    public function applied_jobs()
    {
        return $this->hasMany('App\AppliedJob');
    }
    
    
    
}
