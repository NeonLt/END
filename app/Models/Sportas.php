<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sportas extends Model
{
    protected $fillable = ["name", "file_path", "created_at", "updated_at"];
}
