<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProfileStatistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id', 'action_type', 'action_details'
    ];

    public function profile() : BelongsTo
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }
}
