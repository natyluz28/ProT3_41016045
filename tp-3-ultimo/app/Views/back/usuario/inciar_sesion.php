<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Iniciar Sesión</h2>
    
    <!-- Mensajes de Error -->
    <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <!-- Formulario de Inicio de Sesión -->
    <form method="post" action="<?= base_url('/enviariniciarsesion') ?>">
        <div class="form-group">
            <label for="email">Correo</label>
            <input name="email" type="email" class="form-control" placeholder="Correo" required>
        </div>

        <div class="form-group">
            <label for="pass">Contraseña</label>
            <input name="pass" type="password" class="form-control" placeholder="Contraseña" required>
        </div>

        <button type="submit" class="btn btn-success">Ingresar</button>
        <a href="<?= base_url('/iniciar_sesion'); ?>" class="btn btn-danger">Cancelar</a>
        <br><span>¿Aún no se ha registrado? <a href="<?= base_url('/registro'); ?>">Regístrese aquí</a></span>
    </form>
</div>

</body>
</html>

