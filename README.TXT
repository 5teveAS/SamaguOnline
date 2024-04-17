DETALLES Y INTRUCCIONES PARA REALIZAR INSTALACION DEL REPOSITORIO EN EL EQUIPO PARA EL DESARROLLO.

PROYECTO: SAMAGU ONLINE 

INTEGRANTES:

→ STEVE ARCE SALAS
→ ANDREY ESPINOZA RODRIGUEZ
→ FABRICIO ROJAS CAMACHO
→ MARCO VIQUEZ CORRALES


__________________________________________________________________________________________________________

DESCRIPCION DEL PROYECTO SAMAGU ONLINE: 

El presente proyecto se enfoca en realizar una aplicación web con el fin de facilitar la gestión
y el control de la empresa SAMAGU RODRIGUEZ S.A., permitiéndoles a sus trabajadores un mejor manejo
de la integridad e información de la empresa. Actualmente la empresa SAMAGU RODRIGUEZ S.A no cuenta 
con un sistema informático que facilite las operaciones del día a día de la empresa, por lo tanto, 
la empresa ha solicitado la creación de la aplicación con una lista de requerimientos que necesitan 
que se integren dentro de esta misma: 

Módulo de autenticación: habrá usuarios y sus respectivos roles con diferentes permisos
dentro de la aplicación web, el o los administradores pueden guardar nuevos usuarios y 
asignarles su respectivo rol. 

Módulo de registro de usuarios: Este módulo permitirá realizar el registro de nuevos usuarios
para el uso de la aplicación web. 

Módulo de liquidaciones de la empresa: Este módulo permitirá calcular las liquidaciones de 
una forma automatizada de los empleados despedidos. 

Módulo de Facturas: Este módulo permitirá observar el estado de las facturas de la empresa,
como, por ejemplo: Factura pendiente, cancelada o en proceso. 

Módulo de clientes: Este módulo permitirá el registro, modificación y eliminación de los 
clientes de la empresa. 

Módulo de proyectos: Este módulo permitirá el registro, modificación y eliminación de los 
proyectos de la empresa, y revisar distintos datos de cada proyecto, como su nombre, persona
a cargo, gastos y presupuesto. 

Módulo de gastos: En este módulo se archivará y se administrará a manera de historial la 
entrada y los gastos de los proyectos; se pueden reflejar también los respectivos presupuestos
de los proyectos por individual. 

Módulo de empleados: Este módulo permitirá el registro, modificación y eliminación de los 
empleados de la empresa. 

Módulo de proveedores: Este módulo permitirá el registro, modificación y eliminación de los 
proveedores de la empresa. 

Módulo de inventario: Este módulo permitirá el registro, modificación y eliminación de los 
productos de la empresa. 

Módulo de respaldo de datos: Este módulo permitirá respaldar los datos de la empresa en caso 
de fallos o errores en la aplicación web. 


Principales tecnologias en el desarrollo de este proyecto son: PHP, MySQL y Laravel 8.


__________________________________________________________________________________________________________

PASOS PARA INSTALAR EL REPOSITORIO EN EL EQUIPO PARA EL DESARROLLO:

1 - Primer paso INSTALACIONES:
		 Instalar Xampp para que funcione el servidor apache,
		 Instalar Composer PHP en la direccion C:\xampp\php\php.exe (o donde este instaldo el Xampp).
		 Instalar nodeJS.
		 Instalar Git.
		 Instalar Laravel 8 de manera global en el equipo para mayor facilidad de su uso.
		 Instalar MySQL WorkBench.
		 Instalar Visual Studio Code (o el editor de texto que prefiera mientras soporte el control 
		 de versiones en Git)

2 - Inicializamos el programa Xampp y iniciamos el servicio de Apache.

3 - En crear Nuevo repositorio o en los tres puntos (las opciones) del Source Control del Visual Studio 
    hacemos clic el clonar

4 - Ingresamos la URL git del repositorio que nos pide Visual Studio Code al hacer el paso anterior y le
    damos Enter. 
    El URL es el siguiente: https://Stevarcsa@bitbucket.org/samaguonline/samaguonline2021-2022.git

5 - Nos abre la ventana para elegir la carpeta contenedora, aqui se busca en el disco local (C:) o donde 
    este instalado el xampp, buscamos la carpeta llamada xampp, luego la carpeta llamada htdocs, dentro 
    de esta carpeta le damos clic en utilizar esta ubicacion para el repositorio.

6 - Puede aparecer una ventana de ATLASSIAN para que iniciemos sesion con nuestras credenciales, iniciamos 
    sesion y Autorizamos el acceso.

7 - Añadimos lo clonado al WorkSpace (Visual Studio Code te preguntara esto).

8 - Encontraras en el editor de codigo la carpeta con el proyecto del repositorio listo para empezar a 
    editar el proyecto.

9 - En la terminal del Visual Studio Code, en la opciones de terminal (al lado del +) escogemos como perfil
    default a GIT BASH.

10 - Ingresamos los siguientes comandos en la terminal git bash: 

    	 cd /c/xampp/htdocs/samaguonline2021-2022/ 
    	 php artisan serve

     Con esto se ejecutara la aplicacion.

__________________________________________________________________________________________________________

PARA HACER COMMIT Y PUSH:

1 - En la terminal del Visual Studio Code, en la opciones de terminal (al lado del +) escogemos como perfil
	default a GIT BASH o bien se puede abrir Git Bash directamente.

2 -  Ingresamos los siguientes comandos:
	 cd /c/xampp/htdocs/samaguonline2021-2022/  
	 Git init
	 git add -A
	 git status (para mirar lo que puede ser commit)
	 git commit -m "Aqui dentro de las comillas se pone el mensaje de commit"
	 git remote add origin https://Stevarcsa@bitbucket.org/samaguonline/samaguonline2021-2022.git   
	(es posible que ya este añadido el remote)
	git push origin master 

PARA HACER PULL

1 - En la terminal del Visual Studio Code, en la opciones de terminal (al lado del +) escogemos como perfil
	default a GIT BASH o bien se puede abrir Git Bash directamente.

2 -  Ingresamos los siguientes comandos: 

	cd /c/xampp/htdocs/samaguonline2021-2022/ 
	git pull https://Stevarcsa@bitbucket.org/samaguonline/samaguonline2021-2022.git