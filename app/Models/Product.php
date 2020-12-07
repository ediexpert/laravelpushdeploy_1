<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tag;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function vendors()
    {
        return $this->belongsToMany(Vendor::class);
    }
}
