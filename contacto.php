    <!--Alvaro Cedazo Gonzalez-->
<?php require("views/header.php"); ?>

<main class="contacto">
    <h1>Contáctanos</h1>
    <p>Tienes alguna pregunta o sugerencia? Por favor ponte en contacto con nosotros usando el formulario de contacto que tienes más abajo.</p>
    
    <form class="contactanos">
        
        <div class="input">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Escribe tu nombre.">
        </div>
        <div class="input">
            <label for="correo">Correo Electronico</label>
            <input type="text" name="nombre" placeholder="Escribe tu correo electronico.">
        </div>
        <div class="input">
            <label for="nombre">Mensaje</label>
            <textarea rows="4" cols="50" name="mensaje">Escribe tu mensaje.</textarea>
        </div>
        <div class="boton">
            <input type="submit" value="Enviar">
        </div>
       
        
    </form>

    <h1>Información de Contacto</h1>
    <form class="contactanos">
        
        <div>
            <h3>Direccion</h3>
            <p> C. Sigfrido, 8, 29006 Málaga</p>
        </div>
        <div>
            <h3>Telefono</h3>
            <p>952 346 597</p>
        </div>
        <div>
            <h3>Correo electronico</h3>
            <p>huntershaven@gmail.com</p>
        </div>
        <div>
            <h3>Horarios</h3>
            <p>Lunes-Viernes: 10:00-18:00</p>
        </div>
    </form>
    <h1>Ubicación</h1>
    <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102356.26548866229!2d-4.551449555152079!3d36.70734890590371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f75a9a267797%3A0xda886e248807333f!2sArmeria%20Deportiva%20Lince!5e0!3m2!1ses!2ses!4v1700929515062!5m2!1ses!2ses" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    

</main>

<?php require("views/footer.php"); ?>