<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentLog extends Model
{
    protected $table = "payment_logs";
    protected $primaryKey = "id";
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s',
    ];
    protected $fillable = [
        'status', 'payment_type', 'order_id', 'raw_response'
    ];
}
