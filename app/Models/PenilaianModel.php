<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianModel extends Model
{
    use HasFactory;

    protected $table = 'penilaian';

    protected $fillable = [
        'guru_id',
        'kriteria_id',
        'nilai',
        
    ];

    public function guru()
    {
        return $this->belongsTo(DataGuruModel::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(KriteriaModel::class);
    }
}
