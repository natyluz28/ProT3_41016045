<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('front/styles/styles_registro.css') ?>"> <!-- Enlace al archivo CSS -->
</head>
<body>

<div class="container mt-5">
    <h2>Registro de Usuario</h2>

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

    <!-- Formulario de Registro -->
    <form method="post" action="<?= base_url('/backend/enviar-registro') ?>">
        <?= csrf_field(); ?>
        
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="<?= old('nombre') ?>" required>
            <?php if($validation->getError('nombre')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('nombre'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="apellido" class="form-label">Apellido</label>
            <input name="apellido" type="text" class="form-control" placeholder="Apellido" value="<?= old('apellido') ?>" required>
            <?php if($validation->getError('apellido')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('apellido'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" placeholder="Email" value="<?= old('email') ?>" required>
            <?php if($validation->getError('email')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('email'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="usuario" class="form-label">Usuario</label>
            <input name="usuario" type="text" class="form-control" placeholder="Usuario" value="<?= old('usuario') ?>" required>
            <?php if($validation->getError('usuario')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('usuario'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="pass" class="form-label">Password</label>
            <input name="pass" type="password" class="form-control" placeholder="Password" required>
            <?php if($validation->getError('pass')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('pass'); ?>
                </div>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-success">Registrarse</button>
        <a href="<?= base_url('/'); ?>" class="btn btn-danger">Cancelar</a>
    </form>
</div>

</body>
</html>
