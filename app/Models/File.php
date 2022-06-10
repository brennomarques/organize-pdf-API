<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    use HasFactory;

    protected $connection = "mysql";

    protected $fillable = ['uuid', 'name', 'description', 'path'];
}
