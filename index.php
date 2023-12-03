    <!--Alvaro Cedazo Gonzalez-->
<?php require("views/header.php"); ?>

<main class="principio">
    
    <div class="prueba">
        <h2>Bienvenido a nuestra tienda</h2>
        <p>Descubre productos increibles y encuentra ofertas exclusivas.</p>
        <div>
            <a href="#tituloCat">Ver categorias</a>
            <a href="#tituloDest">Ver productos destacados</a>
        </div>
        <div>
            
    
        </div>
    </div>

    <h2 id="tituloCat">Categorias</h2>
    <div id="categorias">
        <div class="fila">
            <div class="categoria">
                <a href="categoria.php">Rifles</a>
            </div>
            <div class="categoria">
                <a href="#">Aire Comprimido</a>
            </div>
            <div class="categoria">
                <a href="#">Vestuario</a>
            </div>
        </div>
        <div class="fila">
            <div class="categoria">
                <a href="#">Opticas</a>
            </div>
            <div class="categoria">
                <a href="#">Segunda Mano</a>
            </div>
            <div class="categoria">
                <a href="#">Municion</a>
            </div>
        </div>
        
    </div>
    <h2 id="tituloDest">Productos Destacados</h2>
    <div id="destacados">
        <div class="opinion">
            <div class="ribbon">NUEVO</div>
            <img src="static/img/funda.jpg" alt="Producto 1">
            <p>FUNDA RIFLE RET 125 CM</p>
            <h2>86,00 €</h2>
        </div>
        <div class="opinion">
            <div class="ribbon">TOP VENTAS</div>
            <img src="static/img/chaqueta.jpg" alt="Producto 2">
            <p>CHAQUETA HART DONON-J SP</p>
            <h2>245,00 €</h2>
        </div>
        <div class="opinion">
            <div class="ribbon">RECOMENDADO</div>
            <img src="static/img/porta.jpg" alt="Producto 3">
            <p>PORTA GRILLETES GK PRO TACTIKNIGHT</p>
            <h2>23,50 €</h2>
        </div>
    </div>

    <h2>Opiniones de compradores verificados</h2>
    <div class="opiniones">
        <div class="contenedor">
            <div class="opinion">
                <div class="review-author text-right">
                    <span id="icon">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella-negra.png" alt="Logo Email">
                    </span>
                    <span>Manuel Muñoz</span>
                </div>
                <div class="panel-body">
                <p>Muy profesionales, atentos al cliente y buena relación calidad-precio. Solo decir que deberían cambiar la empresa de transporte pues ensombrece la profesionalidad de la empresa por su mala gestión sobre el pedido a entregar.</p>
                </div>
                <div class="panel-footer text-right"><em>23 Noviembre, 2023</em></div>
            </div>

            <div class="opinion">
                <div class="review-author text-right">
                    <span id="icon">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                    </span>
                    <span>Juan Lopez</span>
                </div>
                <div class="panel-body">
                <p>Excelente armeria,todo rápido y en perfectas condiciones.</p>
                </div>
                <div class="panel-footer text-right"><em>15 Noviembre, 2023</em></div>
            </div>

            <div class="opinion">
                <div class="review-author text-right">
                    <span id="icon">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella.png" alt="Logo Email">
                        <img src="static/img/estrella-negra.png" alt="Logo Email">
                    </span>
                    <span>Pedro Gomez</span>
                </div>
                <div class="panel-body">
                <p>Todo fenomenal, página fácil de navegar, seriedad, entrega muy rápida.</p>
                </div>
                <div class="panel-footer text-right"><em>6 Septiembre, 2023</em></div>
            </div>
        </div>
        
    </div>
    <h2>Enlaces de interés</h2>
    <div id="interes">
        <div class="fila">
            <div class="categoria">
                <a href="contacto.php">Información de Contacto</a>
            </div>
            <div class="categoria">
                <a href="#">Politica de Devoluciones</a>
            </div>
            <div class="categoria">
                <a href="#">Politica de Envios</a>
            </div>
        </div>
    </div>
</main>
<?php require("views/footer.php"); ?>