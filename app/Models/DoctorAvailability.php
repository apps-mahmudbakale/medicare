<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAvailability extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'doctor_id',
        'day_of_week',
        'start_time',
        'end_time',
        'break_start',
        'break_end',
        'is_working_day',
        'is_available',
        'is_recurring',
        'specific_date',
        'notes',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'break_start' => 'datetime',
        'break_end' => 'datetime',
        'is_working_day' => 'boolean',
        'is_available' => 'boolean',
        'is_recurring' => 'boolean',
        'specific_date' => 'date',
    ];

    /**
     * The days of the week.
     *
     * @var array
     */
    public static $days = [
        'sunday' => 'Sunday',
        'monday' => 'Monday',
        'tuesday' => 'Tuesday',
        'wednesday' => 'Wednesday',
        'thursday' => 'Thursday',
        'friday' => 'Friday',
        'saturday' => 'Saturday',
    ];

    /**
     * Get the doctor that owns the availability.
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    /**
     * Get the display name for the day of the week.
     *
     * @return string
     */
    public function getDayNameAttribute()
    {
        return self::$days[$this->day_of_week] ?? $this->day_of_week;
    }

    /**
     * Scope a query to only include available slots.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    /**
     * Scope a query to only include working days.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWorkingDays($query)
    {
        return $query->where('is_working_day', true);
    }
}
