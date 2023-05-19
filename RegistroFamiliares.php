<?php include 'template/headerFamiliares.php' ?>

<div class="col-sm">
    <div class="card">
        <div class="card-header">
            Ingresar datos:
        </div>
        <form class="p-4" method="POST" action="RegistrarFamiliares.php">
            <div class="mb-3">
                <label class="form-label">Nombre: </label>
                <input type="text" class="form-control" name="txtNombre" autofocus >
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido Paterno: </label>
                <input type="text" class="form-control" name="txtApellidoP" autofocus >
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido Materno: </label>
                <input type="text" class="form-control" name="txtApellidoM" autofocus >
            </div>
            <div class="mb-3">
                <label class="form-label">DNI: </label>
                <input type="number" class="form-control" name="txtDni" autofocus >
            </div>
            <div class="mb-3">
                <label class="form-label">Correo Electronico: </label>
                <input type="email" class="form-control" name="txtEmail" autofocus >
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono: </label>
                <input type="tel" class="form-control" name="txtTelefono" autofocus >
            </div>
            <div class="mb-3">
                <label class="form-label">DNI Paciente: </label>
                <input type="number" class="form-control" name="txtDniPaciente" autofocus >
            </div>
            <div class="d-grid">
                <input type="hidden" name="oculto" value="1">
                <input type="submit" class="btn btn-primary" value="Registrar"><br>
                <a class="btn btn-secondary" type="button" href="Familiares.php">Regresar al inicio</a>
            </div>
        </form>
    </div>
    <?php include 'template/footer.php' ?>