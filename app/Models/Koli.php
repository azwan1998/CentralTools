<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koli extends Model
{
    use HasFactory;


    protected $fillable = [
        'koli',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    
}
