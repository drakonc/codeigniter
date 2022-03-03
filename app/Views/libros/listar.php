<?= $this->extend('layout\default') ?>

<?= $this->section('content') ?>

    <div class="container text-center mt-4">
        <h2>Lista de Libros</h2>
    </div>
    <div class="m-3">
        <a href="<?=base_url('crear-libro')?>" class="btn btn-primary">Crear un Libro Nuevo</a>
    </div>
    <table class="table table-ligh table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro):?> 
                <tr>
                    <td scope="row"><?=$libro['id'] ?></td>
                    <td><?=$libro['imagen'] ?></td>
                    <td><?=$libro['nombre'] ?></td>
                    <td>
                        <a class="btn btn-primary" type="button">Editar</a>
                        /
                        <a href="<?=base_url('borrar-libro/'.$libro['id']);?>" class="btn btn-danger" type="button">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>       

<?= $this->endSection() ?>