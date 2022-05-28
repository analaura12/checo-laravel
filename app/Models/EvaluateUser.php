<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluateUser extends Model
{
    use HasFactory;
    
    protected $table = 'evaluate_users';

    protected $fillable = [
       'establishment_id', 'user_id', 'evaluate_score', 'description'
    ];
}
