<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'organization',
        'date',
        'credential_id',
        'credential_url',
    ];

    public function scopeFilter(Builder $query): void
    {
        // Check if there's a search query present
        $search = request('search');

        if ($search) {
            // Apply the search filter if there is a search term
            $query->where('title', 'like', '%' . $search . '%');
        }
    }
}
