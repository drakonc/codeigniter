<?= $this->extend('layout\default') ?>

<?= $this->section('content') ?>
    <div class="container text-center mt-4">
        <h2>Formulario de Crear</h2>
    </div>
    <div class="m-3">
        <a href="<?=base_url('listar')?>" class="btn btn-primary">Regresar</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Ingresa los datos del Libro
                </div>
                <div class="card-body">
                    <form method="POST" action="<?=base_url('/guarar-libro') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="imagen" class="form-label">Imagen:</label>
                            <input type="file" class="form-control" id="imagen" aria-describedby="imagen" name="imagen" accept="image/png, image/jpeg">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>