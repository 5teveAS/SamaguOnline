<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bill(){

        //QUE CADA GASTO PERTENECERA A UNA FACTURA
        return $this->belongsTo(Bill::class);
    }

    public function project()
    {

        //QUE CADA GASTO PERTENECERA A UN PROYECTO
        return $this->belongsTo(Project::class);
    }
}
