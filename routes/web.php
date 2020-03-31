<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('login', function(){
    return redirect()->route('/');
})->name('login');

Route::get('register', function(){
    return redirect()->route('/');
})->name('register');

Route::get('/', function () {
    return view('login');
})->name('/');

Route::prefix('Administrador')->name('admin.')->middleware('can:acesso-administrador')->group(function(){  

    Route::resource('Alunos', 'AlunoController')->names('alunos')->parameters(['Alunos'=>'aluno']);
    Route::resource('Olimpiadas', 'OlimpiadaController')->names('olimpiadas')->parameters(['Olimpiadas'=>'olimpiada']);
    Route::resource('users', 'UsersController')->names('users')->parameters(['users'=>'user']);

    Route::get('Matricular', 'MatriculaController@create')->name('matriculas.create');
    Route::post('Matricular/salvando', 'MatriculaController@store')->name('matriculas.store');
    Route::delete('Matriculas/Deletar/{matricula}', 'MatriculaController@destroy')->name('matriculas.destroy');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function(){ 
    
    return view('home'); 

})->middleware('auth')->name('dashboard');
