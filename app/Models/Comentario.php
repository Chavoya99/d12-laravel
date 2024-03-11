<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{   
    use HasFactory;

    //Lista de campos manipulables
    //Las que sí puede manipular
    protected $fillable = ['nombre', 'correo', 'comentario', 'ciudad', 'user_id'];

    //Las que no puede manipular
    //protected $guarded = [ 'id', 'created_at', 'updated_at']; 

    public function user(){
        return $this->belongsTo(User::class);
    }
}
