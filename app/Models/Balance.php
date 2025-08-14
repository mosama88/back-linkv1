<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\ActiveEnum;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Balance extends Model
{
    use HasFactory, HasSlug;

    protected $table = 'balances';
    protected $fillable = [
        'slug',
        'balance',
        'used_balance',
        'remain_balance',
        'user_id',
        'active',
        'created_by',
        'updated_by'
    ];


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    protected $casts = [
        'active' => ActiveEnum::class,
    ];
}