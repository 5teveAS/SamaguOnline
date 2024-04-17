<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImageAttribute($value){

        if(strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE){

            return $value;
        }
        return asset('storage/' .$value);
        // return Storage::url('employee/'.$value);
    }
    //LOS EMPLEADOS PUEDEN TENER UN USUARIO
    public function user(){

        return $this->hasOne(User::class);

    }
}
