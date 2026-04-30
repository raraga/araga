<?php

namespace App\Models;

use Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'site_url',
        'code_url',
    ];

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }
}
