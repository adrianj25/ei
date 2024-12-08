<?php include 'Static/connect/consulta.php'; ?>
<?php include 'includes/header2.php'; ?>

<div class="container">
    <!-- Botón de inicio de sesión centrado en la parte superior -->
    <div class="login-box">
        <a href="login.php" class="login-link">
            <img src="./Static/img/Icono_Login.png" alt="Login Icon">
            <span>Iniciar Sesión</span>
        </a>
    </div>

    <article class="entrada">
        <div class="entrada_contenido">
            <p>Bienvenid@ Barber Shop Viking México</p>
            <p>Horarios de atención: 10am - 9pm</p>
            <p>Teléfono: 777 555 55 55</p>
            <p><a href="Static/mail/formulario_registro.php">¡Regístrate aquí para generar tu cita!</a></p>
            <p>Precio servicios</p>
            <table class='table table-dark'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Servicio</th>
                        <th>Costo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($rows=mysqli_fetch_array($exec)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($rows['Id']); ?></td>
                            <td><?php echo htmlspecialchars($rows['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($rows['precio']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </article>
</div>

<footer class="footer">
    <div class="footer-content">
        <p>Contacto: 777 555 55 55</p>
        <p>Correo: contacto@barbershopviking.mx</p>
        <p>@Jose Adrian Jimenez Marquez</p>
        <p>@Valeria Abigail Ceja Andres</p>
    </div>
</footer>

<?php include 'includes/footer.php'; ?>
