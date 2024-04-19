<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro; // Asegúrate de importar el modelo Proyecto

class   RegistroController extends Controller
{
    public function obtenerRegistros()
    {
        $registro = registro::all(); // Obtener todos los proyectos desde la base de datos
        return response()->json($registro);
    }
}
