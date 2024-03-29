<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;

    protected $guarded = [ ];



    public function genders()
    {
        return $this->belongsTo('App\Models\genders','id_gender');
    }

    public function niveauxdetudes()
    {
        return $this->belongsTo('App\Models\niveauxdetudes','id_niveauxdetudes');
    }

    public function Sections()
    {
        return $this->belongsTo('App\Models\Sections','id_sections');
    }

    public function Classes()
    {
        return $this->belongsTo('App\Models\Classes','id_classes');
    }


    public function images(){
        return $this->morphMany('App\Models\Image','imageable');
    }

    public function nationalities(){
        return $this->belongsTo('App\Models\Nationalitie','id_nationalities');
    }
    public function parentes(){
        return $this->belongsTo('App\Models\Parentes','id_parentes');
    }


    public function CompteEtudiants(){
        return $this->hasMany('App\Models\CompteEtudiant','id_etudiant');
    }

    
  
  
    public function Presence()
        {
            return $this->hasMany('App\Models\Presence','id_etudiant');
        }
    
  
}
