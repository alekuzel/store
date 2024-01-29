<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignment extends Model
{
    use HasFactory;

    protected $fillable = ['expiry_date', 'supplier', 'cons_nr'];

    public function goods()
    {
        return $this->hasMany(Item::class);
    }
}
