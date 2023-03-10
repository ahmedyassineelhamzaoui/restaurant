<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    protected $table='plats';
    protected $fillable=[
        'id',
        'plat_name',
        'plat_picture',
        'plat_descreption',
        'plat_day',
        'id_category'
    ];

}
