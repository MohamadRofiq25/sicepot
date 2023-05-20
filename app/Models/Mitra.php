<?php

namespace App\Models;
use App\Models\Bank;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['search']) ? $filters['search'] : false ) {
            return $query->where('name', 'like', '%'. $filters['search'] .'%')
                         ->orWhere('alamat', 'like', '%'. $filters['search'] .'%');
        }
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

}