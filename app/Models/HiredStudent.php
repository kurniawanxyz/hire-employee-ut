<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class HiredStudent extends Model
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

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function score():HasOne
    {
        return $this->hasOne(StudentScores::class);
    }
    public function specialization():HasMany
    {
        return $this->hasMany(UnitSpecialization::class);
    }

    public function bestSpecialization():HasMany
    {
        return $this->hasMany(UnitSpecialization::class)->orderByDesc('total')->take(4);
    }

    public function ojt():HasOne
    {
        return $this->hasOne(OjtExperienceStudents::class);
    }
    public function presentation_score():HasOne
    {
        return $this->hasOne(PresentationScores::class);
    }
    public function behavior():HasOne
    {
        return $this->hasOne(Behavior::class);
    }
}
