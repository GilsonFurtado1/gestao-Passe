<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utilizador</title>
</head>
<body>
       <h2>Utilizador</h2>
       ID: {{ $user->id }} <br>
       Nome: {{ $user->name }} <br>
       E-mail: {{ $user->email }} <br>
       Data Registo: {{ $user->created_at }} <br>
</body>
</html>