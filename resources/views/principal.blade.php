


<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
				<!-- Latest compiled and minified CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	</head>
   
	<body>

		<div id="container">
		<center style="padding-top:250px;">
		<p style="font-size:12 px; color:blue;">PRUEBA: Listado de Cursos Disponibles</p>
     		<select style="width:280px;" multiple>
				 

     		 		
     		 		@foreach($curso as $cursos)
     		 			<option>{{ $cursos -> curso}}</option>
     		 		@endforeach
				 
			</select>


			

		</center>
		</div>
	</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<!-- Latest compiled and minified JavaScript -->


<script type="text/javascript">
  $('select').select2({
  	placeholder:"Selecciona un curso: ",
  	allowClear:true,
  	maximumSelectionLength: 2
  });

 
</script>
</html>