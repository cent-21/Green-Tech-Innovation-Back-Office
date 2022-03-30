<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patner extends Model
{
    protected $fillable = ['patnerLink', 'patnerName', 'patnerLogo'];
}
