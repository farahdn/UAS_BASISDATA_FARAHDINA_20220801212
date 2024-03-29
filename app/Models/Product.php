<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'is_active',
        'image'
    ];

    public function tags() : BelongsToMany 
    {
        return $this->belongsToMany(Tag::class);
    }

    public function category():BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }
}
 