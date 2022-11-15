<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registro(Request $request)
    {

        $request->validate([
            'email'    => 'required|string',
            'contrasena' => 'required|string'

        ]);

        $user = new User();
        $user->email = $request->email;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->contrasena = Hash::make($request->contrasena);
        $user->estado = $request->estado;
        $user->save();
        return response()->json(['mesage' => 'YES'], 201);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|string',
            'contrasena' => 'required|string'

        ]);

        $user = User::where("email", "=", $request->email)->first();

        if (isset($user)) {

            if (Hash::check($request->contrasena, $user->contrasena)) {

                $token = $user->createToken("auth_token")->plainTextToken;

                return response()->json([
                    'mesage' => 'YES',
                    'data' => $user,
                    'toke' => $token

                ], 201);
            } else {
                return response()->json([
                    'data' => [
                        "error" => 'errors',
                        'mesage' => 'Contraseña incorrecta',
                    ],

                ], 400);
            }
        } else {
            return response()->json(['msn' => 'Usuario no exite', "error" => true], 400);
        }
    }
}
