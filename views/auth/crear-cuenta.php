<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<?php 
    @include_once __DIR__ . "/../templates/alertas.php"; 
?>

<form class="formulario" method="POST" action="/crear-cuenta">
        <div class="campo">
            <label class="nombre">Nombre</label>
            <input type="text" id="nombre" placeholder="Tu Nombre" name="nombre" value="<?php echo s($usuario->nombre); ?>">
        </div>

        <div class="campo">
            <label class="apellido">Apellido</label>
            <input type="text" id="apellido" placeholder="Tu Apellido" name="apellido" value="<?php echo s($usuario->apellido); ?>">
        </div>

        <div class="campo">
            <label class="telefono">Teléfono</label>
            <input type="telf" id="telefono" placeholder="Tu Teléfono" name="telefono" value="<?php echo s($usuario->telefono); ?>">
        </div>

        <div class="campo">
            <label class="email">E-mail</label>
            <input type="email" id="email" placeholder="Tu E-mail" name="email" value="<?php echo s($usuario->email); ?>">
        </div>

        <div class="campo">
            <label class="password">Password</label>
            <input type="password" id="password" placeholder="Tu Password" name="password">
        </div>

        <input type="submit" value="Crear Cuenta" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/olvide"> ¿Olvidaste tu Password?</a>
</div>