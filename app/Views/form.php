
<div class="container mt-4 p-2 bg-light w-25">
<h2>Crear Vehículo</h2>
    <form action="Vehiculo/guardar" method="post">
        <div class="col-md-12">
            <label for="modelo">Modelo:</label>
            <input type="text" required class="form-control" name="modelo" id="modelo" placeholder="Escriba el modelo aquí">
        </div>
        <div class="col-md-12">
            <label for="marca">Marca:</label>
            <input type="text" required class="form-control" name="marca" id="marca" placeholder="Escriba la marca aquí">
        </div>
        <div class="col-md-12">
            <label for="precio">Precio:</label>
            <input type="number" required class="form-control" id="precio" name="precio" min="500" max="10000">
        </div>
        <div class="col-md-12 d-flex justify-content-center align-items-center mt-3">
            <input type="submit" class="btn btn-success" value="Guardar">
        </div>
        <div class="col-md-12 d-flex justify-content-center align-items-center mt-3">
            <a href="<?= base_url('Vehiculo/index'); ?>" class="btn btn-warning"><i class="far fa-arrow-alt-circle-left"></i></a>
        </div>
    </form>
</div>