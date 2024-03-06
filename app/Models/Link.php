<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_id', 'title', 'url', 'order'
    ];

    // Define the belongsTo relationship with the Profile model
    public function profile() : BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
