<html>
<head>
<link rel="stylesheet" type="text/css" href="res/style.css">

<script type="text/javascript">
var statSend = false;
function checkSubmit() {
	if (!statSend) {
		statSend = true;
		return true;
	} else {
		alert("Su formulario se esta procesando espere un momento por favor....");
		return false;
	}
}
</script>
</head>
<title></title>
<body>

<center>
<h1></h1>
<div id="formul"> 
<form method="post" onsubmit="return checkSubmit();" action="./?view=confirmacion" class="left_form" >
					    	<div>
						    	<span><label>Nombre del Evento</label></span>
						    	<span><input class="campos1" name="nombre" type="text" class="textbox" required/></span>
						    </div>
						    <br>
						    <div>
						    	<span><label>Fecha</label></span>

						    	<span><input class="campos2" name="espacio" type="text" class="textbox" required/></span>
						    </div>
						    <br>
						    <div>
						    	<span><label class="label3">Hora</label></span>
						    	<span><input class="campos3" name="email" type="text"  pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  class="textbox" required/></span>
						    </div>
						    <br>
						     <div>					    	
						    	<span><label>Lugar</label></span>
						    	<span><input class ="campos4" name="solicitud" required/></textarea></span>
						    </div>
						    <br>
						    
						     <div>					    	
						    	<span><label>Email</label></span>
						    	<span><input class ="campos5" name="solicitud" required/></textarea></span>
						    </div>
						    <br>
						     <div>					    	
						    	<span><label>Telefono </label></span>
						    	<span><input class ="campos6" name="solicitud" required/></textarea></span>
						    </div>
						    <br>
						    <div>					    	
						    	<span><label>Costo</label></span>
						    	<span><input class ="campos7" name="solicitud" required/></textarea></span>
						    </div>
						    <br><br>
						    <b>Imagen Promocional del Evento</b>
						    <br>
						    <br>
						    <input name="uploadedfile" type="file" />
						    <br>
						     <div>
						   		<span><input class="boton" type="submit"  value="Enviar" class="myButton"  ></span>
						   		 
						  </div>
					    </form>

</center>
</div>

</body>
</html>