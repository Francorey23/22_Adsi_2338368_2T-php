<?php
require_once("plantilla/plantillaFormulario.php");
?>
<div class="formulario">

    <h3>Formulario Registro</h3>

<form action="" method="" >
    <div class="mb-3">
        <label>Nombres completos</label>
        <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email.." aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="password2" placeholder="digite nuevamente password" aria-describedby="emailHelp">
    </div>
    

    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>