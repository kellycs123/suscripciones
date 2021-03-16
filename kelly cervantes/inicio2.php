  
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
	<title>Navegacion con tabs</title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="font-awesome.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="subtabs.js"></script>
    
</head>
<body>
   
	<div class="wrap">
		<ul class="tabs">
			<li><a href="#tab1"><span class="fa fa-home"></span><span class="tab-text">Revistas</span></a></li>
			<li><a href="#tab2"><span class="fa fa-group"></span><span class="tab-text">Autores</span></a></li>
			<li><a href="#tab3"><span class="fa fa-briefcase"></span><span class="tab-text">Articulos</span></a>
				<div class='submenu'>
					<ul>
						
						<li><a href="#subtab1"><span class="fa fa-briefcase"></span><span class="tab-text">historia</span></a>
						<li><a href="#subtab2"><span class="fa fa-briefcase"></span><span class="tab-text">pestañas </span></a>
						<li><a href="#subtab3"><span class="fa fa-briefcase"></span><span class="tab-text">bases </span></a>
						<li><a href="#subtab4"><span class="fa fa-briefcase"></span><span class="tab-text">cosmeticos </span></a>
						<li><a href="#subtab5"><span class="fa fa-briefcase"></span><span class="tab-text">Maquillaje </span></a>

					</ul>
				</div>
            </li>

        
		</ul>
   
		
        

		<div class="secciones">
			<article id="subtab1">
				<h1>Inicio</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea numquam odio voluptate. Aliquam incidunt similique, et quasi ducimus quos aut autem non dignissimos dicta sit provident, voluptatibus ut blanditiis perspiciatis cum, vel temporibus minima enim. Asperiores omnis placeat officiis a tenetur sit recusandae, reprehenderit neque. Tempora quibusdam, perferendis id ratione culpa dolorum! Nemo, animi? Eveniet eaque perspiciatis, libero quia, pariatur iusto, ipsum porro quod, ut tempora cum quo non illum. Non eligendi incidunt sequi, molestias quia perspiciatis architecto repudiandae quod.</p>
			</article>
			<article id="subtab2">
				<h1>Nosotros</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptates unde, consequuntur aliquid architecto rem numquam expedita minima dolorem pariatur recusandae, eius quod quia aspernatur id impedit, tenetur! Aspernatur incidunt molestiae dolores animi ea praesentium ipsam tenetur voluptas cupiditate perspiciatis eum nihil, natus exercitationem libero earum fuga dignissimos impedit numquam, quasi, placeat officiis voluptates, ad reprehenderit fugiat? Fugiat aperiam et magni, molestiae, numquam consectetur vitae sapiente cupiditate totam laboriosam voluptate obcaecati, aliquam placeat? Suscipit dolores fuga laudantium sed, qui magni iusto dolore quia. Quis fugit exercitationem porro. Rerum nihil omnis recusandae ratione fuga alias eligendi, earum sunt veritatis praesentium eum perspiciatis. Molestias deserunt, iure neque animi quod! Impedit reprehenderit cumque, numquam velit quae cum eius quidem similique laudantium hic deleniti!</p>
			</article>
			<article id="subtab3">
				<h1>Servicios</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea numquam odio voluptate. Aliquam incidunt similique, et quasi ducimus quos aut autem non dignissimos dicta sit provident, voluptatibus ut blanditiis perspiciatis cum, vel temporibus minima enim. Asperiores omnis placeat officiis a tenetur sit recusandae, reprehenderit neque. Tempora quibusdam, perferendis id ratione culpa dolorum! Nemo, animi?</p><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum dignissimos at esse, ipsum rerum assumenda nisi obcaecati! Aliquam iure voluptatem incidunt, explicabo sit labore, perferendis eius ad vel quia. Praesentium, doloribus. Quisquam provident nostrum totam itaque debitis, minima, tempore dolores!</p>
			</article>
			<article id="subtab4">
				<h1>Blog</h1>
				<p>Losfduidbu sit amet, consectetur adipisicing elit. Ea numquam odio voluptate. Aliquam incidunt similique, et quasi ducimus quos aut autem non dignissimos dicta sit provident, voluptatibus ut blanditiis perspiciatis cum, vel temporibus minima enim. Asperiores omnis placeat officiis a tenetur sit recusandae, reprehenderit neque. Tempora quibusdam, perferendis id ratione culpa dolorum! Nemo, animi? Eveniet eaque perspiciatis, libero quia, pariatur iusto, ipsum porro quod, ut tempora cum quo non illum. Non eligendi incidunt sequi, molestias quia perspiciatis architecto repudiandae quod.</p><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ipsa ducimus amet at cumque sed numquam, explicabo impedit optio quas iste aperiam quidem ipsam rerum libero voluptatibus perferendis officiis voluptatum!</p>
			</article>
            <article id="subtab5">
				<h1>bls</h1>
				<p>Losfduidbu sit amet, consectetur adipisicing elit. Ea numquam odio voluptate. Aliquam incidunt similique, et quasi ducimus quos aut autem non dignissimos dicta sit provident, voluptatibus ut blanditiis perspiciatis cum, vel temporibus minima enim. Asperiores omnis placeat officiis a tenetur sit recusandae, reprehenderit neque. Tempora quibusdam, perferendis id ratione culpa dolorum! Nemo, animi? Eveniet eaque perspiciatis, libero quia, pariatur iusto, ipsum porro quod, ut tempora cum quo non illum. Non eligendi incidunt sequi, molestias quia perspiciatis architecto repudiandae quod.</p><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ipsa ducimus amet at cumque sed numquam, explicabo impedit optio quas iste aperiam quidem ipsam rerum libero voluptatibus perferendis officiis voluptatum!</p>
			</article>
		</div>
		

        






	</div>

</body>
</html>