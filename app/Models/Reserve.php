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
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function Table()
    {
        return $this->hasOne(Table::class, 'id', 'table_id');
    }

    public function Status()
    {
        return $this->hasOne(StatusReserve::class, 'id', 'status_id');
    }

    public function Establishment()
    {
        return $this->hasOne(User::class, 'id', 'establishment_id');
    }

}
