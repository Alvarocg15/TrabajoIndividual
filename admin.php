<?php require_once("data.php"); ?>

<?php require("views/header.php"); ?>

<main class="admin">
        <h1>Articulos Disponibles</h1>
        <h2 class="total">Total de articulos en activo: <span><?=count($articulos)?></span> </h2>

        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="2">Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Año</th>
                        <th>Stock</th>
                        <th colspan="2">Descripción</th>
                        
                    </tr>        
                </thead>
                <tbody>
                <?php foreach($articulos as $articulo):?>
                    <tr>
                        <td><input type="checkbox" name="seleccion[]" value="<?=$articulo["id"]; ?>" form="editForm"></td>
                        <td><?=$articulo["id"]; ?></td>
                        <td><?=$articulo["nombre"]; ?></td>
                        <td><?=$articulo["precio"]; ?></td>
                        <td><?=$articulo["año"]; ?></td>
                        <td><?=$articulo["stock"]; ?></td>
                        <td><?=$articulo["descripcion"]; ?></td>
                        <td><img src="<?=$articulo["galeria_miniatura"]; ?>"></td>

                        <td class="options">
                            <div> 
                                <button type="submit" form="editForm" name="editar" value="<?=$articulo["id"]; ?>" ><img src="static/img/editar.png"  style="width: 16px; height: 16px;"></button>
                                <button type="submit" form="editForm" name="borrar" value="<?=$articulo["id"]; ?>"><img src="static/img/borrar.png"  style="width: 16px; height: 16px;"></button>
                            </div>
                        </td>
                    </tr>    
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8">
                            <button type="submit" form="editForm" name="seleccion[]" value="Borrar" >Borrar la selección</button>
                        </td>
                    </tr>
                </tfoot>

            </table>
        </div>

        <form action="test.php" target="_blank" id="editForm" method="post">

        </form>

        <div class="container-tabla">
        
<div class="alumnos-profesor">
<h1>Ultimos Pedidos </h1>
<table>
<tr>
    <th>ID Articulo</th>
    <th>Unidades</th>
    <th>Precio</th>
    <th>Descripción</th>
    <th>DNI Cliente</th>
</tr>    
<tr>
    <td>3</td>
    <td>2</td>
    <td>1.265,00 €</td>
    <td>El sistema de recuperación del gas ARGO E SYSTEM ha sido renovado en sus formas constructivas, materiales y movimientos.</td>
    <td>23567456R</td>
</tr>
<tr>
    <td>4</td>
    <td>1</td>
    <td>699,00 €</td>
    <td>Es un arma que si tuviéramos que definirla en pocas palabras diríamos que es de fácil uso, simple, fiable, robusta, divertida y sobre todo económica. Arma ideal para cuerpos de seguridad como para el ocio.</td>
    <td>43587732T</td>
</tr>
<tr>
    <td>9</td>
    <td>5</td>
    <td>23,50 €</td>
    <td>La nueva funda portagrilletes de GK PRO desarrollada por el fabricante francés, ha sido diseñada para ofrecer al profesional un producto de calidad compatible con las plataformas tácticas de su mismo nombre o bien para usarse como dotación en un cinturón de hasta 5 cm.</td>
    <td>87685543K</td>
</tr>
<tr>
    <td>8</td>
    <td>4</td>
    <td>245,00 €</td>
    <td>Chaqueta deportiva impermeable y silenciosa. La chaqueta ideal para cazar en otoño y primavera para días fríos.</td>
    <td>23567456R</td>
</tr>
</table><br>

</div>
</div>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            ScrollNav();
        });
    </script>

<script src="js/app.js"></script>
<?php require("views/footer.php"); ?>