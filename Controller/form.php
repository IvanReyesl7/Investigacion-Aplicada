
<div class="encabezado">
    <h1> Calcular total de un producto</h1>
</div>


<div class="form">
     
    <form action="" method="post">

            <label for="">Ingrese la cantidad a comprar:</label>

            <input name="Cantidad" type="number" class="cantidad" placeholder="Cantidad">

            <label for="">Seleccione el producto:</label>

            <select name="Producto" class="cantidad" id="producto">
                <option selected value="">Seleccione el producto.</option>
                <option value="1">paquete de huevos</option>
                <option value="2">Cereal</option>
                <option value="3">Nutella</option>
                <option value="4">Peras</option>
                <option value="5">Papel Higienico</option>
                <option value="6">Coca Cola 3L</option>
            </select><br>

            <input class="submit" type="submit" value="Enviar" name="Enviar"><br>

            <?php include_once "../Model/CalcularTotal.php"; ?>

            

            

    </form>

</div>