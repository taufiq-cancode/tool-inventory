<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
