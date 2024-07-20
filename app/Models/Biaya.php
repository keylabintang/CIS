<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Biaya extends Model
{
    use HasFactory;

    protected $table = "biaya";

    protected $primaryKey = 'id_biaya';

    protected $guarded = [];

    public function member()
    {
        return $this->hasOne(Member::class, 'id_member');
    }
    
    // Member.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
