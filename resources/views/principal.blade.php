


<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
				<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	</head>
   
	<body>

		<div class="container">
		<div class="row">
		<form method="post" action="{{ url('almacenar') }}" >
				 {{ csrf_field() }}
		<div id="form-group" style="padding-top:250px;">
		<p style="font-size:12 px; color:blue;">PRUEBA: Listado de Cursos Disponibles</p>
     		
     		<label for="Curso">Curso</label> 
     		<select style="width:280px;" name="curso">
				 <option value="Matematicas">matematica</option>

     		 		
			</select>

			</div>

			<div id="form-group">
				<label for="Alumnos">Alumnos</label>
			
				<select multiple name="alumnos[]" style="width:280px;">
					
     		 		@foreach($alumno as $cursos)
     		 			<option value="{{ $cursos -> id}}">{{ $cursos -> alumno}}</option>
     		 		@endforeach
				 
				</select>
		</div>
		 <button type="submit" class="btn btn-default">Submit</button>
		</form>
		</div>
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