<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM habitaciones";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Crud habitaciones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="./disenio/disenios.css">
        <link rel="icon" href="./icons/Logo_hotel_porteño.ico">
    </head>
    <body>
            <div class="banner">
                <a href="index.html" class="logo"><img src="./icons/Logo_hotel_porteño.png" class="logo" alt="logo de hotel"></a>
                <h1 class= "titulo">Pantalla del recepcionista</h1>
                    <div class="container mt-5">
                            <div class="row"> 
                                
                                <div class="col-md-3">
                                    <h1 class="subtitulo">Ingrese datos</h1>
                                        <form action="insertar.php" method="POST">

                                            <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                                            <input type="text" class="form-control mb-3" name="nacionalidad" placeholder="Nacionalidad">
                                            <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                            <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                            <input type="text" class="form-control mb-3" name="Tipodehabitacion" placeholder="Tipo de habitacion">
                                            <input type="submit" class="btn btn-primary">
                                        </form>
                                </div>

                                <div class="col-md-8">
                                    <table class="table" >
                                        <thead class="table-success table-striped" >
                                            <tr>
                                                <th>dni</th>
                                                <th>nacionalidad</th>
                                                <th>Nombres</th>
                                                <th>apellido</th>
                                                <th>Tipo de habitacion</th>
                                                <th>nro de reserva</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                                <?php
                                                    while($row=mysqli_fetch_array($query)){
                                                ?>
                                                    <tr class='datos'>
                                                        <th><?php  echo $row['dni']?></th>
                                                        <th><?php  echo $row['nacionalidad']?></th>
                                                        <th><?php  echo $row['nombres']?></th>
                                                        <th><?php  echo $row['apellido']?></th>
                                                        <th><?php  echo $row['Tipodehabitacion']?></th>
                                                        <th><?php  echo rand(100,300)?></th>    
                                                        <th><a href="actualizar.php?id=<?php echo $row['dni'] ?>" class="btn btn-info">Editar</a></th>
                                                        <th><a href="delete.php?id=<?php echo $row['dni'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                                    </tr>
                                                <?php 
                                                    }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                    </div>

                    <footer class= 'tel'>
                            <h4>Numero de telefono para reservar: 1144232356</h4>
                            <h5>Solo reservas por telefono</h5>
                    </footer>
            </div>
    </body>
</html>