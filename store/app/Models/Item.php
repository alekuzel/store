<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'price', 'weight', 'description', 'quantity', 'consignment_id', 'category',
    ];

    public function consignment()
    {
        return $this->belongsTo(Consignment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
