<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Ez a sor kötelező, különben a Laravel 500-as hibával elutasítja a mentést!
    protected $fillable = ['title', 'description', 'priority', 'is_completed'];

    protected $casts = [
        'is_completed' => 'boolean',
    ];
}
