<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalar dependências do PHP 
`composer install`

## Configurar o arquivo .env

`cp .env.example .env`


## Gerar a chave da aplicação

 `php artisan key:generate`


## Executar migrations
 
`php artisan migrate`
 

# Inserir usuário via prompt

## Iniciar ferramenta tinker do Laravel

`php artisan tinker`

## Instancia o model "User"

`use App\Models\User`

## Comando para criar o usuário 
`User::create(['name' => 'O_login_do_usuario', 'email' => 'email_do_usuario@example.com', 'password' => Hash::make('A_senha_do_usuario')]);`
