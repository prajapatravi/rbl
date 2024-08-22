<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Agency extends Model

{

    protected $fillable=['name','branch_id','agency_id','agency_manager','location','addresss','city_id','state','email','mobile_number','region_id','agency_phone'];

    public function branch()

    {

        return $this->hasOne('App\Model\Branch', 'id','branch_id');

    }

    public function user()

    {

        return $this->hasOne('App\User', 'id','agency_manager');

    }

    public function city()
    {
        return $this->hasOne('App\Model\City', 'id','city_id');
    }

    public function branchable()
    {
        return $this->hasMany('App\Model\Branchable', 'agency_id','id')->with('user','product.productUser');
    }
    
    public function branchableCollection()
    {
        return $this->hasMany('App\Model\Branchable', 'agency_id','id')->where('status',2);
    }



}

