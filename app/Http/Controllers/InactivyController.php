<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inactivity;

class InactivyController extends Controller
{
    public function createInactivity(Request $request)
    {

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