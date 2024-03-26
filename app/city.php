<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table='tb_city';
    protected $fillable=['id','name'];
    protected $primaryKey="id";
}
