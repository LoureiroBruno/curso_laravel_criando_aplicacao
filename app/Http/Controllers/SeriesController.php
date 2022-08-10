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
    public function listarSeries(): string
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        $html = "<ul>";
        foreach ($series as $serie) {
           $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}
