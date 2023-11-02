<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PruebaConceptos extends Seeder
{

    public function run(): void
    {
        DB::table('tbl_prueba_conceptos')->insert(
            array(
                array(
                    'id_concepto_contable' => 3,
                    'concepto' => 'ARRENDMTO: PROP RAIZ(LOCALES) '
                ),
                array(
                    'id_concepto_contable' => 5,
                    'concepto' => 'ASESORIA EXTERNAS: FENACOVEN '
                ),
                array(
                    'id_concepto_contable' => 8,
                    'concepto' => 'COMPRAS: ACT FIJOS MENOR CUANT '
                ),
                array(
                    'id_concepto_contable' => 11,
                    'concepto' => 'COMPRAS: ELEMENTOS CAFETERÍA IVA19% '
                ),
                array(
                    'id_concepto_contable' => 12,
                    'concepto' => 'COMPRAS: ELEMENTOS DE ASEO '
                ),
                array(
                    'id_concepto_contable' => 15,
                    'concepto' => 'COMPRAS: INSUMOS CONTRATACION Y VENTAS '
                ),
                array(
                    'id_concepto_contable' => 16,
                    'concepto' => 'COMPRAS:  LITOGRAFIA '
                ),
                array(
                    'id_concepto_contable' => 17,
                    'concepto' => 'COMPRAS: UTILES DE PAPELERÍA '
                ),
                array(
                    'id_concepto_contable' => 20,
                    'concepto' => 'DOTACIÓN EMPLEADOS Y SUMINISTROS '
                ),
                array(
                    'id_concepto_contable' => 39,
                    'concepto' => 'IMPUESTO: DE RETEICA '
                ),
                array(
                    'id_concepto_contable' => 40,
                    'concepto' => 'IMPUESTO: INDUSTRIA Y COMERCIO '
                ),
                array(
                    'id_concepto_contable' => 45,
                    'concepto' => 'MANTNMTO: EQUIPOS ELÉCTRICOS '
                ),
                array(
                    'id_concepto_contable' => 50,
                    'concepto' => 'MANTNMTO: REPARA ELECTRICAS-ALARMAVISIÓN '
                ),
                array(
                    'id_concepto_contable' => 97,
                    'concepto' => 'PUBLICIDAD: RADIAL '
                ),
                array(
                    'id_concepto_contable' => 102,
                    'concepto' => 'SS PF: ENTIDADES PROMOTORAS DE SALUD EPS '
                ),
                array(
                    'id_concepto_contable' => 103,
                    'concepto' => 'SS PF: FONDOS DE PENSIONES AFP '
                ),
                array(
                    'id_concepto_contable' => 104,
                    'concepto' => 'SS PF: ADMIN DE RIESGOS LABORALES, ARL '
                ),
                array(
                    'id_concepto_contable' => 105,
                    'concepto' => 'SS PF: CAJA DE COMPENSACION FAMILIAR '
                ),
                array(
                    'id_concepto_contable' => 111,
                    'concepto' => 'SRVCIO: GARANTÍA ART. ARREGLO JOYAS-ELEC '
                ),
                array(
                    'id_concepto_contable' => 114,
                    'concepto' => 'SRVCIO: RESTAURANTE '
                ),
                array(
                    'id_concepto_contable' => 115,
                    'concepto' => 'SRVCIO: ASEO Y VIGILANCIA '
                ),
                array(
                    'id_concepto_contable' => 121,
                    'concepto' => 'SRVCIOS PUBLIC: ENERGÍA '
                ),
                array(
                    'id_concepto_contable' => 122,
                    'concepto' => 'SRVCIOS PUBLIC: INTERNET '
                ),
                array(
                    'id_concepto_contable' => 123,
                    'concepto' => 'SRVCIOS PUBLIC: TELÉFONO '
                ),
                array(
                    'id_concepto_contable' => 125,
                    'concepto' => 'SRVCIOS PUBLIC: AGUA Y ALCANTARILLADO '
                ),
                array(
                    'id_concepto_contable' => 126,
                    'concepto' => 'SRVCIOS PUBLIC: AVANTEL '
                ),
                array(
                    'id_concepto_contable' => 127,
                    'concepto' => 'SRVCIOS PUBLIC: OTRAS ENTIDADES '
                ),
                array(
                    'id_concepto_contable' => 131,
                    'concepto' => 'SOSTNMTO LOCAL: ADECUACIONES LOCATIVAS '
                ),
                array(
                    'id_concepto_contable' => 140,
                    'concepto' => 'CUENTA POR COBRAR: A TERCEROS '
                ),
                array(
                    'id_concepto_contable' => 141,
                    'concepto' => 'CANCELACION PLAN SEPARE '
                ),
                array(
                    'id_concepto_contable' => 154,
                    'concepto' => 'TRASLADO DE FONDOS SALIDA '
                ),
                array(
                    'id_concepto_contable' => 165,
                    'concepto' => 'TRANSFORMACIÓN DE ORO '
                ),
                array(
                    'id_concepto_contable' => 166,
                    'concepto' => 'ASESORIAS COMERCIALES '
                ),
                array(
                    'id_concepto_contable' => 167,
                    'concepto' => 'TRASLADO DE FONDOS DATAFONO SALIDA '
                ),
                array(
                    'id_concepto_contable' => 172,
                    'concepto' => 'REVISORIA FISCAL '
                ),
                array(
                    'id_concepto_contable' => 182,
                    'concepto' => 'CXP A TERCEROS '
                ),
                array(
                    'id_concepto_contable' => 186,
                    'concepto' => 'SERVICIO DE DIGITACION '
                ),
                array(
                    'id_concepto_contable' => 192,
                    'concepto' => 'CANC. ANTICIPO FABRICACIÓN JOYERÍA '
                ),
                array(
                    'id_concepto_contable' => 196,
                    'concepto' => 'REFACCIÓN '
                ),
                array(
                    'id_concepto_contable' => 199,
                    'concepto' => 'SERVICIO LOGISTICA '
                ),
                array(
                    'id_concepto_contable' => 200,
                    'concepto' => 'COMISIÓN MASRED '
                ),
                array(
                    'id_concepto_contable' => 243,
                    'concepto' => 'COMPRA DE INVENTARIO EN CONSIGNACIÓN '
                ),
                array(
                    'id_concepto_contable' => 247,
                    'concepto' => 'ABONOS Y PAGOS CXC '
                ),
                array(
                    'id_concepto_contable' => 250,
                    'concepto' => 'TRASLADO DE FONDOS ENTRADA '
                ),
                array(
                    'id_concepto_contable' => 254,
                    'concepto' => 'CUENTA POR PAGAR: A TERCEROS '
                ),
                array(
                    'id_concepto_contable' => 286,
                    'concepto' => 'ANTICIPO FABRICACIÓN JOYERÍA '
                ),
                array(
                    'id_concepto_contable' => 332,
                    'concepto' => 'OPERACIONES EFECTY '
                ),


            )
        );

    }
}
