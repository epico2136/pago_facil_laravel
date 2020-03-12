<?php

use App\producto;
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

//Ruta tratar arreglos
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

//Arreglos Multidimensionales
Route::get('arreglosm',function(){

    $paises =["Colombia"=>["capital"=>"Bogota",
                          "Moneda"=>"peso",
                          "poblacion"=>"50 Millones de habitantes",
                          "Ciudades Principales"=>["Cali","Medellin","Baranquilla"]],
              "Peru"=>["capital"=>"Lima",
                       "Moneda"=>"sol",
                       "poblacion"=>"32 Millones de habitantes",
                       "Ciudades Principales"=>["Lima","Arequipa","Trujillo"]],
              "Bolivia"=>["capital"=>"La paz",
                          "Moneda"=>"peso Boliviano",
                          "poblacion"=>"11 Millones de habitantes",
                          "Ciudades Principales"=>["Santa cruz","El alto","Cochabanba"]],
              "Argentina"=>["capital"=>"Buenos Aires",
                            "Moneda"=>"Peso argentino",
                            "poblacion"=>"44 Millones de habitantes",
                            "Ciudades Principales"=>["Rosario","La Plata","Lanus"]],
              "Venezuela"=>["capital"=>"Caracas",
                            "Moneda"=>"Bolivar",
                            "poblacion"=>"31 Millones de habitantes",
                            "Ciudades Principales"=>["Maracaibo","Rosario","Barquisimeto"]],
              "Brazil"=>["capital"=>"Sao Paulo",
                        "Moneda"=>"Real brasileño",
                        "poblacion"=>"209 Millones de habitantes",
                        "Ciudades Principales"=>["Rio de janeiro","Fortaleza","Belo Horizonte"]],
              "Paraguay"=>["capital"=>"Asuncion",
                           "Moneda"=>"Guaraní paraguayo",
                           "poblacion"=>"6 Millones de habitantes",
                           "Ciudades Principales"=>["Luque","San lorenzo","Encarnacion"]],
              "Uruguay"=>["capital"=>"Montevideo",
                          "Moneda"=>"Peso uruguayo",
                          "poblacion"=>"3 Millones de habitantes",
                          "Ciudades Principales"=>["Maldondo","Rivera","Pysandu"]]
            ];

//    echo"<pre>";
  //  var_dump($paises);
  //  echo"</pre>";
//recorrer simple
/*foreach($paises as $pais => $informacion){
    echo"<h1> $pais</h1>";
    echo $informacion["capital"];
    echo "<hr/>";





}
//recorrer con doble foreach
foreach($paises as $pais => $informacion){
    echo"<h1> $pais</h1>";
    foreach ($informacion as $clave =>$valor){
        echo "$clave : $valor";
    
    }

    echo "<hr/>";

    
}*/

//mostrar la vista
return view('paises')
            ->with('paises' , $paises);

});

Route::get("pruebaprod",function(){

    //insertar un producto
    $p = new producto();
    //crear atributos
    $p->nombre="bicicleta";
    $p->valor_unitario = 450.897;
    //guardar en BD
    $p->save();

});

Route::get("nuevoproducto",function(){
//mostrar formulario de guardar producto
return view('productos.crear');
    

});

Route::post("guardarproducto",function(){
    //recibir losa datos que vienen del formulario
    $p = new producto();
     //crear atributos
    $p->nombre= $_POST["nombre"];
    $p->valor_unitario = $_POST["valor"];
    //guardar en BD
    $p->save();
    echo"producto registrado";
    
    });
    
