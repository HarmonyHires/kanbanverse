<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'user_id', 'plan_id', 'status', 'total', 'expired_at'];

    const STATUS_PENDING = 'pending';
    const STATUS_PAID = 'paid';
    const STATUS_CANCELLED = 'cancelled';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function isPaid()
    {
        return $this->status === self::STATUS_PAID;
    }

    public function isPending()
    {
        return $this->status === self::STATUS_PENDING;
    }

    public function isCancelled()
    {
        return $this->status === self::STATUS_CANCELLED;
    }

    public function markAsPaid()
    {
        $this->update(['status' => self::STATUS_PAID]);
    }

    public function markAsCancelled()
    {
        $this->update(['status' => self::STATUS_CANCELLED]);
    }

    public function isExpired()
    {
        return now()->gt($this->expired_at);
    }

    public function scopeExpired($query)
    {
        return $query->where('expired_at', '<', now());
    }

    public function scopeNotExpired($query)
    {
        return $query->where('expired_at', '>', now());
    }

    public function scopePaid($query)
    {
        return $query->where('status', self::STATUS_PAID);
    }

    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    public function scopeCancelled($query)
    {
        return $query->where('status', self::STATUS_CANCELLED);
    }

    public function scopeByUser($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }

    public function scopeByOrder($query, $order_id)
    {
        return $query->where('order_id', $order_id);
    }

    public function scopeByPlan($query, $plan_id)
    {
        return $query->where('plan_id', $plan_id);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
