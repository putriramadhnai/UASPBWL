<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = "tb_pasien";
    protected $primaryKey = 'pasien_id';
    protected $guarded = [];
    use HasFactory;
}
