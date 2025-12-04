

## Requisitos
* PHP 8.2 ou superior
* Composer 
* Node.js 22 ou superior 



## Sequência para criar projeto

* Criar o projeto com laravel
composer create-project laravel/laravel .

* Iniciar o projecto criado comlaravel
 php artisan serve


 * Executar as migration para criar a BD e tabelas
 php artisan migrate

 * Executar seed com php artisan para registar registos de testes
php artisan db:seed

 * executar as bibliotecas Node.js
 npm run dev

 * Instalar a dependencia do PHP
 composer install

 * gerar chave para o ficheiro .env
 php artisan key:generate

 * criar controller
 php artisan make:controller UserController

 * criar view
 php artisan make:view users/create  

 * executar a migration para criar a base de dados e tabelas
 php artisan migrate

* acessar o conteudo padrao
  http://127.0.0.1:8000

* instalar biblioteca tradução
  laravel-pt-BR-localization 

 instalar biblioteca para apresentar o alerta personalizado
  npm install sweetalert2