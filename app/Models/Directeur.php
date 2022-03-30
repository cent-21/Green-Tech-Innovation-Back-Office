<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directeur extends Model
{
    protected $fillable = ["directeurName", "directeurCountry", "directeurImage"];
}
