<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Treatment extends Model
{
    /** @use HasFactory<\Database\Factories\TreatmentFactory> */
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function therapist() :HasMany
    {
        return $this->hasMany(Therapist::class);
    }
}
