<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function descargarArchivo()
    {

        $nombre_archivo = 'C:\Users\Equipo_03\Desktop\prueba\archivoPrueba.txt';

        if (file_exists($nombre_archivo)) {
            $otro_contenido = ' dos punto cero';
            $contenido = file_get_contents($nombre_archivo);
            $nuevo_contenido = $contenido . $otro_contenido;
        } else {
            $nuevo_contenido = 'información que contiene el archivo de prueba';
        }

        return Storage::disk('public')->put('archivoPrueba.txt', $nuevo_contenido);


        //    foreach ($arrayPrueba as $open) {
        // return Storage::disk('public')->put('archivoPruebba.txt', $nuevo_contenido);
        //     $hoursOpen = Storage::disk('public')->put('hours.txt', "$request->open");
        //   }

    }
}
