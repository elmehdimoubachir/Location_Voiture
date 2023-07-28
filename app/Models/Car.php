<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'Matricule','Marque','Model','Categore','Color','Prix','Stutat'
    ];

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
