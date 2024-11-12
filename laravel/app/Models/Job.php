<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    public function emplouer()
    {
        return $this->belongsTo(Employer::class);
    }
}
