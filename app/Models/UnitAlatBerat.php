<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UnitAlatBerat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomor_body',
        'kategori_alat_berat_id',
        'merek_alat_berat_id',
        'tipe_alat_berat_id',
        'featured_image',
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
        'tipe_alat_berat_id' => 'integer',
    ];

    public function kategoriAlatBerat(): BelongsTo
    {
        return $this->belongsTo(KategoriAlatBerat::class);
    }

    public function merekAlatBerat(): BelongsTo
    {
        return $this->belongsTo(MerekAlatBerat::class);
    }

    public function tipeAlatBerat(): BelongsTo
    {
        return $this->belongsTo(TipeAlatBerat::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
