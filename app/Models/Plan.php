<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'name_plan',
        'slug',
        'description',
        'price',
        'duration',
        'isBest'
    ];

    public function features()
    {
        return $this->hasMany(PlanFeature::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getDurationAttribute($value)
    {
        return $value . ' Days';
    }

    public function getPriceAttribute($value)
    {
        return '$' . number_format($value, 0, ',', '.');
    }

    public function getPriceNumberAttribute()
    {
        return $this->attributes['price'];
    }

    public function getIconAttribute($value)
    {
        return asset('storage/subscription_plan/icons/' . $value);
    }
}
