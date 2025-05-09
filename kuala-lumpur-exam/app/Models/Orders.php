<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orders extends Model
{
    protected $primaryKey = ['order_id'];
    protected $fillable = ['order_date','amout',];

    public function Salesman(): HasMany {
        return $this->hasMany(Salesman::class);
    }
    public function Customers() : HasMany {
        return $this->hasMany(Customers::class);
    }
}
