<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use \Illuminate\Support\Arr;

class FechaController extends Controller {

    /**
     * Display a listing of the resource.
     * Aqui se devuelve un arreglo de dias o una cantidad de dias 
     * 
     * @return \Illuminate\Http\Response http://localhost:8000/fecha/2020-01-01/2020-02-02/0/1
     */
    public function index($fecha_entrada = null, $fecha_salida = null, $dias = null, $formatoYmd = null) {//dd(today()->format('Y-m-d'));//format default  
        $f1 = new Carbon($fecha_entrada, null);
        $f2 = new Carbon($fecha_salida, null);
        $fecha1 = $f1->copy();
        $fecha2 = $f2->copy();
        $fechasArray = null;
        $i = 0;
        //si son iguales devuelve la primera
        if ($fecha1->equalTo($fecha2)) {
            if ($formatoYmd) {
                $fechasArray = Arr::add($fechasArray, $i, $fecha1->copy()->format('Y-m-d'));
            } else {
                $fechasArray = Arr::add($fechasArray, $i, $fecha1->copy());
            }
            $i = 1;
        } else {
            if ($fecha1 > $fecha2) {//f1 es mayor
                $fechasArray = [];
                $i = -1;
            } else {
                while ($fecha1->notEqualTo($fecha2)) {//esta bien entonces a recorrer
                    if ($formatoYmd) {
                        $fechasArray = Arr::add($fechasArray, $i, $fecha1->copy()->format('Y-m-d'));
                    } else {
                        $fechasArray = Arr::add($fechasArray, $i, $fecha1->copy()); //sin formato
                    }
                    $fecha1->addDays(1);
                    $i++;
                }
            }
        }
        if ($dias) {
            return $i;
        }
        return Arr::flatten($fechasArray);
    }

    public function Full2DateCalculations($fecha_entrada = null, $fecha_salida = null) {
        $f1 = new Carbon($fecha_entrada, null);
        $f2 = new Carbon($fecha_salida, null);
        $fecha1 = $f1->copy();
        $fecha2 = $f2->copy();
        $fechasArray = null;
        $i = 0;

        //si son iguales devuelve la primera
        if ($fecha1->equalTo($fecha2)) {
            $fechasArray = Arr::add($fechasArray, $i, $fecha1->copy());
        } else {
            if ($fecha1 > $fecha2) {
                $fechasArray = [];
            } else {
                while ($fecha1->notEqualTo($fecha2)) {
                    $fechasArray = Arr::add($fechasArray, $i, $fecha1->copy());
                    $fecha1->addDays(1);
                    $i++;
                }
            }
        }
        return Arr::flatten($fechasArray);
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
