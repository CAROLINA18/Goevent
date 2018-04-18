<html>
<head></head>
<title></title>
<body>

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

<form method="post" onsubmit="return checkSubmit();" action="confirmacion.php" class="left_form" >
					    	<div>
						    	<span><label>Nombre del solicitante</label></span>
						    	<span><input name="nombre" type="text" class="textbox" required/></span>
						    </div>

						    <div>
						    	<span><label>¿En que oficina se encuentra?</label></span>
						    	<span><input name="espacio" type="text" class="textbox" required/></span>
						    </div>

						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="email" type="text"  pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  class="textbox" required/></span>
						    </div>
						     <div>					    	
						    	<span><label>Describanos su Solicitud </label></span>
						    	<span><textarea name="solicitud" required/></textarea></span>
						    </div>
						     <div>
						   		<span><input type="submit"  value="Enviar" class="myButton"  ></span>
						   		 
						  </div>
					    </form>




</body>
</html>