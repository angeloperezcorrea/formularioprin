<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pieza; // Asegúrate de importar el modelo Proyecto

class PiezaController extends Controller
{
    public function obtenerPiezas()
    {
        $pieza = Pieza::all(); // Obtener todos los proyectos desde la base de datos
        return response()->json($pieza);

    }
}
