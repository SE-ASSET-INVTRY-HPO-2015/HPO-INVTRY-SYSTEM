<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = ['brands_id', 'model', 'categories_id', 'description', 'control_number', 'serial_number', 'physicalstatuses_id', 'deployments_id', 'warranties_id', 'warranty_end'];

    public function brands()
    {
    	return $this->belongsTo('App\Brand');
    }

    public function categories()
    {
    	return $this->belongsTo('App\Category');
    }

    public function physicalstatues()
    {
        return $this->belongsTo('App\Physicalstatus');
    }

    public function deployments()
    {
    	return $this->belongsTo('App\Deployment');
    }

    public function warranties()
    {
    	return $this->belongsTo('App\Warranty');
    }
}
