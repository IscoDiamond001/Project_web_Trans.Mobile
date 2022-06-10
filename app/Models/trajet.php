<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trajet extends Model
{
    use HasFactory;

    protected $fillable = ['trajet','heure','prix'];
    protected $primaryKey = 'idT';

    public function clients(){
        return $this->hasMany(client::class);
    }
}
