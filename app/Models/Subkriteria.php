<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    protected $table = "sub_kriteria";
    protected $primaryKey = 'id_subkriteria';

    protected $fillable = [
        'kriteria_id', 'ket_kriteria', 'nilai', 'bobot','atribut'
    ];
}
