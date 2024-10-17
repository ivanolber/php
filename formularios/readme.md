<h1>Ejercicios de Formularios</h1>

<h2>Calculadora</h2>

<p>Escribe un programa calculadora.php que acepte por la dirección las variables $x y $y y que:
Muestra por pantalla:
• El valor del array $_GET (utiliza la función print_r())
• La suma, resto, multiplicación y división de x e y.
• El valores de la variable $_SERVER.
• ¿Cual es el ordenador que hace la petición?
• En qué variable están los parámetros de la petición.
• ¿Qué es la ruta del sitio web en el ordenador local ?
• Utilitza una vista para mostrar el resultado. calculadora.view.php</p>


![image](https://github.com/user-attachments/assets/54f6a959-ae92-45e5-b654-5d9f5e5b2ff7)

<h2>Formulario</h2>

<p>Crea un formulario que solicite: • Nombre y apellidos.
• Email.
• URL página personal.
• Sexo (radio).
• Número de convivientes en el domicilio.
• Aficiones (checkboxes) => poner mínimo 4 valores.
• Menú favorito (lista selección múltiple) => poner mínimo 4 valores.
• Muestra los valores cargados en una tabla-resumen.</p>

![image](https://github.com/user-attachments/assets/e0e0283b-71d0-493a-bff5-e980af7277b7)

![image](https://github.com/user-attachments/assets/56c0a139-27e4-4517-8d04-3f28501d744d)

<h2>Login</h2>

<p>Vamos a simular un formulario de acceso:
login.php: el formulario de entrada, que solicita el usuario y contraseña. compruebaLogin.php:
recibe los datos y comprueba si son correctos (los usuarios se guardan en un array asociativo) pasando
el control mediante el uso de include a:
ok.php: El usuario introducido es correcto
ko.php: El usuario es incorrecto. Informar si ambos están mal o solo la contraseña. Volver a mostrar el
formulario de acceso.</p>


![image](https://github.com/user-attachments/assets/9d0577a9-b181-4d08-a2cd-d325f626e9a3)

![image](https://github.com/user-attachments/assets/b6e45b94-a83a-4e5e-94a8-0fb2cca1d219)

![image](https://github.com/user-attachments/assets/db59c6ce-147a-4174-b53c-8bb05d5f9782)

![image](https://github.com/user-attachments/assets/619bf494-a787-40ce-a822-d7755942e146)

<h2>Subida de imagen</h2>

<p>Crea un formulario que permita subir unicamente imágenes (comprueba la propiedad type del archivo
subido). Si el usuario selecciona otro tipo de archivos, se le debe informar del error y permitir que suba
un nuevo archivo. En el caso de subir el tipo correcto, visualizar la imagen durante 5 segundos,con la
ruta y nombre, tamaño de anchura y altura y redirecciona al formulario. También hay que crear un
enlace para mostrar el listado de todas las imagenes subidas.(analiza/estudia el método scandir()
).</p>

![image](https://github.com/user-attachments/assets/acf96c93-2c23-4130-8e4f-d0a2e7077268)

![image](https://github.com/user-attachments/assets/f2aac8c1-b97d-48f6-86cb-ac5eb0c409e6)

<h2>Ley de Hont</h2>

<p>Nos piden el diseño de una página web donde introduzcamos el número de partidos políticos, la
cantidad de votos por partido y el número de escaños a repartir y nos devuelva una tabla como la
siguiente:
• Donde las columnas son el Total de votos del partido dividido entre el número de escaños.
– 500.000/1, 500.000/2 ... 500.000/7 y así con los 4 partidos.
Donde hemos metido los 4 partidos el número total de votos por partido 500.000, 300.000, 150.000 y
50.000 respectivamente y el total de escaños a repartir, en este caso 7. Si nos fijamos y simplificando.
Mucho hay que marcar las 7 cantidades mayores</p>



![image](https://github.com/user-attachments/assets/5ef3dc4b-4b48-4d72-a2c2-8aa02fafa763)
<p>Partidos.php</p>








