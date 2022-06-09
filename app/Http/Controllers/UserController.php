<?php

namespace App\Http\Controllers;

use App\Models\compania;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\planeta;
use App\Models\viaje;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller {

    public function listar_usuarios() {
        $user = User::all();

        return view( '/Admin/ListarUsuarios', [
            'user'=> $user,

        ] );
    }

    public function editar_usuario( $id ) {
        $user = User::find( $id );

        return view( '/Admin/EditarUsuarios', [
            'user'=> $user,

        ] );
    }

    public function admin_update_user( Request $request, $id ) {
        $user = User::find( $id );
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->ciudad_usuario = $request->ciudad_usuario;

        $user->save();

        return redirect()->action( [ UserController::class, 'listar_usuarios' ] );

    }

    public function admin_create_user( Request $request ) {

        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->ciudad_usuario = $request->ciudad_usuario;
        $user->password = Hash::make( $request->password );
        $user->assignRole( $request->role );

        $user->save();

        event( new Registered( $user ) );

        return redirect()->action( [ UserController::class, 'listar_usuarios' ] );

    }

    public function admin_delete_user( $id ) {
        $user = User::find( $id );

        $user->delete();

        return redirect()->action( [ UserController::class, 'listar_usuarios' ] );
    }

    public function update( Request $request ) {

        $user = Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->ciudad_usuario = $request->ciudad_usuario;

        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes()->get()->take( 2 );
        $numviajes = count( $user->viajes()->get() );

        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            $compania = compania::find( $destino->compania )->nombre;

            $destino->compania = $compania;

        }
        $user->save();

        return view( '/Users/profile', [
            'viaje' => $viaje,
            'numviajes' => $numviajes

        ] );
    }

    public function viajes_usuario() {
        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes()->get()->take( 2 );
        $numviajes = count( $user->viajes()->get() );

        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            $compania = compania::find( $destino->compania )->nombre;

            $destino->compania = $compania;

        }
        return view( '/Users/profile', [
            'viaje' => $viaje,
            'numviajes' => $numviajes

        ] );

    }

    public function viajes_usuario_listado() {
        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes()->get();

        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            $compania = compania::find( $destino->compania )->nombre;

            $destino->compania = $compania;

        }
        return view( '/Users/MisViajes', [
            'viaje' => $viaje,
        ] );

    }

    public function viajes_usuario_editar() {
        $user = User::findorfail( Auth::User()->id );
        $viaje = $user->viajes()->get()->take( 2 );
        $numviajes = count( $user->viajes()->get() );

        foreach ( $viaje as $destino ) {

            $planeta = planeta::find( $destino->punto_destino )->nombre;

            $destino->punto_destino = $planeta;

            $compania = compania::find( $destino->compania )->nombre;

            $destino->compania = $compania;

        }
        return view( '/Users/edit_profile', [
            'viaje' => $viaje,

            'numviajes' => $numviajes

        ] );
    }

    public function reservar_viaje( $id ) {

        $user = User::findorfail( Auth::User()->id );
        $user->viajes()->attach( $id );

        return redirect()->action( [ UserController::class, 'viajes_usuario' ] );
    }

}
