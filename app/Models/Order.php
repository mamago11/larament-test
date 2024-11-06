<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount_due',
        'amount_paid',
        'order_status_id',
    ];

    protected $casts = [
        'amount_paid' => MoneyCast::class,
        'amount_due' => MoneyCast::class,
    ];

    public function order_status(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class);
    }
}
