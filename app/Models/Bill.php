<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //LAS FACTURAS PUEDEN TENER MUCHOS GASTOS
    public function expenses(){

        return $this->hasMany(Expense::class);

    }
}
