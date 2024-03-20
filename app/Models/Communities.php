<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class communities extends Model
{   
    use HasFactory,SoftDeletes;
    protected $table='communities';
    protected $fillable=[
        'name',
        'tag_line',
        'tag_desc',
    ];
}
