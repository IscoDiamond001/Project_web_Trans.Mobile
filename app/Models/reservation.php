<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    public function agent(){
        return $this->belongsTo(agent::class);
    }

    public function client(){
        return $this->belongsTo(client::class);
    }

    public function compagnie(){
        return $this->belongsTo(compagnie::class);
    }

    public function payement(){
        return $this->belongsTo(payement::class);
    }
}
