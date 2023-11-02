<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumCuentas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_cuentas_concepto')->insert(
            array(

                array(
                    'concepto_id' => 3,
                    'cuenta' => 110505,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 140,
                    'cuenta' => 138095,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 8,
                    'cuenta' => 152410,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 8,
                    'cuenta' => 152499,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 186,
                    'cuenta' => 170540,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 154,
                    'cuenta' => 230505,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 332,
                    'cuenta' => 230535,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 200,
                    'cuenta' => 236520,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 172,
                    'cuenta' => 236805,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 102,
                    'cuenta' => 237005,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 104,
                    'cuenta' => 237006,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 182,
                    'cuenta' => 238095,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 12,
                    'cuenta' => 240816,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 3,
                    'cuenta' => 240821,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 192,
                    'cuenta' => 280505,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 172,
                    'cuenta' => 511010,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 20,
                    'cuenta' => 520551,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 166,
                    'cuenta' => 521040,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 40,
                    'cuenta' => 521505,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 3,
                    'cuenta' => 522010,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 122,
                    'cuenta' => 523535,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 50,
                    'cuenta' => 525005,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 200,
                    'cuenta' => 529505,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 12,
                    'cuenta' => 529525,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 16,
                    'cuenta' => 529530,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 114,
                    'cuenta' => 529560,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 8,
                    'cuenta' => 11050501,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 12,
                    'cuenta' => 11050502,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 16,
                    'cuenta' => 11050503,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 20,
                    'cuenta' => 11050504,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 5,
                    'cuenta' => 11050505,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 11,
                    'cuenta' => 11050506,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 15,
                    'cuenta' => 11050507,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 40,
                    'cuenta' => 11050508,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 17,
                    'cuenta' => 11050509,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 50,
                    'cuenta' => 11050510,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 39,
                    'cuenta' => 11050511,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 45,
                    'cuenta' => 11050512,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 102,
                    'cuenta' => 11050513,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 97,
                    'cuenta' => 11050514,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 104,
                    'cuenta' => 11050515,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 114,
                    'cuenta' => 11050516,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 103,
                    'cuenta' => 11050517,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 105,
                    'cuenta' => 11050519,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 111,
                    'cuenta' => 11050521,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 122,
                    'cuenta' => 11050523,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 115,
                    'cuenta' => 11050524,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 126,
                    'cuenta' => 11050527,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 121,
                    'cuenta' => 11050528,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 140,
                    'cuenta' => 11050529,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 123,
                    'cuenta' => 11050530,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 154,
                    'cuenta' => 11050531,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 125,
                    'cuenta' => 11050532,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 127,
                    'cuenta' => 11050533,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 131,
                    'cuenta' => 11050534,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 166,
                    'cuenta' => 11050536,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 172,
                    'cuenta' => 11050540,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 141,
                    'cuenta' => 11050543,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 182,
                    'cuenta' => 11050544,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 165,
                    'cuenta' => 11050545,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 186,
                    'cuenta' => 11050547,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 167,
                    'cuenta' => 11050550,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 199,
                    'cuenta' => 11050551,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 192,
                    'cuenta' => 11050552,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 196,
                    'cuenta' => 11050554,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 243,
                    'cuenta' => 11050555,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 247,
                    'cuenta' => 11050559,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 200,
                    'cuenta' => 11050561,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 250,
                    'cuenta' => 11050563,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 254,
                    'cuenta' => 11050565,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 286,
                    'cuenta' => 11050567,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 332,
                    'cuenta' => 11050568,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 247,
                    'cuenta' => 13659559,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 250,
                    'cuenta' => 23050563,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 167,
                    'cuenta' => 23051050,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 166,
                    'cuenta' => 23651501,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 50,
                    'cuenta' => 23652503,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 114,
                    'cuenta' => 23652505,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 3,
                    'cuenta' => 23653001,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 8,
                    'cuenta' => 23654001,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 3,
                    'cuenta' => 23680505,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 8,
                    'cuenta' => 23680510,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 39,
                    'cuenta' => 23680511,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 105,
                    'cuenta' => 23701019,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 103,
                    'cuenta' => 23704517,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 254,
                    'cuenta' => 23809563,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 16,
                    'cuenta' => 24081601,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 20,
                    'cuenta' => 24081602,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 11,
                    'cuenta' => 24081606,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 15,
                    'cuenta' => 24081607,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 17,
                    'cuenta' => 24081609,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 131,
                    'cuenta' => 24081634,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 243,
                    'cuenta' => 24081655,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 50,
                    'cuenta' => 24082108,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 45,
                    'cuenta' => 24082112,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 97,
                    'cuenta' => 24082114,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 111,
                    'cuenta' => 24082121,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 122,
                    'cuenta' => 24082122,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 115,
                    'cuenta' => 24082124,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 126,
                    'cuenta' => 24082126,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 123,
                    'cuenta' => 24082130,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 166,
                    'cuenta' => 24082135,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 172,
                    'cuenta' => 24082139,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 165,
                    'cuenta' => 24082145,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 186,
                    'cuenta' => 24082146,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 199,
                    'cuenta' => 24082151,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 196,
                    'cuenta' => 24082153,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 200,
                    'cuenta' => 24082160,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 141,
                    'cuenta' => 28050543,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 286,
                    'cuenta' => 28050566,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 114,
                    'cuenta' => 51158501,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 126,
                    'cuenta' => 51158502,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 5,
                    'cuenta' => 52251005,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 115,
                    'cuenta' => 52350524,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 125,
                    'cuenta' => 52352532,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 121,
                    'cuenta' => 52353028,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 126,
                    'cuenta' => 52353525,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 123,
                    'cuenta' => 52353530,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 97,
                    'cuenta' => 52356014,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 127,
                    'cuenta' => 52359533,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 199,
                    'cuenta' => 52359551,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 15,
                    'cuenta' => 52451507,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 45,
                    'cuenta' => 52451512,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 111,
                    'cuenta' => 52451521,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 131,
                    'cuenta' => 52501534,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 11,
                    'cuenta' => 52952506,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 17,
                    'cuenta' => 52953009,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 196,
                    'cuenta' => 61352005,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 165,
                    'cuenta' => 1435100545,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 243,
                    'cuenta' => 1435301055,
                    'naturaleza' => 'D'
                ),

                array(
                    'concepto_id' => 172,
                    'cuenta' => 2365150141,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 115,
                    'cuenta' => 2365250224,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 45,
                    'cuenta' => 2365250312,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 97,
                    'cuenta' => 2365250314,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 111,
                    'cuenta' => 2365250321,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 131,
                    'cuenta' => 2365250334,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 165,
                    'cuenta' => 2365250345,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 186,
                    'cuenta' => 2365250348,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 199,
                    'cuenta' => 2365250351,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 196,
                    'cuenta' => 2365250356,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 114,
                    'cuenta' => 2365250520,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 12,
                    'cuenta' => 2365400102,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 20,
                    'cuenta' => 2365400103,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 11,
                    'cuenta' => 2365400106,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 15,
                    'cuenta' => 2365400107,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 17,
                    'cuenta' => 2365400109,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 243,
                    'cuenta' => 2365400455,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 50,
                    'cuenta' => 2367011501,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 8,
                    'cuenta' => 2367011502,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 3,
                    'cuenta' => 2367011503,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 20,
                    'cuenta' => 2367011504,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 50,
                    'cuenta' => 2368050501,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 5,
                    'cuenta' => 2368050505,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 45,
                    'cuenta' => 2368050512,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 97,
                    'cuenta' => 2368050514,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 114,
                    'cuenta' => 2368050518,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 111,
                    'cuenta' => 2368050521,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 115,
                    'cuenta' => 2368050524,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 131,
                    'cuenta' => 2368050534,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 166,
                    'cuenta' => 2368050537,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 165,
                    'cuenta' => 2368050545,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 196,
                    'cuenta' => 2368050557,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 12,
                    'cuenta' => 2368051001,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 16,
                    'cuenta' => 2368051002,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 20,
                    'cuenta' => 2368051003,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 11,
                    'cuenta' => 2368051006,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 15,
                    'cuenta' => 2368051007,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 17,
                    'cuenta' => 2368051009,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 16,
                    'cuenta' => 23654001001,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 45,
                    'cuenta' => 236701150112,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 115,
                    'cuenta' => 236701150115,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 111,
                    'cuenta' => 236701150121,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 131,
                    'cuenta' => 236701150134,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 172,
                    'cuenta' => 236701150142,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 165,
                    'cuenta' => 236701150145,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 186,
                    'cuenta' => 236701150149,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 196,
                    'cuenta' => 236701150158,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 12,
                    'cuenta' => 236701150201,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 16,
                    'cuenta' => 236701150202,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 11,
                    'cuenta' => 236701150206,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 15,
                    'cuenta' => 236701150207,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 17,
                    'cuenta' => 236701150209,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 97,
                    'cuenta' => 236701150314,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 166,
                    'cuenta' => 236701150338,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 199,
                    'cuenta' => 236701150351,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 200,
                    'cuenta' => 236701150362,
                    'naturaleza' => 'C'
                ),

                array(
                    'concepto_id' => 243,
                    'cuenta' => 236701150455,
                    'naturaleza' => 'C'
                ),
            )
        );
    }
}

