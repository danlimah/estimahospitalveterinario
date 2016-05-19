<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Estima ─ Hospital Veterinário</title>

	<!-- Css do Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Css do Bootswatch -->
	<link href="bootswatch/flatly.css" rel="stylesheet">

	<!-- Css para Awesome Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<!-- Style compilado do Sass -->
	<link href="sass/site.css" rel="stylesheet">

	<!-- Style do Animate -->
	<link href="animate/animate.css" rel="stylesheet">

	<!-- Style padrão do site -->
	<link href="style.css" rel="stylesheet">

	<!-- jQuery necessário para o Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Colorbox JS e CSS -->
  <link href="colorbox/colorbox.css" rel="stylesheet">
  <script src="javascripts/jquery.colorbox.js"></script>

  <script>
	  $(document).ready(function(){
		//Examples of how to assign the Colorbox event to elements
		$(".group1").colorbox({rel:'group1'});
		$(".group2").colorbox({rel:'group2', transition:"fade"});
		$(".group3").colorbox({rel:'group3', transition:"fade", maxWidth:"75%", maxHeight:"75%"});
		$(".group4").colorbox({rel:'group4', slideshow:true});
		$(".ajax").colorbox();
		$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
		$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
		$(".inline").colorbox({inline:true, width:"50%"});
		$(".callbacks").colorbox({
		  onOpen:function(){ alert('onOpen: colorbox is about to open'); },
		  onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
		  onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
		  onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
		  onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
		});

		$('.non-retina').colorbox({rel:'group5', transition:'none'})
		$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
		
		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){ 
		  $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
		  return false;
		});
	  });
	</script>
	

</head>
<body class="body">

<header class="header topo_fixo">

	<div class="mobile_logotipo">
		<a href="#" title=""><img src="img/logotipo.png" alt=""></a>
	</div>
	
	<nav class="navbar navbar-inverse">
	  <div class="container">
		<!-- Brand e Ícone Mobile -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" 
				  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>

		<!-- Menu Responsivo + Menu Desktop -->
		<div class="row">
		  
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		  <ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="404.php">O Hospital</a></li>
			<li><a href="404.php">Especialidades</a></li>
		  </ul>

		  <ul class="nav navbar-nav navbar-nav-center hidden-sm hidden-xs">
		  	<a href="#" title=""><img src="img/logotipo.png" alt=""></a>
		  </ul>

		  <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Notícias</a></li>
			<li><a href="page-galeria.php">Corpo Clínico</a></li>
			<li><a href="page-contato.php">Contato</a></li>
		  </ul>


		</div><!-- /.navbar-collapse -->

		</div>

	  </div><!-- /.container -->
	</nav>

</header>