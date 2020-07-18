# TP-DSA: App Home SWITCHHome

Autor:Matias Delle Donne


Dependencias
- XAMPP
- sqlmap

Instalar y activar XAMPP

Instalar base de datos

Forma de explotarlo

#La FLAG se divide en 3 partes:

Primera parte:
```
Se encuentra en login.php, inspeccionando la pagina debemos bajar hasta el final para verla y despues decodificarla en hexadecimal
```

Segunda Parte:
Debemos estar en login.php y acceder como usuario normal en este caso:
- Usuario:gaston@hotmail.com
- Contraseña:123

Accedemos a nuestro perfil desde el apartado con nuestro nombre (Gaston) la opcion "Mi perfil"

Debemos descargar la foto que tendria los datos de una tarjeta de credito

Al descargarla usamos el comando:

```
steghide extract -sf card.jpg
```

ACLARACION
- card.jpg es el nombre que le puse, si lo cambian, cambiendolo en el comando


Al ejecutar el comando nos pedira una contraseña (passphrase), se encuentra en la descripcion de uno de los hospedajes en este caso seria "dsa"


Si todo va bien obtendremos un archivo llamado mensaje, el cual si le hacemos cat nos dara nuestra flag codificada en base64, tendremos que decodificarla hasta que aparezaca algun _


Tercera parte:

Nos logueamos como admin
- Usuario:admin@admin.com
- Contraseña:123


Accedemos al listado de hospedajes 
Seleccionamos el la opcion "Ver detalles" y obtememos la url
Utilizamos sqlmap para obtener las tablas con el comando
```
sqlmap -u "http://localhost/detalle-hospedaje.php?var=34" --dbs
```

Con eso buscaremos las tablas 
```
sqlmap -u "http://localhost/detalle-hospedaje.php?var=34" -D switchhome --tables
```

Y luego debemos obtener

-La columna dsa_ROT13 de la tabla notificacion

```
Su contenido debe der decodificado en ROT13, como lo indica el nombre de la columna
```



LA FLAG ENTERA:
```
Primera Parte + Segunda Parte + Tercera Parte
```