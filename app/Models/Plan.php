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

    public function getDurationAttribute($value)
    {
        return $value . ' Days';
    }

    public function getPriceAttribute($value)
    {
        return 'Rp ' . number_format($value, 0, ',', '.');
    }

    public function getIconAttribute($value)
    {
        return asset('storage/subscription_plan/icons/' . $value);
    }
}
