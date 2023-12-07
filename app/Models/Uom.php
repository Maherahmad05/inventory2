<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uom extends Model
{
    use HasFactory;

    protected $table = 'uoms';
    protected $guard = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
