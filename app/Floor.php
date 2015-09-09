<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable = ['name'];

    public function deployments()
    {
    	return $this->hasMany('App\Deployment');
    }
}
