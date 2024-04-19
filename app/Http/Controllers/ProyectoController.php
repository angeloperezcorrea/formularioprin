<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto; // Asegúrate de importar el modelo Proyecto

class ProyectoController extends Controller
{
    public function obtenerProyectos()
    {
        $proyecto = Proyecto::all(); // Obtener todos los proyectos desde la base de datos
        return response()->json($proyecto);
    }
}

