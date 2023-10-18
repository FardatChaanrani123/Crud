<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function Entreprise(){
        return $this->belongsTo(Entreprise::class,'ide');
    }
    protected $fillable = [
        'ide','nom','prenom','mail'
    ];
}
