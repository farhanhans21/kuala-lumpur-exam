<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Salesman extends Model
{
    protected $primaryKey = ['salesman_id'];
    protected $fillable = ['salesman_name', 'salesman_city', 'commission'];

    public function orders(): BelongsTo
    {
        return $this->belongsTo(Orders::class);
    }
}
