<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class communities extends Model
{   
    use HasFactory;
    protected $table='communities';
    protected $fillable=[
        'name',
        'tag_line',
        'tag_desc',
    ];
}
