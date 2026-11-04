public function payments()
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