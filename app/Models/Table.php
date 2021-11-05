<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $table = 'tables';

    protected $fillable = [
        'number', 'number_of_chairs', 'description', 'establishment_id'
    ];

    public function Reserve()
    {
        return $this->belongsTo(Reserve::class);
    }
}
