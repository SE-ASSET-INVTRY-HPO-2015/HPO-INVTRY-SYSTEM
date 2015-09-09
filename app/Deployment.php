<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deployment extends Model
{
    protected $fillable = ['name', 'floors_id', 'departments_id', 'cubicles_id', 'employees_id'];

    public function assets()
    {
        return $this->hasOne('App\Asset');
    }

    public function floors()
    {
    	return $this->belongsTo('App\Floor');
    }

     public function departments()
    {
    	return $this->belongsTo('App\Department');
    }

    public function cubicles()
    {
    	return $this->belongsTo('App\Cubicle');
    }

     public function employees()
    {
    	return $this->belongsTo('App\Employee');
    }
}
