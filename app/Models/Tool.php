<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Tool extends Model
{
    use HasFactory;

   
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    protected $fillable = [
        'name',
        'category_id',
        'cost',
        'quantity',
        'supplier',
        'condition',
        'location',
        'purchase_date',
    ];
}
