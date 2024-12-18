<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseBankQuestion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function answers(): HasMany
    {
        return $this->hasMany(CourseBankQuestionAnswer::class,'question_id','id');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
