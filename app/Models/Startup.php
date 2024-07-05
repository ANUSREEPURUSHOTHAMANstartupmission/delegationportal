<?php

namespace App\Models;
use App\Traits\AutoFill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HashId;


class Startup extends Model
{
    use HasFactory,AutoFill,HashId;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
