<?php

namespace App\Models;

// use App\Http\Controllers\DepartementController;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;
    use SoftDeletes;


    public function departement() : BelongsTo   
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
}
