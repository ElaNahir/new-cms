<h3>()</h3>
<ul>
    <?php if ($_SESSION['noticias'] == 1) { ?>
        <li>
            <a href="<?php echo $_SESSION['home'] ?>admin/noticias" title="Noticias">Noticias</a>
        </li>
    <?php } ?>
    <?php if ($_SESSION['usuarios'] == 1) { ?>
        <li>
            <a href="<?php echo $_SESSION['home'] ?>admin/usuarios" title="Usuarios">Usuarios</a>
        </li>
    <?php } ?>
    <li>
        <a href="<?php echo $_SESSION['home'] ?>admin/salir" title="Salir">Salir</a>
    </li>
</ul>