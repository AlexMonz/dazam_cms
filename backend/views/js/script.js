/*=============================================
ALTURA COL1          
=============================================*/

var alturaBody = $("body").height();

if(alturaBody < 1020 && window.innerWidth > 767){
    
	$("#col1").css({"height":"150vh"})
}
if(alturaBody > 1020 && window.innerWidth > 767){
	$("#col1").css({"height":alturaBody+"px"})
}

/*=====  Fin de ALTURA COL1  ======*/

/*=============================================
BOTONES ADMINISTRADOR          
=============================================*/
$("p#member span").click(function(){
	$("#header #admin").slideToggle("fast")
	$("p#member span").toggleClass("fa-chevron-down");
	$("p#member span").toggleClass("fa-chevron-up");
})

/*=====  Fin de BOTONES ADMINISTRADOR  ======*/

/*=============================================
GALERÍA         
=============================================*/

$("ul#lightbox li a").fancybox({

	openEffect  : 'elastic',
	closeEffect  : 'elastic',
	openSpeed  : 150,
	closeSpeed : 150,
	helpers : {title :{type : 'inside'}}

});

/*=====  Fin de GALERÍA   ======*/