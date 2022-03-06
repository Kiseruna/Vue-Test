Prueba de Vue.js y Php
----------------------

MySQL

-Se utiliza el entorno XAMPP para crear la BDD
-Mediante phpMyadmin y MySQL se crea una BDD llamada ceipa.
-Se crea la tabla llamada "datos_personales" con la siguiente información:
	-id (int, ai)
	-nombre completo (varchar, 75)
	-tipo de documento (varchar, 21)
	-número de documento (bigint, 15)
	-fecha de nacimiento (date)

PHP

-Se crea la conexión a la base de datos mediante la clase "Conexion".
-Se definen las credenciales para conectarse a la BDD.
-El script devuelve un error en caso de no poder conectarse a la BDD.

-Se realiza un Script que funcionará como un CRUD.
-Se enlaza a la BDD.
-Se capitaliza cualquier texto que ingrese el usuario a campo nombre ej:
	Si el usuario ingresa "AnDrEs" o "ANDRES" o "andres" php convertirá a "Andres".
-Se recogen los datos provenientes del formulario.
-Se ejecutan las consultas según el caso. (Select o Insert)
-Se finaliza la conexión a base de datos

HTML

-Se modela la estructura del formulario según las pautas en: https://marvelapp.com/prototype/20g37d1g/screen/69287458
-Se enlazan scripts y librerías para ejecutar Vue, Axios y alertas.
-Se estructura el formulario para que sea responsive con la etiqueta viewport.
-Se enrutan los componentes para que los datos sean cargados en los input.

CSS
-Se establecen los parámetros para complementar el responsive.
-Se añade el fondo del formulario.
-Se añaden las fuentes personalizadas.
-Se ajusta el logotipo.
-Se posicionan los contenidos del formulario.
-Se estiliza el botón de envío de datos.
-Se estilizan los input del formulario. (checkbox, text, select, number, date)

VUE
-Se enlaza con PHP.
-Se enlaza con el id #app.
-Se crea el objeto data que mantendrá en memoria los datos traídos de la BDD.
-Se agregan los option del select mediante Vue.
-Se crea la función showName la cual permite mostrar el Primer nombre en el saludo.
-Se crea la función btnActualizar que se encarga de recoger la información del formulario
  valida si el usuario aceptó los TyC y si no arroja una alerta.
-Se crea la función que carga los datos personales desde la BDD.
-Se crea la función que envía o actualiza los datos a la BDD.
-Se consulta la BDD para que traiga activamente la información.