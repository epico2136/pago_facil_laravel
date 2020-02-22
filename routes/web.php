<?php

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

Route::get('/', function () {
    return view('welcome');
});
//Primera rut: mensaje
Route::get('hola',function(){
    $ficha = 1753443;
    echo 'Hola madrugadores',' ',  $ficha;
    
});

//Ruta tratr arreglos
Route::get('arreglo' , function(){

    //crear arreglo
    $estudiantes =["C"=>"Carlos",
                   "A"=>"Ana",
                   "L"=>"Lola",
                   "N"=>"Nancy",
                   "T"=>"Teresa",
                   "S"=>"Sandra",
                   "E"=>"Edwin",
                   "P"=>"Pedro",
                   "M"=>"Maria",
                   "O"=>"Orlando",
                   "W"=>"Wilson",
                   "J"=>"Juan",];

    //Agregar elementos a un arreglo
    $estudiantes []="Fabio";

    //var dump: analiza una variable
    echo"<pre>";
    var_dump($estudiantes);
    echo"</pre>";
    //imprimir cada valor del arreglo estudiantes
    echo $estudiantes["C"];
    echo "<hr/>";
    echo $estudiantes["A"];
    echo "<hr/>";
    echo $estudiantes["L"];
    echo "<hr/>";
    echo "<br/>";
    echo "<br/>";


    //Imprimir un arreglo grande 
    foreach($estudiantes as $clave => $estudiante){
    echo $clave,"=",$estudiante;
    echo "<hr/>";

    }


});