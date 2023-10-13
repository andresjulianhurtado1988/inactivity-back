<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Http\Controllers\Controller;
use App\Models\Tiendas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{

    public function verTabla(Request $request)
    {

        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $fecha_ini = date("Y-m-d", strtotime($params_array['fechaIni']));
        $fecha_fin = date("Y-m-d", strtotime($params_array['fechaFin']));

        $vendedor_id = $params_array['vendedor_id'];

        $joyeria_id = array_filter($params_array['joyeria_id']);


        $queryBuilder = DB::table('ventas AS ve')
            ->select(
                've.cantidad',
                // DB::raw('SUM(ve.cantidad) as cantidad'),
                've.fecha_venta',
                't.nombre',
                'v.nombre_vendedor',
                've.dato_uno',
                've.dato_dos',
                've.dato_tres',
                've.dato_cuatro',
                've.dato_cinco',
                've.dato_seis',
                've.dato_siete',
                've.dato_ocho',
                've.dato_nueve',
                've.dato_diez',
                've.dato_doce',
                've.dato_agachese',
                've.dato_catorce',
                've.dato_quince',
                've.dato_quince_mas_uno'
            )
            ->leftJoin('vendedores AS v', 'v.id', '=', 've.vendedor_id')
            ->leftJoin('tiendas AS t', 't.id', '=', 'v.tienda_id')
            ->whereBetween('ve.fecha_venta', [$fecha_ini, $fecha_fin])
            ->orderBy('ve.fecha_venta', 'ASC');
        if (!empty($joyeria_id)) {

            $queryBuilder->whereIn('t.id', $joyeria_id);
        }

        if (!is_null($vendedor_id)) {
            $queryBuilder->whereIn('v.id', $vendedor_id);
        }

        $ventas = $queryBuilder->get();



        $data = array(
            'status' => 'success',
            'code' => 200,
            'ventas' => $ventas

        );


        return response()->json($data, $data['code']);
    }

    public function verTiendas()
    {

        $data = array(
            'status' => 'success',
            'code' => 200,
            'tiendas' => Tiendas::all()
        );

        // devolver resultado
        return response()->json($data, $data['code']);
    }

    public function verEmpleados(Request $request)
    {


        $json = $request->input('json', null);
        $params_array = json_decode($json, true);


        $joyeria_id = array_filter($params_array['joyeria_id']);

        $vendedores = DB::table('vendedores AS v')
            ->select(
                'v.id',
                't.nombre',
                'v.nombre_vendedor'
            )
            ->leftJoin('tiendas AS t', 't.id', '=', 'v.tienda_id')
            ->whereIn('v.tienda_id', $joyeria_id)
            ->orderBy('v.tienda_id', 'ASC')
            ->get();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'vendedores' => $vendedores
        );

        return response()->json($data, $data['code']);

    }

    public function createExcel(Request $request)
    {
        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $fecha_ini = date("Y-m-d", strtotime($params_array['fechaIni']));
        $fecha_fin = date("Y-m-d", strtotime($params_array['fechaFin']));

        $vendedor_id = $params_array['vendedor_id'];

        $joyeria_id = array_filter($params_array['joyeria_id']);


        $queryBuilder = DB::table('ventas AS ve')
            ->select(
                've.cantidad',
                // DB::raw('SUM(ve.cantidad) as cantidad'),
                've.fecha_venta',
                't.nombre',
                'v.nombre_vendedor',
                've.dato_uno',
                've.dato_dos',
                've.dato_tres',
                've.dato_cuatro',
                've.dato_cinco',
                've.dato_seis',
                've.dato_siete',
                've.dato_ocho',
                've.dato_nueve',
                've.dato_diez',
                've.dato_doce',
                've.dato_agachese',
                've.dato_catorce',
                've.dato_quince',
                've.dato_quince_mas_uno'
            )
            ->leftJoin('vendedores AS v', 'v.id', '=', 've.vendedor_id')
            ->leftJoin('tiendas AS t', 't.id', '=', 'v.tienda_id')
            ->whereBetween('ve.fecha_venta', [$fecha_ini, $fecha_fin])
            ->orderBy('ve.fecha_venta', 'ASC')
            // ->groupBy('ve.vendedor_id')
            // ->groupBy('ve.fecha_venta')
            // ->groupBy('t.nombre')
            // ->groupBy('v.nombre_vendedor')
        ;

        if (!empty($joyeria_id)) {

            $queryBuilder->whereIn('t.id', $joyeria_id);
        }

        if (!is_null($vendedor_id)) {
            $queryBuilder->whereIn('v.id', $vendedor_id);
        }

        $ventas = $queryBuilder->get();

        return Excel::download(new UserExport($ventas), 'ventas.xlsx');
    }



}