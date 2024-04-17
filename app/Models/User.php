<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
//    protected $fillable = [
//        'name',
//        'image',
//        'email',
//        'password',
//        'rol'
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function getImageAttribute($value){

        if(strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE){

            return $value;
        }
        return asset('storage/' .$value);
        // return Storage::url('employee/'.$value);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function setPasswordAttribute($value){
//        $this->attributes['password'] = bcrypt($value);
//    }

    public function employee(){

        //QUE CADA USUARIO PERTENECERA A UN EMPLEADO
        return $this->belongsTo(Employee::class);

    }
}
