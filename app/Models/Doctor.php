<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'license_number',
        'specialization',
        'experience_years',
        'affiliation',
        'address',
        'phone',
        'qualifications',
        'consultation_fee',
        'bio',
        'profile_photo_path',
        'is_available',
        'clinical_days',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'experience_years' => 'integer',
        'consultation_fee' => 'decimal:2',
        'is_available' => 'boolean',
        'clinical_days' => 'array',
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user that owns the doctor.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the availabilities for the doctor.
     */
    public function availabilities()
    {
        return $this->hasMany(DoctorAvailability::class);
    }
}
