# LARAVELL


## INSTALLARE LARAVELL E DARE UN NOME AL PROGETTO
```bash
composer create-project --prefer-dist laravel/laravel:^7.0
```

## AVVIARE IL SERVER LOCALHOST
```bash
php artisan serve  -/-   php -s localhost:8000 -t public
```

## INSTALLARE LE DIPENDENZE
```bash
npm install
```

## LANCIARE IL WATCH PER AGGIORNARE IN AUTONOMIA 
```bash
npm run watch
```

## CREARE UN MODEL DANDO IL NOME IN 'PASCALCASE E AL SINGOLARE'
```bash
php artisan make:model 'NomeScelto'
```

## CREARE IL CONTROLLER DANDO IL NOME IN 'PASCALCASE'
```bash
php artisan make:controller 'NomeScelto'
```

## CREARE IL DATABASE
```bash
create database 'nome scelto'  
use 'nome scelto'
```
## CREARE LE TABELLE DEL DATABASE. ES:

```php
    public function up()
    {
        Schema::create('NomeScelto', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->smallInteger('persone');
            $table->text('itinerario')->nullable();
            $table->smallInteger('giorni');
            $table->string('partenza', 50)->nullable();
            $table->string('arrivo', 50)->nullable();
            $table->string('poster', 200)->nullable();
            $table->integer('prezzo')->nullable();
            $table->timestamps();
        });
    }
```

## CREARE IL FILE DI MIGRAZIONE E MIGRARE I DATI NEL DATABASE
```bash
php artisan make:migration create_'nome scelto'_table
php artisan migrate
```

## INSERIRE I DATI IN TABELLA da (TERMINALE -oppure- PHPMYADMIN)
```bash
php artisan tinker 'inserimento da terminale'
```

## CREARE LE ROTTE PER LE PAGINE DI NAVIGAZIONE. ES:
```php
Route::get('/','NomesceltoController@index')->name('homepage');
```

## COMPILARE IL CONTROLLER E INSERIRE LA MODEL. ES:
```php
use App\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        //ddd($travels);
        return view('homepage', compact('travels'));
    }

}
```
## CREARE IL LAYOUT NELLA VIEWS CHE DOVRA RESTITUIRE IL CONTROLLER. ES:
- app.blade.php
- homepage.blade.php

## ORGANIZZARE IL LAYOUT ED ESTENDERLO ALLE ALTRE VIEWS
    LAYOUT/APP.BLADE.PHP
```php
    <body>

        <header id="site_header"></header>

        <main id="content">
            @yield('content')
        </main>

        <footer id="site_footer"></footer>
        
    </body>
```
    HOME.BLADE.PHP
```php
@extends('layout.app')

@section('title', 'homepage')

@section('content')


@endsection
```

## COLLEGARE IL DATABASE DA FILE ENV COMPILANDO I DB
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=travel
DB_USERNAME=root
DB_PASSWORD=root
```
