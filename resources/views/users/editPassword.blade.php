@extends('layouts.admin')

@section ('content')


  

     <div class= "content">
        <div class = "content-title">
            <h1 class = "page-title"> Editar Password</h1>
             <span>
               <a href="{{ route('user.index') }}" class= "btn-info">Listar</a>
               <a href="{{ route ('user.show', ['user'=>$user->id ]) }}" class="btn-primary"> Ver </a>
             </span>
        </div>
        <!-- chama a componente alert dentro do view/component -->
        <x-alert/>

    <form action="{{ route('user.update-password', ['user'=> $user->id] ) }}" method="GET" class= "form-container">
      @csrf 
      @method('GET')

       <div class="mb-4"> 
       <label for="password" class="form-label"> Password: </label>
       <input type="password" name="password" id="password" class= "form-input" placeholder="Password com mínimo 5 carateres"
       value="{{ old('password') }}" >
       </div>
       
       <button type= "submit" class="btn-warning">Guardar</button>

    </form>
    
     </div>


@endsection
    
