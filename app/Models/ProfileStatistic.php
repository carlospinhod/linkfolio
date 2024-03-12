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

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function getProfileVisits($profile, $time = null)
    {
        $profileVisits = $this->where('profile_id', $profile->id)
            ->where('action_type', 'profile_visit');

        if ($time == 'today') {
            $profileVisits->whereDate('created_at', today());
        } elseif ($time == 'last_month') {
            $profileVisits->whereBetween('created_at', [now()->startOfMonth(), now()]);
        }

        return $profileVisits->count();
    }
}
