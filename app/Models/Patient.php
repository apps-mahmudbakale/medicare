<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'gender',
        'date_of_birth',
        'address',
        'next_of_kin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
