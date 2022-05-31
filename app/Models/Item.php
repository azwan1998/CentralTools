<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'qty',
        'user_id',
        'koli_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function kolis()
    {
        return $this->belongsTo(Koli::class);
    }
}
