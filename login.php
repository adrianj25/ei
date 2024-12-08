<?php include 'includes/header2.php';?>
<div class="container">
    <article class="entrada">
        <div class="entrada_contenido">
            <img src="Static/img/login.png"><br>
            <H2>Autentificación</H2><br>
            <form method="POST" name="frm1" id="frm1" action="Static/connect/validation.php">
            <div class="form_container">
                <label for="usuario" class="formulario_label">Usuario</label><br>   
                    <input type="text" name="usuario" id="usuario" class="formulario_input" placeholder="correo@upemor.com">    
                <p class="alert alert-danger" id="usu" name="usu" style="display: none;">Ingresa un mail válido</p>               
            </div> 
            <br>
            <div class="form_container">
                <label for="contrasena" class="formulario_label">Contraseña</label><br>
                    <input type="password" name="contrasena" id="contrasena" class="formulario_input">
                <p class="alert alert-danger" id="con" name="con" style="display: none;">Ingresa una contraseña que contenga entre 7 y 14 caracteres, así como # y @</p>                 
            </div><br>                 
            <div class="form_container">
                <input type="button" class="formulario_btn" value="Enviar"  onclick="validacion();">
                <p class="alert alert-success" id="btn" name="btn" style="display: none;">Iniciando sesión... (Tarda 4 segundos)</p>             
            </div>
            <div class="form_container">
                <br>
                <label><a href="Static/mail/formulario_contra.php">¿Olvidaste tu contraseña?</a></label>
            </div>
            <div class="form_container">
                <br>
                <label><a href="Static/mail/formulario_registro.php">Registrate aquí</a></label>
            </div>
            </form>
        </div>
    </article>
</div>
</body>
    <script src="Static/js/validaciones.js"></script>
</html>