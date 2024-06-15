<?php

namespace App\Models;

use App\Models\HiredStudent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class AllScoresSpecializationUnits extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $incrementing = false, $keyType = "string";
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function hired_student(): BelongsTo
    {
        return $this->belongsTo(UnitSpecialization::class, 'unit_specialization_id');
    }
}
