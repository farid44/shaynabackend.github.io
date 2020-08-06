<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'products_id', 'transactions_id'
    ];

    protected $hidden = [];

    public function transaction()
    {
        return $this->BelongsTo(Transaction::class, 'transactions_id', 'id');
    }

    public function product()
    {
        return $this->BelongsTo(product::class, 'products_id', 'id');
    }
}
