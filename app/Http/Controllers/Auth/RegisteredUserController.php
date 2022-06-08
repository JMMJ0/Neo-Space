<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller {
    /**
    * Display the registration view.
    *
    * @return \Illuminate\View\View
    */

    public function create() {
        return view( 'auth.register' );
    }

    /**
    * Handle an incoming registration request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\RedirectResponse
    *
    * @throws \Illuminate\Validation\ValidationException
    */

    public function store( Request $request ) {
        $request->validate( [
            'name' => [ 'required', 'string', 'max:255' ],
            'surname' => [ 'required', 'string', 'max:255' ],
            'email' => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
            'remember_token' =>[ 'nullable', 'string', 'max:10', 'unique:users' ],
            'phone_number' =>[ 'nullable', 'string', 'max:15' ],
            'ciudad_usuario'=> [ 'nullable', 'string', 'max:255' ],
            'password' => [ 'required', 'confirmed', Rules\Password::defaults() ],
        ] );

        $user = User::create( [
            'name' => $request->name,
            'surname' => $request->surname, 
            'email' => $request->email,
            'remember_token' => Str::random( 10 ),
            'phone_number' => $request->phone_number,
            'ciudad_usuario' => $request->ciudad_usuario,
            'password' => Hash::make( $request->password ),
        ] );

        event( new Registered( $user ) );
        
        $user->assignRole( 'user' );
        Auth::login( $user );

        return redirect( RouteServiceProvider::HOME );
    }
}
