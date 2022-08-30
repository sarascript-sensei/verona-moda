<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    protected $fillable = [
        'name', 'price','price_start', 'price_up', 'group_id','strich','discount', 'unit', 'description', 'image', 'count'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
