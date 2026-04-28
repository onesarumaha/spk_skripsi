<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGuruModel extends Model
{
    use HasFactory;

    protected $table = 'data_guru';

    protected $fillable = [
        'nama',
        'nip',
        'alamat',
        'no_hp',
        
    ];

    public function penilaian()
    {
        return $this->hasMany(PenilaianModel::class);
}

}
