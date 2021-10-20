<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Pamasastra extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function pcategory()
    {
        return $this->belongsTo(Pcategories::class);
    }
    
    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
