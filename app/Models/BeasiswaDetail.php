<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeasiswaDetail extends Model
{
    protected $table = 'beasiswa';

    use HasFactory;

    protected $fillable = [
        'id_beasiswa_detail',
        'user_id_user',
        'beasiswa_id_beasiswa',
        'jenis_beasiswa',
        'dokumen_beasiswa',
    ];

    protected $primaryKey = 'id_beasiswa_detail';

}
