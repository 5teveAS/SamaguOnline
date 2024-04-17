<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    //LOS CLIENTE PUEDEN TENER MUCHOS PROYECTOS
    public function projects(){

        return $this->hasMany(Project::class);

    }
}
