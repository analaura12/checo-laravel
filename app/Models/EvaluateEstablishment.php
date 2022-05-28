<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluateEstablishment extends Model
{
    use HasFactory;

    protected $table = 'evaluate_establishments';

    protected $fillable = [
       'establishment_id', 'user_id', 'evaluate_score', 'description'
    ];

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function Establishment()
    {
        return $this->hasOne(User::class, 'id', 'establishment_id');
    }
}
