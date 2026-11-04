<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'furniture_item',
        'dimensions',
        'design_notes',
        'total_price',
        'deadline',
        'production_stage',
        'delivered_status',
    ];

    protected $casts = [
        'total_price' => 'decimal:2',
        'deadline' => 'date',
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function amountPaid(): float
    {
        return (float) $this->payments()->sum('amount');
    }

    public function balance(): float
    {
        return (float) $this->total_price - $this->amountPaid();
    }

    public function isFullyPaid(): bool
    {
        return $this->balance() <= 0;
    }
}