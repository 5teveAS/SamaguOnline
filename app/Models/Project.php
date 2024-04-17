<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
    //LOS PROYECTOS PUEDEN TENER MUCHOS GASTOS
    public function expenses(){

        return $this->hasMany(Expense::class);

    }

    public function customer(){

        //QUE CADA PROYECTO PERTENECERA A UN CLIENTE
        return $this->belongsTo(Customer::class);

    }

}
