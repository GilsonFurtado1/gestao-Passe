<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\AuthLoginRequest;
use Exception;




class AuthController extends Controller
{
    //Login
    public function index() {
     

        //Carregar View
        return view('auth.login');
    }

    public function loginProcess(AuthLoginRequest $request){
       
        //capturar possiveis exceções durante a operacao
        try {

            //validar o utilizador e o password com finformações de base dados
            $authenticated = Auth::attempt([
                     'email'=>$request->email,
                     'password'=>$request->password]);

           //verificar se o utlizador foi autenticado
           if(!$authenticated){

              //redirecionar utilizador, enviar msg erro
             return back()->withInput()->with ('error',
                                'E-mail ou senha inválido!');
           }     
           
           //redirecionar utilizador para pagina especifico
             return redirect()->route('user.index');
            
        } catch (Exception $e) {

             //redirecionar utilizador, enviar msg erro
             return back()->withInput()->with ('error',
                                'E-mail ou senha inválido!');
        }
    }
  
    //logout
    public function logout()
    {
       Auth::logout();

       //redirecionar utilizador, enviar msg sucesso
             return redirect()->route('login')->with ('success',
                                'Logout com sucesso!');
    }


}
