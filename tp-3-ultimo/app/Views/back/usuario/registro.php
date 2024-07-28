<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4 mb-4">
    <div class="card col-lg-6 mx-auto">
        <div class="card-header text-center">
            <h4>Registrarse</h4>
        </div>
        <div class="card-body">
            <?php $validation = \Config\Services::validation(); ?>
            <form method="post" action="<?= base_url('/enviar-form') ?>">
                <?= csrf_field(); ?>
                
                <!-- Mensajes de Error y Éxito -->
                <?php if(!empty(session()->getFlashdata('fail'))): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('fail'); ?>
                    </div>
                <?php endif; ?>
                
                <?php if(!empty(session()->getFlashdata('success'))): ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="<?= old('nombre') ?>">
                    <?php if($validation->getError('nombre')): ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('nombre'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input name="apellido" type="text" class="form-control" placeholder="Apellido" value="<?= old('apellido') ?>">
                    <?php if($validation->getError('apellido')): ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('apellido'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Email" value="<?= old('email') ?>">
                    <?php if($validation->getError('email')): ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('email'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input name="usuario" type="text" class="form-control" placeholder="Usuario" value="<?= old('usuario') ?>">
                    <?php if($validation->getError('usuario')): ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('usuario'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="pass" class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" placeholder="Password">
                    <?php if($validation->getError('pass')): ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('pass'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="<?= base_url('/'); ?>" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
