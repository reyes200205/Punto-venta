<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';

    protected $fillable = [
        'supplier_id',
        'user_id',
        'total',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
