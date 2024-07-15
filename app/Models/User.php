<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = "users";

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function member(): HasOne
    {
        return $this->hasOne(Member::class, 'id_member', 'id');
    }
}
