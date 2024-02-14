<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Monumento extends Model
{
    use HasFactory;
    
    protected $table = 'monumentos';

    protected $fillable = ['nombre', 'provincia_id', 'aforo'];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }
}
