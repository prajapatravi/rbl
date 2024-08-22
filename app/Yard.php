<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yard extends Model
{
    protected $fillable=['branch_id', 'agency_id', 'name', 'yard_id','agency_manager','location','addresss', 'product_id'];
    
    
    public function branch()
    {
        return $this->hasOne('App\Model\Branch', 'id','branch_id');
    }
    public function agency()
    {
        return $this->hasOne('App\Agency', 'id','agency_id');
    }
    public function user()
    {
        return $this->hasOne('App\User', 'id','agency_manager');
    }
}
