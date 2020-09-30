<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use \Illuminate\Support\Arr;

class FechaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($fecha_entrada = null, $fecha_salida = null) {//dd(today()->format('Y-m-d'));//format default  
        $f1 = new Carbon($fecha_entrada, null);
        $f2 = new Carbon($fecha_salida, null);
        $fecha1 = $f1->copy();
        $fecha2 = $f2->copy();
        $fechasArray = null;
        $i = 0;
        if ($fecha1->equalTo($fecha2)) {
            $fechasArray = Arr::add($fechasArray, $i, $fecha1->copy());
        } else {
            while ($fecha1->notEqualTo($fecha2)) {
                $fechasArray = Arr::add($fechasArray, $i, $fecha1->copy());
                $fecha1->addDays(1);
                $i++;
            }
        }
        return Arr::flatten($fechasArray);
    }
    public function Full2DateCalculations($fecha_entrada = null, $fecha_salida = null) {
        //si son iguales devuelve la primera
        if ($fecha1->equalTo($fecha2)) {
            
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
//
    }

}
