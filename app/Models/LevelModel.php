<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    public function users(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'level_id', 'level_id');
    }
}
