<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kegiatan;
use App\Models\Mitra;
use App\Models\SPJ;
use App\Models\SPK;
use App\Models\BAST;

class MasterKegiatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['kegiatan'];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('bulan', 'like', '%' . $filters['search'] . '%');
        }

        if (isset($filters['kegiatan']) ? $filters['kegiatan'] : false) {
            return $query->where('kegiatan_id', 'like', '%' . $filters['kegiatan'] . '%');
        }
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }

    public function spj()
    {
        return $this->belongsTo(SPJ::class);
    }

    public function spk()
    {
        return $this->belongsTo(SPK::class);
    }

    public function bast()
    {
        return $this->belongsTo(BAST::class);
    }
}
