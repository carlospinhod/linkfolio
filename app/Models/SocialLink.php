<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SocialLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id', 'social_network_id', 'url', 'order'
    ];

    public function socialNetwork(): BelongsTo
    {
        return $this->belongsTo(SocialNetwork::class, 'social_network_id');
    }


    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
