<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Host extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'host';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=['h_id'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    public $timestamps=false;

    /**
     * @param $name
     * @param $tel
     * @return bool
     */
    public function hostadd($name,$tel){
        $this->h_name=$name;
        $this->h_tel=$tel;
        $res=  $this->save();
        return $res;
    }

}
