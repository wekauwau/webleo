<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'publication_type_id',
        'image_id',
        'title',
        'content',
    ];

    public function image(): HasOne
    {
        return $this->hasOne(Image::class);
    }
}
