<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    public const SUPPORTED_FORMATS = [
        'pdf'
    ];

    use HasFactory;

    protected $connection = "mysql";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'name',
        'size',
        'description',
        'path'
    ];
}
