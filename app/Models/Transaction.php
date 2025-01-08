<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'transaction_id',
        'gross_amount',
        'transaction_time',
        'transaction_status',
        'payment_type',
        'fraud_status',
        'status_message',
        'status_code',
        'signature_key',
        'bank',
        'va_number',
        'biller_code',
        'bill_key',
        'permata_va_number',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getTransactionTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d F Y H:i:s');
    }

    public function getGrossAmountAttribute($value)
    {
        return number_format($value, 0, ',', '.');
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d F Y H:i:s');
    }

    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d F Y H:i:s');
    }

    public function getTransactionStatusAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPaymentTypeAttribute($value)
    {
        return ucfirst($value);
    }

    public function getFraudStatusAttribute($value)
    {
        return ucfirst($value);
    }

    public function getStatusMessageAttribute($value)
    {
        return ucfirst($value);
    }

    public function getBankAttribute($value)
    {
        return ucfirst($value);
    }

    public function getBillerCodeAttribute($value)
    {
        return ucfirst($value);
    }

    public function getBillKeyAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPermataVaNumberAttribute($value)
    {
        return ucfirst($value);
    }

    public function getSignatureKeyAttribute($value)
    {
        return ucfirst($value);
    }

    public function getVaNumberAttribute($value)
    {
        return ucfirst($value);
    }

    public function getStatusCodeAttribute($value)
    {
        return ucfirst($value);
    }

    public function isAccepted()
    {
        return $this->transaction_status === 'Settlement';
    }

    public function isPending()
    {
        return $this->transaction_status === 'pending';
    }

    public function isFailed()
    {
        return $this->transaction_status === 'deny';
    }

    public function isExpired()
    {
        return $this->transaction_status === 'expire';
    }

    public function isCancelled()
    {
        return $this->transaction_status === 'cancel';
    }
}
