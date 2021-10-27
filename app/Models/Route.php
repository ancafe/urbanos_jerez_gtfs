<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $table = 'route';
    protected $primaryKey = 'route_id';

    protected $fillable = ['route_id','route_short_name','route_long_name','route_type'];
}
