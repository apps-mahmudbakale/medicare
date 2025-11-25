<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'license_number',
        'specialization',
        'experience_years',
        'affiliation',
        'address',
        'phone',
        'qualifications',
        'consultation_fee',
        'bio',
        'profile_picture', // <-- matches controller
        'is_available',
        'clinical_days',
    ];

    protected $casts = [
        'experience_years' => 'integer',
        'consultation_fee' => 'decimal:2',
        'is_available' => 'boolean',
        'clinical_days' => 'array',
    ];

    protected $attributes = [
        'is_available' => true,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function availabilities()
    {
        return $this->hasMany(DoctorAvailability::class);
    }
}
