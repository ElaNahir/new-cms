# PRUEBA PRÁCTICA UF 1305
## 16/07/2025

## 1. WORKFLOW:

### 1.1. Base del ejercicio

Tomando como referencia los ejercicios:

 - New-Cms
 - Validation-Form

Crear una nueva sección de formulario de contacto

### 1.2. Proceso técnico

1. Crear archivo contacto.php en view -> app y añadir el contenido del formulario de validation-form index.html
2. Llamar a la vista "contacto" en archivo AppController
3. Añadir sección "Contacto" en navbar del archivo header.php de view -> app -> partials
4. Copiar archivos procesar.php y validation.php y comprobar que funcionen
5. Linkar la validación de JavaScript en el footer.php de partials -> app -> admin
6. Adaptar el estilo de la nueva sección al estilo predeterminado de la página
7. Añadir un toque de color (Morado que simboliza la magia) al nav, footer, y links
8. Cambiar hover de todos los botones y links
9. Modificar la base de datos para crear un blog de viajes
10. Optimización de imágenes
11. Adaptar el contenido.

   
   
## 2. HERRAMIENTAS:
    - VSCode para todo el código
    - Herramientas de navegador para inspeccionar la página y adaptar el CSS
    - Firefox developer para inspeccionar la página y detectar errores
    - JS, PHP, POO, CMS, MySQL
    - Laragon 
    
    
 ## 3. FUENTES DE DOCUMENTACIÓN:  
    - 



## 4. COMPROBACIÓN DE LA PÁGINA:
    - Regression test: Comprobar que con los cambios realizados, el resto de código funciona igual que anteriormente
    - Cross-Browser: Funciona en todos los navegadores (Chrome, Firefox, Safari)
    - Al auditar la página encuentro errores en Firefox developer como la falta de favicon.


## 5. PROBLEMAS Y SOLUCIONES:

Ejercicio finalizado antes de lo esperado
Aprovecho para mejorar problemas encontrados:

PROBLEMA:
    - El color del botón:focus viene dado por el cdn materialize y no es modificable.
    - El color verde no encaja con el estilo neutro de la página.


SOLUCIÓN:
    - Inspeccionar la página y copiar las clases de los botones en focus
    - Aplicar esas clases a los archivos app.css y admin.css y cambiar el color




PROBLEMA:
    - En usuarios admin, las card no tienen la misma disposición que en noticias. Hay un hueco.


SOLUCIÓN:
    - Buscar el css en el inspeccionador de Chrome
    - Comprobar que las clases pertenecen al materialize
    - Detectar que el error no pertenece al estilo
    - Revisar en el DOM el contenido. Eliminar uno de los elementos <br> que aumentaba el tamaño de la card "admin". Error solucionado.



SOLUCIÓN DE ERRORES AL INSPECCIONAR LA PÁGINA EN FIREFOX DEVELOPER:
    - Falta de icono. Añadir link:favicon con ruta php al archivo header.php

ERRORES PENDIENTES DE SOLUCIÓN:
    - Type Error en archivo validation.js -> getElementbyId -> addEventListener.