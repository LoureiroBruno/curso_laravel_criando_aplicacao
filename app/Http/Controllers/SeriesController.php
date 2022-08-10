<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * retorno do metodo listar series
     *
     * @return string
     */
    public function index()
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        /** passando por array associativo */
        // return view('series.indexx', [
        //     'series' => $series
        // ]);

        /** outra forma enxuta*/
            // return view('series.indexx', compact('series'));

            /** envio para uma view do tipo php */
                //  return view('series.indexx', compact('series'));

            /** envio para uma view do tipo blade.php */
                // return view('series.index', compact('series'));

        /** outra forma exuta com referencia envio */
            return view('series.index')->with('series', $series);

    }
}
