<?php

namespace App\Http\Controllers;

use App\User;

use Tymon\JWTAuth\Facades\JWTAuth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function register(Request $request){


        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return ["message"=>"User criado", "user"=>$user];

    }

    public function login(Request $request){


    	$credenciais = $request->only('email', 'password');

    	if(!$token=JWTAuth::attempt($credenciais)){
    		return "Usuário não autenticado!";
    	}

    	return ['token'=>$token];

    }

}
