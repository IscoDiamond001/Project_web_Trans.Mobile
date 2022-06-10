<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payement extends Model
{
    use HasFactory;

    protected $fillable = ['idClient','somme'];
    protected $primaryKey = 'idPaye';

    public function client(){
        return $this->belongsTo(client::class);
    }

    public function reservations(){
        return $this->hasMany(reservation::class);
    }
}
