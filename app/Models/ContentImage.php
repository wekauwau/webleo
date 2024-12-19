<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ContentImage extends Pivot
{
    protected $fillable = [
        'image_id',
        'publication_id',
    ];
}
