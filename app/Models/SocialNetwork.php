<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialNetwork extends Model
{
    use HasFactory;
    public function socialLink(): BelongsTo
    {
        return $this->belongsTo(SocialLink::class);
    }
    public function getIcon($id)
    {
        $socialNetwork = SocialNetwork::find($id);

        if ($socialNetwork) {
            return $socialNetwork->icon;
        } else {
            return '';
        }
    }
}
