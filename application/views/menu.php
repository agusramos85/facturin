<style type="text/css">
	* { margin: 0px;
	padding: 0px; outline: 0;
	}
	html, body { width: 100%;}

	body { background: #366;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	}
	#menu {  text-align: center;
	font-size: 0.7em;
	width: 820px;
	margin: 20px auto;
	}
	#menu ul { list-style-type: none;}
	#menu ul li.nivel1 { float: left;
	width: 162px;
	margin-right: 2px;
	}
	#menu ul li a {display: block;
	text-decoration: none;
	color: #fff;
	background-color: #399;
	border: solid 1px #fff;
	padding: 8px;
	position: relative;
	}
	#menu ul li:hover {position: relative;
	}
	#menu ul li a:hover, #menu ul li:hover a.nivel1 {background-color: #6CC;
	color: #000;
	position: relative;
	}
	#menu ul li a.nivel1 {display: block!important;display: none;
	position: relative;
	}
	#menu ul li ul {display: none;
	}
	#menu ul li a:hover ul, #menu ul li:hover ul {display: block;
	position: absolute;left: 0px;
	}
	#menu ul li ul li a {width: 160px;
	padding: 6px 0px 8px 0px;
	border-top-color: #000;
	}
	#menu ul li ul li a:hover {border-top-color: #000;
	position: relative;
	}
	table.falsa {border-collapse:collapse;
	border:0px;
	float: left;
	position: relative;
	}
</style>

<div id="menu">
<ul>
  <li class="nivel1"><a href="#" class="nivel1">Pagos</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 1<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="/facturas/addFactura" target="_blank">Ingreso</a></li>
		<li><a href="#" target="_parent">Cobranzas</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
  </li>
  <li class="nivel1"><a href="#" class="nivel1">Cobranzas</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 2<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="#" target="_blank">Ingresar</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
  <li class="nivel1"><a href="#" class="nivel1">Consultas</a>
<!--[if lte IE 6]><a href="#" class="nivel1ie">Opción 3<table class="falsa"><tr><td><![endif]-->
	<ul>
		<li><a href="#" target="_blank">Facturacion</a></li>
		<li><a href="#" target="_blank">Balance</a></li>
		<li><a href="#" target="_blank">Cheques</a></li>
		<li><a href="#" target="_blank">Pagos</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
</div>