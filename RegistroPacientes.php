<?php include 'template/headerPacientes.php' ?>

<div class="col-sm">
    <div class="card-1">
        <div class="card-header">
        &nbsp;&nbsp;&nbsp;      Ingresar datos:
        </div>
        <form class="p-4" method="POST" action="RegistrarPacientes.php">
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
                <label class="form-label">Fecha de Nacimiento: </label>
                <input type="date" class="form-control" name="txtFecha" autofocus >
            </div>
            <div class="mb-3">
                <label class="form-label">DNI: </label>
                <input type="number" class="form-control" name="txtDni" autofocus >
            </div>
            <div class="mb-3">
                <label class="form-label">Edad: </label>
                <input type="number" class="form-control" name="txtEdad" autofocus >
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo de Estadía: </label>
                <select class="form-select" name="comboboxServicio" autofocus >
                    <option selected></option>
                    <option value="Días">Días</option>
                    <option value="Semanas">Semanas</option>
                    <option value="Meses">Meses</option>
                    <option value="Permanente">Permanente</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Duración: </label>
                <input type="text" class="form-control" name="txtDuracion" autofocus >
            </div>
            <div class="d-grid">
                <input type="hidden" name="oculto" value="1">
                <input type="submit" class="btn btn-primary" value="Registrar"><br>
                <a class="btn btn-secondary" type="button" href="Pacientes.php">Regresar al inicio</a>
            </div>
        </form>
    </div>
    <?php include 'template/footer.php' ?>