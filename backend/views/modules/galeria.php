<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:ingreso");

	exit();

}

include "views/modules/botonera.php";
include "views/modules/header.php";

?>
<!--=====================================
GALERIA ADMINISTRABLE          
======================================-->

<div id="galeria" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

<hr>

<p><span class="fa fa-arrow-down"></span>  Arrastra aquí tu imagen, tamaño recomendado: 1600px * 600px</p>
	
	<ul id="lightbox">
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="images/galeria/instalacion01.jpg">
			<img src="views/images/galeria/instalacion01.jpg">
			</a>
		</li>
			
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="images/galeria/instalacion02.jpg">
			<img src="views/images/galeria/instalacion02.jpg">
			</a>		
		</li>

		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="images/galeria/instalacion03.jpg">
			<img src="views/images/galeria/instalacion03.jpg">
			</a>		
		</li>

		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="images/galeria/instalacion04.jpg">
			<img src="views/images/galeria/instalacion04.jpg">
			</a>		
		</li>

		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="images/galeria/instalacion09.jpg">
			<img src="views/images/galeria/instalacion09.jpg">
			</a>
		</li>
			
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="images/galeria/instalacion06.jpg">
			<img src="views/images/galeria/instalacion06.jpg">
			</a>		
		</li>

		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="images/galeria/instalacion07.jpg">
			<img src="views/images/galeria/instalacion07.jpg">
			</a>		
		</li>

		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="images/galeria/instalacion08.jpg">
			<img src="views/images/galeria/instalacion08.jpg">
			</a>		
		</li>
	</ul>

	<button class="btn btn-warning pull-right" style="margin:10px 30px">Ordenar Imágenes</button>

</div>

<!--====  Fin de GALERIA ADMINISTRABLE  ====-->
