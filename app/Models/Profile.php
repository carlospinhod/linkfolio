<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'username',
        'bio',
        'profile_image',
        'seo_title',
        'seo_description',
        'seo_image',
        'seo_keywords',
        'favicon',
    ];

    public function link(): HasMany
    {
        return $this->hasMany(Link::class);
    }

    public function socialLink(): HasMany
    {
        return $this->hasMany(SocialLink::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function profileSeo(): HasOne
    {
        return $this->hasOne(ProfileSeo::class);
    }
}
