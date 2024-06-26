<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;

    protected $table = "pelatih";

    protected $primaryKey = 'id_pelatih';

    protected $guarded = [];
}
