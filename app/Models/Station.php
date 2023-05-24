<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'fuel_types', 'pricing', 'availability', 'wait_time'];



    public function messages() {
        return $this->belongsTo(Messages::class);
    }
}
