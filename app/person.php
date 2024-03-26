<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $table='tb_person';
    protected $fillable=['rank','name_person','city_id','point','created_at','updated_at'];
    protected $primaryKey="rank";
}
