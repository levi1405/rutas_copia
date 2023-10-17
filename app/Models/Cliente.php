<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombre',
        'edad',
        'categoria'
    ];
    

    /* Convertir lo que ingrese en el campo nombre a minusculas 
    usando mutadores */
    protected function nombre():Attribute
    {
        return new Attribute(
            get:function($valor){
                return ucwords($valor);
            },
            
            set:function($valor){
            return mb_strtolower($valor,);
            }
        );
    }
    /* protected function setNombreAttribute($valor){
        // upercase words
        $this->attributes['nombre']=ucwords(strtolower($valor));
    } */
}
