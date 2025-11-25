<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hospital extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'facility_name',
        'registration_number',
        'institution_type',
        'phone',
        'email',
        'contact_person',
        'address',
        'capacity',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'capacity' => 'integer',
        'number_of_doctors' => 'integer',
        'facilities_available' => 'array',
        'is_approved' => 'boolean',
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = ['full_address'];

    /**
     * Get the user that owns the hospital.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all services for the hospital.
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get the hospital's full address.
     */
    public function getFullAddressAttribute()
    {
        $address = [
            $this->address,
            $this->city,
            $this->state,
            $this->country,
        ];

        return implode(', ', array_filter($address));
    }

    /**
     * Scope a query to only include approved hospitals.
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }
}
