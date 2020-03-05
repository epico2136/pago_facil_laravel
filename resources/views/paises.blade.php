<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <title>Paises</title>
</head>
<body>
    <h1>Paises</h1>
    <table class="table table-bordered" > 
    <thead>
    <tr>
    <th>Pais</th>
    <th>Capital</th>
    <th>Moneda</th>
    <th>Poblacion</th>
    <th>Ciudades Principales</th>
    </tr>
    </thead>
    <tbody>
    @foreach($paises as $pais => $informacion)
        <tr>
        <td rowspan="3"> {{ $pais }}</td>
        <td rowspan="3"> {{ $informacion["capital"]}}</td>
        <td rowspan="3"> {{ $informacion["Moneda"]}}</td>
        <td rowspan="3"> {{ $informacion["poblacion"]}}</td>
        <td bgcolor="#00FF00" >{{ $informacion["Ciudades Principales"][0]}}</td>        
        </tr>  
        <tr>
        <td bgcolor="#FF0000"> {{ $informacion["Ciudades Principales"][1]}}</td>        
        </tr>   
        <tr>
        <td bgcolor="ORANGE"> {{ $informacion["Ciudades Principales"][2]}}</td>        
        </tr>    
        @endforeach
    
  
        
    </tbody>
    </table>
</body>
</html>