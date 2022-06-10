<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agent extends Authenticable
{
    public $fillable=['prenom','nom','numTel','adresse','email','pass'];
    use HasFactory;

    public function compagnie(){
        return $this->belongsTo(compagnie::class);
    }

    public function clients(){
        return $this->hasMany(client::class);
    }

    public function reservations(){
        return $this->hasMany(reservation::class);
    }

    public function messages(){
        return $this->hasMany(message::class);
    }
}
