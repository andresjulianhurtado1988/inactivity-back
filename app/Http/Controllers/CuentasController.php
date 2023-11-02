<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cuentas;
use App\Models\Conceptos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuentasController extends Controller
{
    public function verConceptos()
    {

        $data = array(
            'status' => 'success',
            'code' => 200,
            'conceptos' => Conceptos::all()
        );

        // devolver resultado
        return response()->json($data, $data['code']);
    }




    public function verCuentas()
    {
        $data = array(
            'status' => 'success',
            'code' => 200,
            'cuentas' => Cuentas::all()
        );

        // devolver resultado
        return response()->json($data, $data['code']);
    }


    public function concepto_cuenta(Request $request)
    {

        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $concepto_id = $params_array['concepto_id'];

        $queryBuilder = DB::table('tbl_prueba_descripcion_cuenta')
            ->select('cuenta')
            ->whereIn('concepto_contable_id', $concepto_id)
            ->where('cuenta', '>', 0)
            ->groupBy('cuenta')
            ->orderBy('cuenta', 'ASC');

        $cuentas = $queryBuilder->get();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'cuentas' => $cuentas
        );

        return response()->json($data, $data['code']);
    }

    public function verTablaCuentas(Request $request)
    {


        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $concepto_id = $params_array['conceptos_id'];
        $cuentas = $params_array['cuentas'];

        $queryBuilder = DB::table('tbl_prueba_descripcion_cuenta AS cu')
            ->select('cu.concepto_contable_id', 'co.concepto', 'cu.cuenta', 'cu.subtotal', 'cu.iva', 'cu.total', 'cu.rte_fte', 'cu.rte_iva', 'cu.rte_ica')
            ->leftJoin('tbl_prueba_conceptos AS co', 'co.id_concepto_contable', '=', 'cu.concepto_contable_id')
            ->whereIn('cu.concepto_contable_id', $concepto_id)
            ->groupBy('cu.concepto_contable_id', 'co.concepto', 'cu.cuenta', 'cu.subtotal', 'cu.iva', 'cu.total', 'cu.rte_fte', 'cu.rte_iva', 'cu.rte_ica')
            ->orderBy('cu.cuenta', 'ASC');

        if (!empty($cuentas)) {

            $queryBuilder->whereIn('cu.cuenta', $cuentas);
        }

        $cuent = $queryBuilder->get();


        $data = array(
            'status' => 'success',
            'code' => 200,
            'cuentas' => $cuent
        );

        return response()->json($data, $data['code']);
    }


    public function detalleConceptos(Request $request)
    {


        $json = $request->input('json', null);
        $params_array = json_decode($json, true);


        $concepto_id = $params_array['datos_concepto'];
        $cuentas = $params_array['datos_cuenta'];


        $queryConcept = DB::table('tbl_prueba_conceptos')
            ->select('concepto')
            ->where('id_concepto_contable', $concepto_id)
            ->get();


        foreach ($queryConcept as $key => $value) {
            $nombreConcepto = $value->concepto;
        }


        $queryBuilder = DB::table('tbl_prueba_descripcion_cuenta AS cu')
            ->select('cu.descripcion', 'cu.cuenta', 'cu.subtotal', 'cu.iva', 'cu.total', 'cu.rte_fte', 'cu.rte_iva', 'cu.rte_ica')
            ->leftJoin('tbl_prueba_conceptos AS co', 'co.id_concepto_contable', '=', 'cu.concepto_contable_id')
            ->where('cu.concepto_contable_id', $concepto_id)
            ->groupBy('cu.descripcion', 'cu.cuenta', 'cu.subtotal', 'cu.iva', 'cu.total', 'cu.rte_fte', 'cu.rte_iva', 'cu.rte_ica')
            ->orderBy('cu.cuenta', 'ASC');

        if (!empty($cuentas)) {

            $queryBuilder->where('cu.cuenta', $cuentas);
        }

        $cuent = $queryBuilder->get();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'respuesta' => $cuent,
            'nombreConcepto' => $nombreConcepto
        );

        return response()->json($data, $data['code']);

    }
}
