<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'publication_type_id',
        'image_id',
        'title',
        'content',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
