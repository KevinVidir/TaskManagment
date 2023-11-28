<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaControlador extends Controller
{
public function Crear(Request $request){
$tarea = new Tarea();
$tarea -> Nombre = $request -> Nombre;
$tarea -> Descripcion = $request -> Descripcion;
$tarea -> FechaEntrega = $request -> FechaEntrega;  

$tarea -> save();
return $tarea;
}    
public function Update(Request $request, $IDtarea   ){
    $tarea = Tarea::FindOrFail($IDtarea);
    $tarea -> Nombre = $request -> Nombre;
    $tarea -> Descripcion = $request -> Descripcion;
    $tarea -> FechaEntrega = $request -> FechaEntrega;  
    
    $tarea -> save();
return $tarea;
    }    
    public function Delete(Request $request, $IDtarea){
        $tarea = Tarea::FindOrFile($IDtarea);
        
        $tarea -> Delete();
        return  ["message" => "Se a borrado correctamente" ];
        
    }    
    public function Read(Request $request  ){
       return Tarea::all();
        }
        public function ReadOne(Request $request, $IDtarea){
            return Tarea::FindOrFail($IDtarea);

             }
}
