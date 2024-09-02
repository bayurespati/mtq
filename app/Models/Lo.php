<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lo extends Model
{
    use HasFactory;

    protected $table = 'lo';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skpd()
    {
        return $this->belongsTo(Skpd::class);
    }
}
