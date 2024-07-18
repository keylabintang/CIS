<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    use HasFactory;

    protected $table = "member";

    protected $primaryKey = 'id_member';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }

    public function biaya()
    {
        return $this->belongsTo(Biaya::class);
    }
}
