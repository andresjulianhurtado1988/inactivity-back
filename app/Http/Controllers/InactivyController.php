<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inactivity;

class InactivyController extends Controller
{
    public function createInactivity(Request $request)
    {

        //pasados 5 segundos, se guarda de manera automática que indica que no hay actividad
        $inactividad = new Inactivity();
        $inactividad->inactivity = 0;
        $inactividad->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'inactividad' => $inactividad
        );

        // devolver resultado
        return response()->json($data, $data['code']);


    }

    public function createActivity(Request $request)
    {

        //cuango se reanuda la actividad en la página, se registra la actividad

        $inactividad = new Inactivity();
        $inactividad->inactivity = 1;
        $inactividad->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'inactividad' => $inactividad
        );

        // devolver resultado
        return response()->json($data, $data['code']);


    }
}
