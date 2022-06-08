<?php

namespace App\Http\Controllers;

use App\Models\compania;
use App\Models\viaje;
use App\Models\planeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViajeController extends Controller {

    public function listar_viajes() {
        $viaje = viaje::all();
    
        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            $compania = compania::find($destino->compania)->nombre;

            $destino->compania = $compania;
        }
        
        return view( '/Admin/ListarViajes', [
            'viaje'=> $viaje,
           
        ] );
    }

    public function crear_viaje( Request $request ) {
        $viaje = new Viaje;
        $viaje->hora = $request->hora;
        $viaje->punto_salida = $request->punto_salida;
        $viaje->punto_destino = $request->punto_destino;
        $viaje->fecha = $request->fecha;
        $viaje->compania = $request->compania;

        $viaje->save();

        return redirect()->action([ViajeController::class, 'listar_viajes']);

    }

    public function borrar_viaje($id){
        $viaje = Viaje::find($id);
        
        $viaje->delete();
     
        return redirect()->action([ViajeController::class, 'listar_viajes']);
    }

    public function viaje_Earth() {
        $viaje = DB::table( 'viaje' )->where( 'punto_destino', '1' )->get();
        $planeta = planeta::find( 1 )->nombre;

        return view( '/Viajes/viajesTierra', [
            'viaje' => $viaje,
            'planeta' => $planeta,

        ] );

    }

    public function viaje_ISS() {
        $viaje = DB::table( 'viaje' )->where( 'punto_destino', '2' )->get();
        $planeta = planeta::find( 2 )->nombre;

        return view( '/Viajes/viajesTierra', [
            'viaje' => $viaje,
            'planeta' => $planeta,
            // 'compania' => $compania,
        ] );

    }

    public function viaje_Moon() {
        $viaje = DB::table( 'viaje' )->where( 'punto_destino', '3' )->get();
        $planeta = planeta::find( 3 )->nombre;
        // $compania = $viaje->compania()->first()->nombre;
        // $compania = compania::find( 'nombre' )->where( '' );

        return view( '/Viajes/viajesTierra', [
            'viaje' => $viaje,
            'planeta' => $planeta,
            // 'compania' => $compania,
        ] );

    }

    public function viaje_Mars() {
        $viaje = DB::table( 'viaje' )->where( 'punto_destino', '4' )->get();
        $planeta = planeta::find( 4 )->nombre;
        // $compania = $viaje->compania()->first()->nombre;
        // $compania = compania::find( 'nombre' )->where( '' );

        return view( '/Viajes/viajesTierra', [
            'viaje' => $viaje,
            'planeta' => $planeta,
            // 'compania' => $compania,
        ] );

    }



}
