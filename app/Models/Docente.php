<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['documento_identidad','nombres','apellidos','genero','profesion','facultad','telefono','dir_resi','email'];
}
