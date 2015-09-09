<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acctype extends Model
{
    /**
     * Protected Fillable
     *
     * @var string
     */

    protected $fillable = ['name'];

    /**
     * Relationship
     *
     * @var string
     */

    public function users()
    {
    	return $this->hasOne('App\User');
    }
}
