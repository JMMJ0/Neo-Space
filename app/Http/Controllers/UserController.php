<?php

namespace App\Http\Controllers;

use App\Models\compania;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\planeta;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

    public function update( Request $request ) {

        $user = Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->ciudad_usuario = $request->ciudad_usuario;

        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes()->take( 2 );
        $numviajes = count( $user->viajes() );
        // $compania = [];
        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            // array_push( $compania, $destino->companias()->first()->nombre );

        }
        $user->save();

        return view( '/Users/profile', [
            'viaje' => $viaje,
            // 'compania'=> $compania,
            'numviajes' => $numviajes

        ] );
    }

    public function viajes_usuario() {
        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes()->take( 2 );
        $numviajes = count( $user->viajes() );
        // $compania = [];
        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            // array_push( $compania, $destino->companias()->first->nombre );

        }
        return view( '/Users/profile', [
            'viaje' => $viaje,
            // 'compania'=> $compania,
            'numviajes' => $numviajes

        ] );

    }

    public function viajes_usuario_listado() {
        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes();

        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

        }
        return view( '/Users/MisViajes', [
            'viaje' => $viaje,
        ] );

    }

    public function viajes_usuario_editar() {
        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes()->take( 2 );
        $numviajes = count( $user->viajes() );
        // $compania = [];

        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            // array_push( $compania, $destino->companias()->first()->nombre );

        }
        return view( '/Users/edit_profile', [
            'viaje' => $viaje,
            // 'compania'=> $compania,
            'numviajes' => $numviajes

        ] );
    }

}
