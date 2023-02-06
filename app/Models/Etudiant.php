<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = "etudiants";
    protected $fillable = [
        "prenom",
        "nom",
        "matiere_id",
        "semestre_id",
        "note",
        "Exame"
    ];
    public function matiere(){
        return $this->belongsTo(Matiere::class, "matiere_id", "id");
    }
    public function semestre(){
        return $this->belongsTo(Semestre::class, "semestre_id", "id");
    }
}
