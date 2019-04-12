<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Contacta con los desarrolladores</h1>
	<p>
		Tienes alguna duda, queja o algo para aportar sobre la web
		contacta con el soporte e intentaremos mejorar
	</p>
	<br/>
	<form action="guardar-contacto.php" method="POST">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" />
                <?php echo isset($_SESSION['errores_contactar']) ? mostrarError($_SESSION['errores_contactar'], 'nombre') : ''; ?>
                
                <label for="asunto">Asunto</label>
		<input type="text" name="asunto" />
                <?php echo isset($_SESSION['errores_contactar']) ? mostrarError($_SESSION['errores_contactar'], 'asunto') : ''; ?>
                
		<label for="descripcion">Descripción</label>
                <textarea name="descripcion"></textarea>
		<?php echo isset($_SESSION['errores_contactar']) ? mostrarError($_SESSION['errores_contactar'], 'descripcion') : ''; ?>
                
		<input type="submit" value="Guardar" />
	</form>
        <?php borrarErrores(); ?>
</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>

