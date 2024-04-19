<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloque; // Asegúrate de importar el modelo Proyecto

class BloqueController extends Controller
{
    public function obtenerBloques()
    {
        $bloque = bloque::all(); // Obtener todos los proyectos desde la base de datos
        return response()->json($bloque);
    }
}