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

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }
}
