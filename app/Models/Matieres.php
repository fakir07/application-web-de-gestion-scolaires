<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matieres extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function niveauxdetudes()
    {
        return $this->belongsTo('App\Models\niveauxdetudes', 'id_niveauxdetudes');
    }


    public function Classes()
    {
        return $this->belongsTo('App\Models\Classes', 'id_classes');
    }
}