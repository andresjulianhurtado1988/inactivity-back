<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FechaSave;

class FileController extends Controller
{
    public function guardarFecha(Request $request)
    {

        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $joyeria = $params_array['joyeria'];
        $fecha = $params_array['fecha'];


        $registro = FechaSave::where([['joyeria_id', $joyeria], ['fecha_modificacion', $fecha]])->first();

        if ($registro) {

            $fecha = FechaSave::where('joyeria_id', $joyeria)->update(
                $params_array
            );

            $data = array(
                'status' => 'success',
                'code' => 200,
                'resp' => true
            );

        } else {
            $fechaSave = new FechaSave();
            $fechaSave->joyeria_id = $joyeria;
            $fechaSave->fecha_modificacion = $fecha;
            $fechaSave->save();

            $data = array(
                'status' => 'success',
                'code' => 200,
                'resp' => false
            );
        }


        // $inactividad = new FechaSave();
        // $inactividad->inactivity = 0;
        // $inactividad->save();

        // $data = array(
        //     'status' => 'success',
        //     'code' => 200,
        //     'inactividad' => $inactividad
        // );

        // devolver resultado
        // return response()->json($data, $data['code']);

    }
}
