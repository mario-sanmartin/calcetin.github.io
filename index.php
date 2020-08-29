<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

<div id="carrito"></div>

<div class="row">
	<div class="col">
		<div style="padding: 10px">
			<img style="width: 350px; height: auto" src="img/tenor.gif">
		</div>
		<p>Nombre</p>
		<span>Precio: </span><p>145200</p>
		<button data-prod="prod1" data-precio="145200" onclick="Agregar(this)">Agregar</button>
	</div>

	<div class="col">
		<div style="padding: 10px">
			<img style="width: 350px; height: auto" src="img/tenor.gif">
		</div>
		<p>Nombre</p>
		<span>Precio: </span><p>13200</p>
		<button data-prod="prod2" data-precio="13200" onclick="Agregar(this)">Agregar</button>
	</div>

	<div class="col">
		<div style="padding: 10px">
			<img style="width: 350px; height: auto" src="img/tenor.gif">
		</div>
		<p>Nombre</p>
		<span>Precio: </span><p>3545200</p>
		<button data-prod="prod2" data-precio="3545200" onclick="Agregar(this)">Agregar</button>
	</div>
</div>

</body>
</html>


<script type="text/javascript">
	
	function Agregar(e)
	{
		precio = e.getAttribute('data-precio');
		prod = e.getAttribute('data-prod');
		result = document.getElementById('carrito');

		result.innerHTML += prod+precio;

		//alert(esto);
	}
</script>