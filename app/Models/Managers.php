<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{

    // use HasFactory;

    protected $table = 'managers';
    protected $fillable = [
        'clubs_id',
        'name',
        'photo',
        'old',
        'created_at',
        'updated_at'
    ];

    public function clubs()
    {
        return $this->belongsTo('App\Models\Clubs', 'clubs_id', 'id');
    }
}
