<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compagnie extends Model
{
    use HasFactory;

    protected $fillable = ['cpnom','adresse'];
    protected $primaryKey = 'idCp';

    public function clients(){
        return $this->hasMany(client::class);
    }

    public function agents(){
        return $this->hasMany(agent::class);
    }

    public function reservations(){
        return $this->hasMany(reservation::class);
    }

}
