<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $table = 'reserves';

    protected $fillable = [
        'date', 'hour', 'observation', 'user_id', 'establishment_id', 'table_id', 'product_id', 'status_id'
    ];

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function Product()
    {

    }

    public function Table()
    {

    }

    public function Status()
    {

    }


    public function Establishment()
    {

    }

}
