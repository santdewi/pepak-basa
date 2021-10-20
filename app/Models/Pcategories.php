<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcategories extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pamasastra()
    {
        return $this->hasMany(Pamasastra::class);
    }
}
