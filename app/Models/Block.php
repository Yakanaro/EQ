<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function theories()
    {
        return $this->hasMany(Theory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
