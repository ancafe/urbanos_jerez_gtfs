<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'stop';
    protected $primaryKey = 'stop_id';
}
