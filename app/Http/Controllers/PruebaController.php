<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'esta es una prueba';
    }
    public function conficto()
    {
        $xlo = 'Este es un mensaje mas largo de conficto';
        //asdasdasdasd
        return $xlo;
    }

    public function confictro()
    {
        $xlo = 'Este es un mensaje mas largo de conficto';
        return $xlo;
    }

    public function fff($id)
    {
        /**
         * solo datos vacios
         */
    }

}
