# REQUISITOS DE AUTOMATIZACIÓN DE PROCESO DE SERVICIO SOCIAL
*Version 0.2 - 27 de Mayo de 2015*

### EQUIPO
ARMENTA ALEJANDRO
BURGOS JARSON
FELIX EDUARDO
GAXIOLA CARLOS
MONTOYA PABLO
MELGAR CHRISTOPHER
ORTIZ MANUEL
QUEZADA IRWIN
ZAÑUDO TOMAS

### Prefacio
Este es el documento de requisitos del proyecto de Automatización de Proceso de Servicio Social el cual tiene como propósito agilizar el proceso del servicio social mediante las entregas y revisiones a través de una página web.

### Alcance del  Documento 
El documento de requisitos es la base de todo el desarrollo futuro de la Automatización de Proceso de Servicio Social.
Describe los siguientes aspectos del sistema, propósito, contexto, requisitos funcionales, requisitos de pruebas, requisitos de ambiente, arquitectura del sistema y riesgos del proyecto. 
### Lectores
Este documento está dirigido principalmente a los desarrolladores del proyecto, pero es de interés de todos los interesados en el mismo.

## Introducción 

El presente trabajo surge de la necesidad de agilizar el **Proceso de Servicio Social** mediante la creación de una página web la cual nos permita **Automatizar dicho Proceso** para así lograr manejar todos los tramites del servicio social a través de internet sin la necesidad de tener que acudir a la institución. Para ello se toma en cuenta muchos factores, entre ellos está el levantamiento de requisitos, se llevan a cabo los casos de usos, se mencionan los actores y sus escenarios, entre otros elementos muy importantes que conllevan la elaboración de este gran proyecto. 

### Propósito

El propósito principal de este proyecto es la creación de una página web encargada de la **Automatización de Proceso de Servicio Social la cual le facilite al alumno y al personal académico realizar dicho proceso.  

### Alcance 

El alcance del proyecto se enfoca en la necesidad tanto del alumno como  de la institución y gracias a ella se agilizara el proceso para ambas partes ya que todo se manejara en línea con lo que se lograran atender más alumnos a la vez, será de gran ayuda ya que será una manera más fácil de tramitar la documentación de manera más rápida, sencilla y segura.

### Contexto 

El programa que se desarrolla se está elaborando en laravel que será nuestro marco de trabajo se utilizara HTML, CSS, como también un gestor de base de datos donde se guardara la información correspondiente.

### Referencias 

• Chuck Musciano & Bill Kennedy, Html & Xhtml, 2009

• Javier Eguiluz, Introducción a Css, 2008

• Javier Eguiluz, Css avanzado, 2009

• Javier Eguiluz, Introducción a Javascript, 2008

• [http://laravel.com/docs/5.0](http://laravel.com/docs/5.0)


## Requisitos del Sistema

### Requisitos Funcionales

RF1. Los usuarios llevaran a cabo un registro para poder acceder a la página web.

RF2. Al hacer login la página web deberá identificar si es Alumno o Personal Administrativo para mostrar la interfaz adecuada.

RF3. El alumno será capaz de dar de alta su documentación y verificar cual ya ha sido revisado.

RF4. El personal administrativo será capaz de revisar la documentación del alumnado, dejar comentarios y publicar noticias. 

RF5. Los usuarios podrán descargar archivos necesarios para su documentación

RF6. El personal administrativo podrá subir y descargar documentos.

### Requisitos no Funcionales

El Sistema propuesto será navegado por los usuarios de manera rápida, debido su estructura sencilla e intuitiva

El sistema debe ser rápido a la hora de procesar la información y dar respuesta a las peticiones de los usuarios.

El sistema debe garantizar el control en el acceso, utilizando la autentificación de los usuarios para la administración del mismo.

## Actores
```
Nombre.- Alumno
Descripción.-Es la persona la cual realiza la petición de ser registrado en el sistema para poder obtener el servicio y realizar sus trámites.
Roles.-Este se dirige a la página, introduce su número de control y tiene acceso a los servicios de esta aplicación.
```
```
Nombre.-Personal administrativo
Descripción.-Es la persona encargada que administra la aplicación y da permisos al usuario.
Roles.-Este da permiso al usuario, registra el número de control en una base de datos y brinda los servicios sugeridos.
```
```
Nombre.-La institución
Descripción.-Es la empresa en la cual se emplea esta aplicación.
Roles.-Es la empresa en la cual se va usar la aplicación.
```

### Casos de uso

