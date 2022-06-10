<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = ['idAgent','idCp','idT','prenom','nom','genre','email','numTel','ville','quartier','place'];
    protected $primaryKey = 'idClient';


    public function agent(){
        return $this->belongsTo(agent::class);
    }

    public function compagnie(){
        return $this->belongsTo(compagnie::class);
    }

    public function trajet(){
        return $this->belongsTo(trajet::class);
    }

    public function payements(){
        return $this->hasMany(payement::class);
    }

    public function reservations(){
        return $this->hasMany(reservation::class);
    }

}
