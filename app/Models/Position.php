<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Position extends Pivot
{
    protected $fillable = [
        'user_id',
        'executive_id',
        'division_id',
    ];
}
