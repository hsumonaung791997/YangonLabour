<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phoneno','township_id','district_id','region_id','accessibletwonship'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){

    return $this->belongsToMany(Role::class,'role_users');
    
   }
   /** for check user role **/
   public function hasRole($roles){
        if(is_array($roles)){
            foreach ($roles as $need_role){
                echo $need_role;
            }
        }
      }
      public function township(){
        return $this->hasMany('App\Township','id','township_id');
      }
      public function district(){
        return $this->hasMany('App\District','id','district_id');
      }
      public function region(){
        return belongsToMany('Region');
      }

    /** end check user role function **/

   // public function hasAccess(array $permissions){

   //  foreach ($this->roles as $role) {
        
   //      if ($role->hasAccess($permissions)) {
            
   //          return true;
   //      }

   //      return false;
   // }
}
