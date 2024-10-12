<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipeAlatBerat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'kategori_alat_berat_id',
        'merek_alat_berat_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kategori_alat_berat_id' => 'integer',
        'merek_alat_berat_id' => 'integer',
    ];

    public function kategoriAlatBerat(): BelongsTo
    {
        return $this->belongsTo(KategoriAlatBerat::class);
    }

    public function merekAlatBerat(): BelongsTo
    {
        return $this->belongsTo(MerekAlatBerat::class);
    }

    public function unitAlatBerats(): HasMany
    {
        return $this->hasMany(UnitAlatBerat::class);
    }
}
