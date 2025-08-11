<h3>
    <a href="<?php echo $_SESSION['home'] ?>admin" title="Inicio">Inicio</a> <span> | </span>
    <a href="<?php echo $_SESSION['home'] ?>admin/usuarios" title="Usuarios">Usuarios</a><span> | </span>
    <?php if ($datos->id) { ?>
        <span>Editar <?php echo $datos->usuario ?></span>
    <?php } else { ?>
        <span>Nuevo usuario</span>
    <?php } ?>
</h3>

<div class="row">
    <?php $id = ($datos->id) ? $datos->id : "nuevo" ?>
    <form class="col m12 l6" method="POST" action="<?php echo $_SESSION['home'] ?>admin/usuarios/editar/<?php echo $id ?>">
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="usuario" id="usuario" value="<?php echo $datos->usuario ?>">
                <label for="usuario">Usuario</label>
            </div>

            <?php $clase = ($datos->id) ? "hide" : "" ?>

            <div class="input-field col s12 <?php echo $clase ?>" id="password">
                <input type="password" name="clave" id="clave" value="">
                <label for="clave">Contraseña</label>
            </div>

            <?php $clase = ($datos->id) ? "" : "hide" ?>
            <p class="<?php echo $clase ?>">
                <label for="cambiar_clave">
                    <input type="checkbox" name="cambiar_clave" id="cambiar_clave">
                    <span>Cambiar clave</span>
                </label>
            </p>
        </div>

        <div class="row">
            <p><strong>Permisos</strong></p>
            <p>
                <label for="noticias">
                    <input type="checkbox" name="noticias" id="noticias" <?php echo ($datos->noticias == 1) ? "checked" : "" ?>>
                    <span>Noticias</span>
                </label>
            </p>
            <p>
                <label for="usuarios">
                    <input type="checkbox" name="usuarios" id="usuarios" <?php echo ($datos->usuarios == 1) ? "checked" : "" ?>>
                    <span>Usuarios</span>
                </label>
            </p>

            <?php $clase = ($datos->id) ? "" : "hide" ?>
            <p class="<?php echo $clase ?>">
                Último acceso: <strong><?php echo $datos->fecha_acceso ? date ("d/m/Y H:i", strtotime($datos->fecha_acceso)) : 'Nunca'; ?></strong>
            </p>
            <div class="input-field col s12">
                <a href="<?php echo $_SESSION['home'] ?>admin/usuarios" title="Volver">
                    <button class="btn waves-effect waves-light" type="button">
                        Volver <i class="material-icons right">replay</i>
                    </button>
                </a>
                <button class="btn waves-effect waves-light" type="submit" name="guardar">
                    Guardar <i class="material-icons right">save</i>
                </button>
            </div>

        </div>
    </form>
</div>