<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente  formulario para crear una cuentaa</p>

<form action="/crear-cuenta" class="formulario" method="POST">

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" 
        placeholder="Escribe tu nombre" value="<?php echo s($usuario -> nombre); ?>">
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Escribe tu apellido" value="<?php echo s($usuario -> apellido); ?>">
    </div>
    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Escribe tu Teléfono" value="<?php echo s($usuario -> telefono); ?>">
    </div>
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Escribe tu Email" value="<?php echo s($usuario -> email); ?>">
    </div>
    <div class="campo">
        <label for="password">password</label>
        <input type="password" id="password" name="password" placeholder="Escribe tu Password">
    </div>
    <input type="submit" class="boton" value="Crear Cuenta">
</form>

<div class="acciones">
    <a href='/'>¿Ya tienes una cuenta? Inicia sesión</a>
    <a href='/olvide'>¿Olvidaste tu password?</a>
</div>