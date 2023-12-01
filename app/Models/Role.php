<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Отключает использование полей created_at/updated_at
     *
     * @var bool
     */
    public $timestamps = false;
}
