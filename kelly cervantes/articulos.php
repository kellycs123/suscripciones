<?php
 include 'tabla.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
  
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

   
</head>
<body>
    <table  id='articulos' class="table table-striped table-hover "- style="width:100%" style='display:none;'>
        <thead class='table-dark'>
        
            <tr>
                <th>IDarticulo</th>
                <th>Titulo</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Autor</th>
                
            </tr>
        </thead>
        <tbody class="text text-center">
            <?php
                for ($u=0;$u<$n2;$u++){
            ?>
            <tr>
                <td><?php echo $resultado2[$u]['idarticulo'] ?></td>
                <td><?php echo $resultado2[$u]['titulo'] ?></td>
                <td><?php echo $resultado2[$u]['inicio'] ?></td>
                <td><?php echo $resultado2[$u]['fin'] ?></td>   
                <td><?php echo $resultado2[$u]['idautor'] ?></td>  
            
            </tr>
        <?php }?>
        </tbody>

    </table>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
    <script src="cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type='text/javascript'src="main2.js"></script>
    <script type='text/javascript'src="datatables/datatables.min.js"></script>
    <script src='popper/popper.min.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>
    <script src='jquery/jquery-3.3.1.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>