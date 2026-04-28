<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaModel extends Model
{
    use HasFactory;

    protected $table = 'kriteria';

    protected $fillable = [
        'nama',
        'kode',
        'bobot',
        'tipe',
        
    ];

    public function penilaian()
    {
        return $this->hasMany(PenilaianModel::class);
    }
}
