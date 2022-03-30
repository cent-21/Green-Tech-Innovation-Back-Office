<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ["teamName", "teamTel", "teamMail", "teamImage", "teamPost", "teamDetail", "directionId", "teamPost"];
}
