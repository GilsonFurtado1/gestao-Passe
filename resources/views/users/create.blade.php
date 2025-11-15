@extends('layouts.admin')

@section ('content')


  

     <div class= "content">
        <div class = "content-title">
            <h1 class = "page-title"> Registar Utilizador</h1>
             <a href="{{ route('user.index') }}" class= "btn-info">Listar</a>
             
        </div>
        <!-- chama a componente alert dentro do view/component -->
        <x-alert/>

    <form action="{{ route('user.store') }}" method="POST" class= "form-container">
      @csrf 

      <div class="mb-4"> 
      <label for="name" class="form-label"> Nome: </label>
       <input type="text" name="name" id="name" class= "form-input" placeholder="Nome Completo"
       value="{{ old('name') }}" >
       </div>
       
       <div class="mb-4"> 
       <label for="email" class="form-label"> E-mail: </label>
       <input type="email" name="email" id="email" class= "form-input" placeholder="Email"
       value="{{ old('email') }}" >
       </div>
       
       <div class="mb-4"> 
       <label for="password" class="form-label"> Password: </label>
       <input type="password" name="password" id="password" class= "form-input" placeholder="Password com mínimo 5 carateres"
       value="{{ old('password') }}" >
       </div>

       <button type= "submit" class="btn-success">Guardar</button>

    </form>
    
     </div>


@endsection
    
