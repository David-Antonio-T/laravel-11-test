<?php
use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',[PrimerControlador::class,'index']);

Route::resource('primercontrolador',PrimerControlador::class);

/*
Route::get('/contact1',function (){
    $data=['name'=>'Alejandro'];
    return view('contact1',$data);
})->name('contact1');

Route::get('/contact2',function (){
    return view('contact2');
})->name('contact2');
*/
