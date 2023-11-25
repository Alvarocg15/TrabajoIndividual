    <!--Alvaro Cedazo Gonzalez-->
<?php require("views/header.php"); ?>

<main class="inicio">
    <section>
        <form>
            <h1>Iniciar Sesión</h1>
            <div class="inputbox">
                <input type="email" id="email" name="email" required>
                <span id="icon">
                    <img src="static/img/email.png" alt="Logo Email">
                </span>
                <label for="email">Email</label>
            </div>
            <div class="inputbox">
                <input type="password" id="password" name="password" required>
                <span id="icon">
                    <img src="static/img/bloquear.png" alt="Logo password">
                </span>
                <label for="password">Contraseña</label>
            </div>
            <div class="forget">
                <label ><input type="checkbox">Recuérdame</label>
              <a href="#">Contraseña Olvidada</a>
            </div>
            <button type="button" onclick="validarEmail()">Iniciar Sesion</button>
            <div class="register">
                <p>¿No tienes una cuenta?<br><a href="#">Registrarse</a></p>
            </div>
        </form>
        
    </section>
    <script src="static/js/app.js"></script>
</main>


<?php require("views/footer.php"); ?>