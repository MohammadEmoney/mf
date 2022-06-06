<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'alt', 'dimension', 'size', 'featured_image', 'type'
    ];

    /**
     * Image polymorphic relation
     *
     * @return MorphTo
     */
    public function imageble()
    {
        return $this->morphTo();
    }

}
