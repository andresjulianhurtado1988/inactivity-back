<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cuentas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_conceptos')->insert(
            array(
                array(
                    'concepto_id' => 3,
                    'concepto' => 'ARRENDMTO: PROP RAIZ(LOCALES)'
                ),
                array(
                    'concepto_id' => 5,
                    'concepto' => 'ASESORIA EXTERNAS: FENACOVEN'
                ),
                array(
                    'concepto_id' => 8,
                    'concepto' => 'COMPRAS: ACT FIJOS MENOR CUANT	'
                ),
                array(
                    'concepto_id' => 11,
                    'concepto' => 'COMPRAS: ELEMENTOS CAFETERÍA IVA19%	'
                ),
                array(
                    'concepto_id' => 12,
                    'concepto' => 'COMPRAS: ELEMENTOS DE ASEO'
                ),
                array(
                    'concepto_id' => 15,
                    'concepto' => 'COMPRAS: INSUMOS CONTRATACION Y VENTAS'
                ),
                array(
                    'concepto_id' => 16,
                    'concepto' => 'COMPRAS:  LITOGRAFIA'
                ),
                array(
                    'concepto_id' => 17,
                    'concepto' => 'COMPRAS: UTILES DE PAPELERÍA'
                ),
                array(
                    'concepto_id' => 20,
                    'concepto' => 'DOTACIÓN EMPLEADOS Y SUMINISTROS	'
                ),
                array(
                    'concepto_id' => 39,
                    'concepto' => 'IMPUESTO: DE RETEICA	'
                ),
                array(
                    'concepto_id' => 40,
                    'concepto' => 'IMPUESTO: INDUSTRIA Y COMERCIO	'
                ),
                array(
                    'concepto_id' => 45,
                    'concepto' => 'MANTNMTO: EQUIPOS ELÉCTRICOS	'
                ),
                array(
                    'concepto_id' => 50,
                    'concepto' => 'MANTNMTO: REPARA ELECTRICAS-ALARMAVISIÓN	'
                ),
                array(
                    'concepto_id' => 97,
                    'concepto' => 'PUBLICIDAD: RADIAL	'
                ),
                array(
                    'concepto_id' => 102,
                    'concepto' => 'SS PF: ENTIDADES PROMOTORAS DE SALUD EPS	'
                ),
                array(
                    'concepto_id' => 103,
                    'concepto' => 'SS PF: FONDOS DE PENSIONES AFP	'
                ),
                array(
                    'concepto_id' => 104,
                    'concepto' => 'SS PF: ADMIN DE RIESGOS LABORALES, ARL	'
                ),
                array(
                    'concepto_id' => 105,
                    'concepto' => 'SS PF: CAJA DE COMPENSACION FAMILIAR	'
                ),
                array(
                    'concepto_id' => 111,
                    'concepto' => 'SRVCIO: GARANTÍA ART. ARREGLO JOYAS-ELEC	'
                ),
                array(
                    'concepto_id' => 114,
                    'concepto' => 'SRVCIO: RESTAURANTE	'
                ),
                array(
                    'concepto_id' => 115,
                    'concepto' => 'SRVCIO: ASEO Y VIGILANCIA	'
                ),
                array(
                    'concepto_id' => 121,
                    'concepto' => 'SRVCIOS PUBLIC: ENERGÍA	SERVICIOS PUBLICOS SEPTIEMBRE '
                ),
                array(
                    'concepto_id' => 122,
                    'concepto' => 'SRVCIOS PUBLIC: INTERNET SERVICIOS PUBLICOS '
                ),
                array(
                    'concepto_id' => 123,
                    'concepto' => 'SRVCIOS PUBLIC: TELÉFONO SERVICIOS MES DE OCTUBRE 2023 CONTRTAO '
                ),
                array(
                    'concepto_id' => 125,
                    'concepto' => 'SRVCIOS PUBLIC: AGUA Y ALCANTARILLADO FACTURA MES DE AGOST0 '
                ),
                array(
                    'concepto_id' => 126,
                    'concepto' => 'SRVCIOS PUBLIC: AVANTEL	'
                ),
                array(
                    'concepto_id' => 127,
                    'concepto' => 'SRVCIOS PUBLIC: OTRAS ENTIDADES	'
                ),
                array(
                    'concepto_id' => 131,
                    'concepto' => 'SOSTNMTO LOCAL: ADECUACIONES LOCATIVAS	'
                ),
                array(
                    'concepto_id' => 140,
                    'concepto' => 'CUENTA POR COBRAR: A TERCEROS'
                ),
                array(
                    'concepto_id' => 141,
                    'concepto' => 'CANCELACION PLAN SEPARE	'
                ),
                array(
                    'concepto_id' => 154,
                    'concepto' => 'TRASLADO DE FONDOS SALIDA'
                ),
                array(
                    'concepto_id' => 165,
                    'concepto' => 'TRANSFORMACIÓN DE ORO'
                ),
                array(
                    'concepto_id' => 166,
                    'concepto' => 'ASESORIAS COMERCIALES'
                ),
                array(
                    'concepto_id' => 167,
                    'concepto' => 'TRASLADO DE FONDOS DATAFONO SALIDA	'
                ),
                array(
                    'concepto_id' => 172,
                    'concepto' => 'REVISORIA FISCAL'
                ),
                array(
                    'concepto_id' => 182,
                    'concepto' => 'CXP A TERCEROS'
                ),
                array(
                    'concepto_id' => 186,
                    'concepto' => 'SERVICIO DE DIGITACION	'
                ),
                array(
                    'concepto_id' => 192,
                    'concepto' => 'CANC. ANTICIPO FABRICACIÓN JOYERÍA'
                ),
                array(
                    'concepto_id' => 196,
                    'concepto' => 'REFACCIÓN	'
                ),
                array(
                    'concepto_id' => 199,
                    'concepto' => 'SERVICIO LOGISTICA	'
                ),
                array(
                    'concepto_id' => 200,
                    'concepto' => 'COMISIÓN MASRED	'
                ),
                array(
                    'concepto_id' => 243,
                    'concepto' => 'COMPRA DE INVENTARIO EN CONSIGNACIÓN	'
                ),
                array(
                    'concepto_id' => 247,
                    'concepto' => 'ABONOS Y PAGOS CXC	'
                ),
                array(
                    'concepto_id' => 250,
                    'concepto' => 'TRASLADO DE FONDOS ENTRADA'
                ),
                array(
                    'concepto_id' => 254,
                    'concepto' => 'CUENTA POR PAGAR: A TERCEROS	'
                ),
                array(
                    'concepto_id' => 286,
                    'concepto' => 'ANTICIPO FABRICACIÓN JOYERÍA	'
                ),
                array(
                    'concepto_id' => 332,
                    'concepto' => 'OPERACIONES EFECTY	'
                ),
            )
        );
    }
}






