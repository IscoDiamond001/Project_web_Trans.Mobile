<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable = ['idAgent','contenu'];
    protected $primaryKey = 'idM';

    public function agent(){
        return $this->belongsTo(agent::class);
    }
}
