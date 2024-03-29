<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTransaction extends Model
{
    use HasFactory;

    protected $table = 'product_transactions';

    protected $fillable = ['transaction_id', 'product_id', 'price'];
}
