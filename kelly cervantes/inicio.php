<?php
  session_start();
  if (isset($_SESSION['usuario']) !=true){
   header('location:index.html');
   }
  else{
    include 'tabla.php';
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Base de datos revista</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type='text/css' href="datatables/datatables.css">
    <link rel="stylesheet" href="/datatables/datatables.min.css">
    <link rel="stylesheet" type='text/css' href="datatables/DataTables-1.10.18/css/dataTables.boottrap4.min.css">

    
    
  </head>
 <body>

    <header>
    <div class="tittle">
      <h1 class='text-center text-dark'> Suscripciones de revista</h1>
    </seccion>
    </div>
    <div style='height:50px'></div>


    <div class="wrap">
      <nav class="navegacion"> 
        <ul class="tabs">
          <li class="nav-item"> <a class="nav-link active" id="home-tab" onclick='mostrarrevista();' data-bs-toggle="tab" href="#revista" >revista</a></li>
          <li class="nav-item"> <a class="nav-link" id="profile-tab" onclick='mostrarautores();' data-bs-toggle="tab" href="#autores">autores</a></li>
          <li class="nav-item"><a class="nav-link" id="contact-tab" onclick='mostrararticulos();' data-bs-toggle="tab" href="#articulos">articulos</a>
            <div class='submenu'>
              <ul>
              
                <li><a href="#subtab1"><span class="fa fa-briefcase"></span><span class="tab-text">Historia </span></a>
                <li><a href="#subtab2"><span class="fa fa-briefcase"></span><span class="tab-text">Pesta??as </span></a>
                <li><a href="#subtab3"><span class="fa fa-briefcase"></span><span class="tab-text">Bases </span></a>
                <li><a href="#subtab4"><span class="fa fa-briefcase"></span><span class="tab-text">Cosmeticos </span></a>
                <li><a href="#subtab5"><span class="fa fa-briefcase"></span><span class="tab-text">Maquillaje </span></a>
              
              </ul> 
            </div>
          </li>
        </ul>
     </nav>
      <div class="secciones"  id="articulos" class='display:none;'>
        

       
          <article id="subtab1">
            <h1>Historia del maquillaje</h1>
            <p>Hoy d??a puedes encontrar cualquier cantidad de videos explicando que los labiales se preparan con ceras, colores y aceites. Y dependiendo de la marca que compres, el color podr??a provenir de insectos molidos; espec??ficamente, la cochinilla, de la cual se obtiene el carm??n. Sin embargo, a lo largo de la historia, los cosm??ticos como el l??piz labial, el delineador para ojos y el maquillaje en polvo para el rostro se han hecho con un mont??n de ingredientes distintos, algunos de los cuales es mejor que no te pongas en  la cara.</p>
          </article>
          <article id="subtab2">
            <h1>Secreto de las pesta??as</h1>
            <p>  En este post vas a encontrar datos sobre el pelo de las pesta??as, c??mo crecen, c??mo caen y cu??nto cuesta que vuelvan a crecer. Va dedicado a todas aquellas mujeres que creen que las suyas son eternas y que las estropean por pereza. Las que no les dedican mimos y no se desmaquillan adecuadamente, que se aplican el rimmel de cualquier manera.</p>
          </article>
          <article id="subtab3">
            <h1>Bases de maquillaje</h1>
             <p>La base de maquillaje es un cosm??tico que se aplica directamente sobre el rostro y que contribuye a cubrir las manchas e imperfecciones; y dotar al cutis de un mejor aspecto. Es uno de los productos de belleza m??s utilizados por las mujeres en cualquiera de sus formas, bien sea ??sta l??quida, en polvo o como crema</p>
          </article>
          <article id="subtab4">
            <h1>Cosmeticos naturales</h1>
            <p>Bajo esta denominaci??n se engloban todos aquellos productos que utilizan materias primas de origen natural, que han pasado por un proceso de transformaci??n posterior sencillo, con la m??nima intervenci??n de aditivos o transformaciones qu??micas, y que han utilizado ??nicamente aquellos procesos que no son perjudiciales para el medio ambiente y la salud de las personas, indica Nuria Alonso, responsable de certificaci??n de BioVidaSana.</p>
          </article>
                <article id="subtab5">
            <h1>Maquillaje natural</h1>
            <p>Cada piel y cada rostro son diferentes. Queremos que junto a Natura encuentres la mejor expresi??n de ti misma. Creemos en la belleza verdadera y en que tu tambi??n puedes descubrirla. El maquillaje es una manera de realzar tu belleza, porque la belleza es sentirse c??moda con una misma y que tu exterior refleje todo lo que sientes en tu interior.</p>
          </article>
          <a class="btn btn-primary btb-lg btn-block" href="articulos.php" role="button"
            style="float:right;margin-right:30px;">tabla de articulos
          </a>
        
      </div>
     
      <script  >
        
        function mostrarrevista(){
          document.getElementById('revista').style.display='block'; 
          document.getElementById('autores').style.display='none';
          document.getElementById('articulos').style.display='none';
        }
        function mostrarautores(){
          document.getElementById('revista').style.display='none';
          document.getElementById('autores').style.display='block';
          document.getElementById('articulos').style.display='none';
        }
        function mostrararticulos(){
          document.getElementById('revista').style.display='none';
          document.getElementById('autores').style.display='none';
          document.getElementById('articulos').style.display='block';
        }
      </script>
      

      
      <div class="container" >
        <div class="row">
          <div class="col">
            <div class="table-responsive"> </div>
          
            <table  id='revista'  class="table table-striped table-hover " class='display'- style="width:100%" style='display:none;' >
              
              <thead class='table-dark'>
                <tr >
                  <th>ISSN </th>
                  <th>Nombre</th>
                  <th>N??mero</th>
                  <th>a??o</th>
                </tr>
              </thead>
              <tbody class="text text-center">
                <?php
                  for ($i=0;$i<$n;$i++){
                ?>
                <tr>
                  <td><?php echo $resultado[$i]['codigo'] ?></td>   
                  <td><?php echo $resultado[$i]['nombre'] ?></td>  
                  <td><?php echo $resultado[$i]['numero'] ?></td>  
                  <td><?php echo $resultado[$i]['a??o'] ?></td>  
                
                </tr>
                <?php }?>
              </tbody>
              

            </table>  
            
            <table id='autores' class="table table-striped table-hover " class='display:none;'- style="width:100%" style='display:none;'>
              <thead class='table-dark'>
                <tr>
                  <th>ID</th>
                  <th>autores</th>
                  <th>abscrip</th>
                  <th>email</th>
                  <th>direccion</th>
                </tr>
              </thead>
              <tbody class="text text-center">
                <?php
                  for ($o=0;$o<$n1;$o++){
                ?>
                <tr>
                  <td><?php echo $resultado1[$o]['id'] ?></td>   
                  <td><?php echo $resultado1[$o]['autor'] ?></td>  
                  <td><?php echo $resultado1[$o]['abscrip'] ?></td>  
                  <td><?php echo $resultado1[$o]['email'] ?></td>  
                  <td><?php echo $resultado1[$o]['direccion'] ?></td>  
                </tr>
                <?php }?>
              </tbody>
            </table>

           
           </div>

            
          </div>
        </div>
      </div> 
     

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
    <script src="cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="subtabs.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type='text/javascript'src="main.js"></script>
    <script type='text/javascript'src="datatables/datatables.min.js"></script>
    <script src='popper/popper.min.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>
    <script src='jquery/jquery-3.3.1.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 
    </div>
  </body>
</html>