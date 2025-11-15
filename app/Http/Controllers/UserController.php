<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
//use Illuminate\Http\Request;

class UserController extends Controller
{
    //carregar formulario registar novo utilizador

    public function index()
    {

      //recuperar dados de BD
      $users = User::orderByDesc('id')->paginate(3);

      //carregar uma view
      return view ('users.index', ['users' => $users]);

    }

    public function show (User $user){

     //caregar view
      return view ('users.show', ['user' => $user]);
    }
    public function create() {

      //caregar view
      return view ('users.create');
    }

    public function store(UserRequest $request) {

      try {
        
        //gravar dados
        $user= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

           //redirecionar utilizador, enviar msg sucesso
        return redirect()->route('user.show', ['user'=>$user->id])->with ('success',
                                'Utilizador registado com sucesso!');
            
       } catch (Exception $e) {
        //redirecionar utilizador, enviar msg erro
        return back()->withInput()->with ('error',
                                'Utilizador não registado!');
      }
    }

    //carregar formulario editar utilizador
    public function edit (User $user)
    {
      //carregar view
      return view ('users.edit', ['user' => $user]);
    }
   
    //editar na base dados
    //UserRequest $request - validação valores de formulario
    //User $usern recuperar valores de formulario que usa atualmente
    public function update (UserRequest $request, User $user)
    {
      
      try {
        //editar info de registo na BD
       $user->update([
           'name'  =>$request->name,
           'email' =>$request->email,
       ]);
       //redirecionar utilizador, enviar msg sucesso
       return redirect()->route('user.show', ['user'=> $user->id])->with ('success',
                                'Utilizador editado com sucesso!');
      } catch (Exception $e) {

        //redirecionar utilizador, enviar msg erro
         return back()->withInput()->with ('error',
                                'Utilizador não editado!');
      }

      
    }

     public function editPassword (User $user)
      {
        //carregar view
       
        return view ('users.editPassword', ['user' => $user]);

      }
    
       public function updatePassword (UserRequest $request, User $user)
        {
         
          $request->validate ([
            'password'=> 'required|min:6',
          ],[
            'password.required' =>'O Campo Password é obrigatório.',
            'password.min' =>'O Password deve ter pelo menos :min carateres.',
                   
          ]);
          
          try {
                $user->update([
                  'password'=> $request->password,
                ]);

                return redirect()->route('user.show', ['user'=> $user->id])->with ('success',
                                'Password do Utilizador editado com sucesso!');
            
          } catch (Exception $e) {
           
             return back()->withInput()->with ('error',
                                'Password do Utilizador não editado!');
          }

        }

        public function destroy(User $user){
      
            try {
              
               $user->delete();
               
               //redicionar utilizador, enviar msg sucesso
               return redirect()->route('user.index')->with ('success',
                                'Utilizador eliminado com sucesso!');

            } catch (Exception $e) {
                //redicionar utilizador, enviar msg erro
              return redirect()->route('user.index')->with ('error',
                                'Utilizador não eliminado!');
            }

        }
}
