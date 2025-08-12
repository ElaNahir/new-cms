<header>
    <h1>Formulario de contacto</h1>
    <h2>Únete al club para saber más!</h2>
</header>

<section class="container-fluid">

    <h3>
        <a href="<?php echo $_SESSION['home'] ?>" title="Inicio">Inicio</a> <span>| Contacto</span>
    </h3>
    

    <div class="row">
        <form class="col m12 l6" id="contactForm" action="procesar.php" method="POST" novalidate>
            <div class="row">
                <!-- Campo nombre -->
                <div class="input-field col s12">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required>
                    <div class="error" id="nombreError"></div>
                </div>

                <!-- Campo apellidos -->
                <div class="input-field col s12">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos" required>
                    <div class="error" id="apellidosError"></div>
                </div>

                <!-- Campo teléfono -->
                <div class="input-field col s12">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" name="telefono" id="telefono" required>
                    <div class="error" id="telefonoError"></div>
                </div>

                <!-- Campo email -->
                <div class="input-field col s12">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                    <div class="error" id="emailError"></div>
                </div>

                <!-- Mensaje -->
                <div class="input-field col s12">
                    <label for="bio">Mensaje:</label>
                    <textarea name="bio" id="bio" required></textarea>
                    <div class="error" id="bioError"></div>
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit">Enviar solicitud</button>
                </div>
            </div>
        </form>
    </div>

    <script src="<?php echo $_SESSION['public'] ?>js/validation.js"></script>