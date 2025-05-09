<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customers extends Model
{
    protected $primaryKey =['customer_id'];
    protected $fillable = ['customer_name','customer_city'];

      public function orders(): BelongsTo
    {
        return $this->belongsTo(Orders::class);
    }
}
