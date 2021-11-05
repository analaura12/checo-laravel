<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusReserve extends Model
{
    use HasFactory;

    protected $table = 'status_reserves';

    protected $fillable = [
        'description'
    ];

    public function Reserve()
    {
        return $this->belongsTo(Reserve::class);
    }
}
