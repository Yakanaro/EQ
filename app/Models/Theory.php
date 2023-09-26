<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{
    use HasFactory;

    protected $fillable = ['theory_content', 'assignment', 'block_id'];


    public function block()
    {
        return $this->belongsTo(Block::class);
    }
}
