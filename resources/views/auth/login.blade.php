<!DOCTYPE html>
<html lang="es">
<head>
<title>Formulario de Registro</title>
  <x-guest-layout>
    <!-- Session Status -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('estilo.css') }}">
    <script  src="{{ asset('registro.js') }}"></script>


    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    select {
        width: calc(100% - 10px);
        margin-bottom: 10px;
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    .invalid {
        border-color: #f00;
    }
</style>



  
</head>
<body>
  <form id="registroForm">
    <label for="fechaHora">Fecha y Hora:</label>
    <input type="text" id="fechaHora" name="fechaHora" readonly>
    <br>

    <label for="proyecto">Proyecto:</label>
    <select id="proyecto" name="proyecto"></select>
    <br>

    <label for="bloque">Bloque:</label>
    <select id="bloque" name="bloque"></select>
    <br>

    <label for="pieza">Pieza:</label>
    <select id="pieza" name="pieza"></select>
    <label for="peso teorico">Pero teorico:</label>
    <input type="text" id="pesoTeorico" name="pesoTeorico" readonly>
    <br>

    <label for="pesoReal">Peso Real:</label>
    <input type="text" id="pesoReal" name="pesoReal">
    <br>

    <button type="submit">Registrar</button>
  </form>
  </x-guest-layout>
</body>
</html>



