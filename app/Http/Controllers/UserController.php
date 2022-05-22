<?php

namespace App\Http\Controllers;

use App\Models\compania;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\planeta;

class UserController extends Controller {

    public function viajes_usuario() {
        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes();
        $compania = [];
        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            array_push( $compania, $destino->companias()->first()->nombre );

        }
        return view( '/profile', [
            'viaje' => $viaje,
            'compania'=> $compania

        ] );

    }

    public function viajes_usuario_editar() {
        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes();
        $compania = [];
        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            array_push( $compania, $destino->companias()->first()->nombre );

        }
        return view( '/edit_profile', [
            'viaje' => $viaje,
            'compania'=> $compania

        ] );
    }

}
