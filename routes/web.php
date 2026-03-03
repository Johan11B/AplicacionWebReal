<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('inicio');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/titulos', function () {
    return view('titulos');
});

Route::get('/jugadores', function () {
    return view('jugadores');
});

Route::get('/formulario', function () {
    return view('formulario');
});


// Llamar los controladores para el registro e inicio de sesión que estan en App\Http\Controllers\Auth
use App\Http\Controllers\Auth\RegisterController; //Todavia no esta creado el controlador
use App\Http\Controllers\Auth\LoginController; //Todavia no esta creado el controlador

//-----------Rutas para el registro de usuarios-------------//
Route::get('/register', [RegisterController::class, 'create'])->name('register');
//Registra y usa el controlador para manejar la lógica de registro de usuarios
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//-----------Rutas para el inicio de sesión-----------------//
Route::get('/login', [LoginController::class, 'create'])->name('login');
//Parte de seguridad para evitar ataques de fuerza bruta, limitando a 5 intentos por minuto
Route::post('/login', [LoginController::class, 'store'])
->middleware('throttle:5,1') //Limita a 5 intentos por minuto
->name('login.store'); //Ruta para cerrar sesión, usando el método destroy del controlador de login

//-----------Ruta para cerrar sesión, usando el método destroy del controlador de login----//
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');


//-----------Ruta para el dashboard, protegida por el middleware de autenticación------//
Route::get('/dashboard', function(){
    return view ('dashboard.index'); 
})->middleware('auth')->name('dashboard.index');



//-----------Ruta para el formulario con seguridad CSRF------------//
use Illuminate\Http\Request;
Route::post('/registro', function (Request $request) { //Ruta POST para manejar el envío del formulario de registro
    $validatedData = $request->validate([ //Validación de los datos enviados desde el formulario
        'nombre' => 'required|min:3', 
        'apellido' => 'required|min:3', 
        'correo' => 'required|email',
        'motivo' => 'required|min:10', 
        'terminos' => 'required|accepted', 
    ]);
    return back()->with('success', 'Registro exitoso'); 
});