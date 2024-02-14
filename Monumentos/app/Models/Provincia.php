<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provincia extends Model
{
    use HasFactory;
    
    protected $table = 'provincias';

    public function monumento()
    {
        return $this->hasMany(Monumento::class);
    }
}
