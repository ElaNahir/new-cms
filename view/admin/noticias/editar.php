<h3>
    <a href="<?php echo $_SESSION['home'] ?>admin" title="Inicio">Inicio</a> <span>| </span>
    <a href="<?php echo $_SESSION['home'] ?>admin/noticias" title="Noticias">Noticias</a> <span>| </span>
    <?php if ($datos->id) { ?>
        <span>Editar <?php echo $datos->titulo ?></span>
    <?php } else { ?>
        <span>Nueva noticia</span>
    <?php } ?>
</h3>

<div class="row">
    <?php $id = ($datos->id) ? $datos->id : "nuevo" ?>
    <form class="col s12" action="<?php echo $_SESSION["home"] ?>admin/noticias/editar/<?php echo $id ?>" method="POST" enctype="multipart/form-data">
        <div class="col m12 l6">
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="titulo" id="titulo" value="<?php echo $datos->titulo ?>">
                    <label for="titulo">Título</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="autor" id="autor" value="<?php echo $datos->autor ?>">
                    <label for="autor">Autor</label>
                </div>
                <div class="input-field col s12">
                    <?php $fecha = ($datos->fecha !== null) ? date("d-m-Y", strtotime($datos->fecha)) : date("d-m-Y") ?>
                    <input type="text" name="fecha" id="fecha" value="<?php echo $fecha ?>">
                    <label for="fecha">Fecha</label>
                </div>
            </div>
        </div>
        <div class="col m12 l6 center-align">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Imagen</span>
                    <input type="file" name="imagen">
                </div>
                <div class="file-pad-wrapper">
                    <input type="text" class="file-path validate">
                </div>
            </div>
            <?php if ($datos->imagen) { ?>
                <img src="<?php echo $_SESSION['public'] . "img/" . $datos->imagen ?>" alt="<?php echo $datos->titulo ?>">
            <?php } ?>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="entradilla" id="entradilla" class="materialize-textarea"><?php echo $datos->entradilla ?></textarea>
                    <label for="entradilla">Extracto</label>
                </div>
                <div class="input-field col s12">
                    <textarea name="texto" id="texto" class="materialize-textarea"><?php echo $datos->texto ?></textarea>
                    <label for="texto">Texto</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <a href="<?php echo $_SESSION['home'] ?>admin/noticias" title="Volver">
                    <button class="btn wave-effect wave-light" type="button">Volver <i class="material-icons right">replay</i></button>
                </a>
                <button class="btn wave-effect wave-light" type="submit" name="guardar">Guardar <i class="material-icons right">save</i></button>
            </div>
        </div>
    </form>
</div>