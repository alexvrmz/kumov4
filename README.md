# NoPixcua Mieke

[![N|Solid](https://entrenamiento.autoshop-easy.com/particular/logo-agencia.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)



[ ] SECCIONES
  [ ] MI ESCRITORIO
    [ ] BOX INDIVIDUOS
      [X] MASCOTAS
      [X] PROVEEDORES
      [X] USUARIOS
  [ ] BITACORA
  [ ] USUARIOS
    [ ] AGREGAR USUARIO
    [ ] EDITAR USUARIO
      [ ] DATOS DE USUARIO
        [X] SUSPENDER
          [ ] MENSAJE DE SUSPENSION EN LOGIN
        [X] APELLIDO PATERNO
        [X] APELLIDO MATERNO
        [X] PRIMER NOMBRE
        [X] SEGUNDO NOMBRE
        [X] CORREO ELECTRONICO
        [X] CONTRASENA
  [ ] CLIENTES
    [ ] AGREGAR CLIENTES
    [ ] VER CLIENTE
    [ ] EDITAR CLIENTE
        #Faltan Selects estado, municipio, pais 
  [ ] MASCOTAS
  [ ] PROVEEDORES
  [ ] MODULOS
    [X] AGREGAR MODULO
    [X] EDITAR MODULO
  [ ] PERMISOS
    [X] AGREGAR PERMISOS
    [X] EDITAR PERMISOS
  [ ] MI CONFIGURACION
    [X] BLOQUEO DE PANTALLA
    [X] DIAS RECORDATORIO DE DOCUMENTOS
  [X] BLOQUEO DE PANTALLA
  [X] MI TEMA
    [X] MODO OSCURO
    [X] BARRA SUPERIOR
    [X] COLOR ENFANSIS
    [X] MENU IZQUIERDO OSCURO
    [X] MENU IZQUIERDO CLARO
    [X] LOGO TIPO
















Tipos de Individuos 
1 usuarios
2 mascotas
3 clientes
4 proveedores

Tipos de Documentos

1 Foto Principal Mascota



NoPixcua Mieke es un sistema desarrollado con la intencion principal de llevar el control de vehículos particulares y de flotillas.
# Pendientes 2021/08/05!
columna importe en documentos de tramite
Agregar Columnas placas y eco (eco no es obligatorio)
En vencimientos poner fecha
en fechas de vencimiento ser obligatorio pero con opcion a desahbilitar
En vista de tramite agregar el historial de tramites y documentos


En servicio fecha de emision (fecha de servicio)
iporte obligatorio
documento variable documento (opcional obligatorio)

recarga de gasolina tomar km feccha y lityros para hacer compareciones y rendimientos




# Actualizaciones!


- V 2021.07.20
 - Se implementa select por tags para elecccion de servicios y marcas en formulario de registro de proveedor.
 - Se agrega campo tipo vehiculo en tabla de marcas
 - SE agrega select tipo de vehiculo en registro de proveedor
 - Se cambia select tags el tipo de vehiculo
 - Se crea tabla en BD para relaciones de proveedor y tipos de vehiculos
 - Se agrega select tags para tipos de marcas en formulario registro proveedores
 - Se crea tabla en BD para relaciones de proveedor y marcas
 - Se agrega select tags para tipos de servicios en formulario registro proveedores
 - Se crea tabla en BD para relaciones de proveedor y servicios
 - Se actualizo el backend en el registro de proveedor para agregar las relaciones

- V 2021.07.19
  - Se crea la tabla proveedores.
  - Se crea Módulo Proveedores
  - Se Agregan Permisos para Módulo Proveedores (Acceso, Agregar, Consular, Editar)
  - Se agrega Módulo Proveedores a Archivo de vistas
  - Se agrega Proveedores a Menú Lateral
  - Se Actualiza tabla de modulos
  - Se crean archivos de Front, backend e idioma para proveedores
  - Se actualiza la funcion bit4kuru para agregar proveedores
  - Se actualiza la funcion bit4kuru en todo el script.
  - Se agregar campo para proveedores en la tabla bin4kuru
  - Se actualiza Front y Backend de Bin4 para agregar registros de (Agregar Proveedor)
  - Se actualiza Front y Backend de Escritorio para agregar card de Proveedores
  - Se crea el primer proveedor con exito
  - Se crea archivo front para vista de Proveedor
  - Se crea funcion para consulta de estado por id
  - Se crea funcion para consulta de municipio por id
  - Se crea front y back para editar proveedor
  - Se avanza con las validaciones de formualarios de proveedores

- V 2021.07.16
  - Se descarga fuente de google y se genera archivo css para las fuentes (Se elimina dependencia de google)
  - Se actualizan css de iconos
  - Se retiran enlaces a google y iconos anteriores y se agregan los nuevos en cabecera, login y registro
  - Se actualiza la clase en todos los iconos del sistema fad a fa-doutone
  - En vista de ficha se retira el simbolo + del tiempo de vencimientos de las cards
  - Se crea la tabla 1Bin4kuru para llevar la bitacora para administradores
  - Se crea el archivo de i_Bin4kuru.php para los textos de la bitacora
  - Se crea el front para bitacora, linea de tiempo y tabla
  - Se crea la funcion bin4kuru para registrar movimientos de usuarios.
  - Se avanza con la colocacion hasta automoviles (en orden del menu) quedando pendientes servicios, documentos y estaus.


- V 2021.07.15
  - Se agregan ventanas modales a documentos para consultar y agregar nuevos
  - Se fija la barra lateral, se agrega scroll interno, se añade div fijo en la parte inferior para botenes de configuracion y salir.
  - Se fija la barra superioir y se retira icono de configuracion
  - Se reestructura la vista y front de documentos, se retira codigo individual de poliza, t de circulacion, etc.
  - Se termina (parcialmente) la parte de Documentos administrables.
  - Se desarrolla la parte de notificacion de fecha de vencimiento con variable de configuracion, cards en color cyan (servicios y documentos).
  - Se desarrolla la parte de notificacion de fecha de vencimiento con variable personalizada, cards en color purple (servicios y documentos).
  - Se agregan espan en card se servicio y documentos para notificar el numero de dias.
  



- V 2021.07.14
  - Se termina la parte de Edicion de servicios, se puede reemplazar el documento o se puede agregar si no se subio cuando se creo
  - Se configuran permisos de Servicios, se agregan a tabla de permisos
  - Se crea tabla para hacer administrables los tipos de documentos
  - Se avanza con la interfas del modulo documentos, se pueden listar y agregar, falta la edición.
  





- V 2021.07.07
  - En Ficha de Vehiculo en los bloques de Documentos, se agregan alertas de colores: amarillo (Alerta de los dias en configuración)
    rojo : (Alerta a la mitad de los dias en configuración o vencido)
  - Se corrigen errores que no permitian agregar Tarjeta de Circulación y Póliza de Seguros.
  - Correción de error que no permitia actualizar datos de Automovil
  - En la tabla de documentos se agrega el cambio de placas
  - Se modifican ventanas modales de servicios para mostrar la informacion cuando ya esta capturada
  - Se comienza con creacion de vista de alertas de vencimiento de documentos y servicios 



- V 2021.06.14
  - En escritorio con roles administrativos se reabilita la alerta de documentos por vencer
  - En BD en usuarios se agrega campo para la configuracion de dias de documentos por vencer.
  - En vista de configuracion de sistema se agrega compo para recordatorio de dias de documentos por vencer
  - Se agrega campo de dias de docs x vencer al array para salvar en bd, en back de configuracion.
  


- V 2021.06.11
  - Se aplican clases de validacion a los objetos del formulario de editar auto.
  - Se verifica el funcionamiento correcto de las validaciones en editar auto.
  - En Escritorio con rol de admin, consulta y sistema se agrega tabla con los autos asignados a operadores.
  - Se agregan vinculos a usuario flota empresa etc dentro de la tabla.



- V 2021.06.10
  - En editar auto se corrigen bugs encontrados al procesar los datos del formulario.
  - Se agregan validaciones en back de los datos recibidos de editar auto.
  - Se reestructura el back para procesar la edicion de los datos.
  - Al procesar los datos del formulario de editar auto Se cambia consulta a documentos con tipo 13 y id de auto para obtener y compara las
    ultimas placas agregadas, si cambian agrega el nuevo documento con las placas nuevas.
  - En tablas de autos en empresas m2 y autos se actualiza boton de c/operador para seleccionar de los operadores disponibles
  - En tablas de autos en empresas m2 y autos se actualiza boton de Disponible, si el auto esta vinculado lo desvincula, actualiza
    estado de auto y lo quita de la relacion de usuario.
  - En tablas de autos, en los botones de estado en C/Operador redirige al formulario para vincular con operador.
  - En tablas de autos se modifican por completo todos los botones y acciones para liberar o signar auto.
  - En vista asignar auto con variable de auto se modifican las consultas para el select de usuarios muestre solo los dispobibles.
  - Se actualiza lista de permisos para operador
  - Se termina ficha de vehiculo en escritorio para rol4 operadores, datos basicos de auto y condicion para mostrar cuando no hay auto
    asignado
  - Se comienza con la parte front de documentos en escritorio para rol4 (Ver poliza, ver t de circulacion, y verficacion.)



- V 2021.06.09
  - Se crean archivos para la parte de asignar automoviles
  - En datos de usuario se agrega seccion para mostrar el auto asignado.
  - En vista de datos de usuario se agrega boton para asignar auto
  - En vista de ficha de auto se agrega tabla para mostrar datos de usuario asignado.
  - En vista de Ficha se agregan recuadros para mostrar el estado del auto cuando no esta asignado
  - Se pueden Asignar los autos desde vista de datos de usuario, pendiente desde las tablas de autos en diversas partes.
  - Desde datos de usuario se puede desvincular los autos
  - EN ficha de auto se pueden desvincular usuarios desde boton el tabla de usuario asignado


- V 2021.06.08
  - En vista de usuarios se agrega condicion para mostrar alerta de 0 usuarios
  - En formulario agregar usuario se agregan campos empresa y flota
  - Se crea funcion para generar contraseñas seguras, tiene paramatros configurables.
  - Se agrega contador de usuarios en vista escritorio.
  - Se completa el registro de usuario con validacion en formulario, seleccion de rol (pendiente array de permisos a otorgar), 
    al registrar al usuario de crea la relacion de usuario-empresa-flota
  - Se agrega variable en app para el rol del usuario
  - Se agrega condicion en escritorio para mostrar dependiendo el rol del usuario.
  - Se agregan permisos al array de administrador


- V 2021.06.07
  - Se agregan permisos al swish de permisos iniciales y roles (accesso mod usuarios y agregar usuarios)
  - En back de usuarios se avanza con la consulta de la lista de usuarios.
  - Se agregan textos de Empresas back a su archivo de idioma de bitacora
  - Se corrigen bugs abajo detallados
  - Se cambian validaciones de Jquery por PHP
  - Se crean 9 funciones para validaciones de campor de formularios de Empresas y Autos
  - Más detalles verificar Git.


- V 2021.06.03
  - Se aplican validaciones en el registro de empresas
  - Se aplican validaciones en el registro de automoviles
  - Se corrigen y optimiza codigo de back en dif areas, consultar git para mas detalles.


- V 2021.06.03
  - Se termina registro de usuarios en vista y back, se aplican validaciones a el formulario.
  - Se verificacion permisos para formar los roles, mientras esto se realizo, borre empresas, usuarios, flotas, etc y encontre varios 
    errores, se corrigieron varios archivos, revisas git para mas detalles.
  - Queda pendiente agregar empresa con variable de flota en empresas m2


- V 2021.06.02
  - Se crea la tabla relaciones Usuario->Empresa->Flota->Auto
  - En back de usuarios, se crean condiciones para cambiar la consulta si se hace con variable de flota o de empresa.
  - Se crea funcion para consultar datos de operadores, ya sea por empresa o por flota
  - Se crea funcion para consultar numero de operadores, ya sea por empresa o por flota
  - Se agrega tabla de usuarios en vista de flotas con variable de empresa.
  - Se agrega tabla de usuarios en vista de autos con variable de flota
  - se agrega columna numero de operadores en tabla de vista empresas
  - Se agrega columna numero de operadores en tabla de vista flotas
  - Se crea funcion para consultar numero de flotas
  - En los archivos de vistas de empresas de reemplaza la variable de numero de flotas por la nueva funcion.
  - Se crea funcion para consultar datos de Marcas.
  - Se elimina la consulta de marcas de back de autos (para select de nuevo auto).
  - En vista de autos se reemplaza la variable por la funcion de consultar marcas en el select de nuevo registro.
  - Se crea funcion para consulta de datos de empresa
  - Se crea consulta para consulta de numero de empresas
  - En back de empresas en consulta se reemplaza toda la consulta de empresas y se reemplaza por la nueva funcion.
  - Se crea funcion para consulta de estados.
  - En back de empresas se elimnia la consulta de estados para el formulario
  - En vista de empresas se reemplaza array de foreach de estados del formulario de registro por la nueva funcion.
  - Se crea funcion para consultar datos de municipios.
  - En back de empresas se reemplaza la consulta de municipios por la nueva funcion.
  - Se crea funcion para consultar numero de Autos.
  - En vista autos se agrega condicion para mostrar alerta cuando hay variable de flota y no hay operadores
  - Se agrega vista para registro de usuarios, se avanza en el formulario y en el back de usuarios


- V 2021.06.01
  - Visualizacion de Modo 1 terminado
  - Se termina visualizaciones del modo 2
  - Se corrige error al crear auto que no guardaba el id de flota
  - Al crear vehiculo se agregan las placas como documento relacionado, en back de vista de crea condición para que no haga copia del tipo de
    documento 13, ya que son las placas y no tienen archivo vinculado
  - Se crea archivos para vista de version (v3r) para mostrar al usuario el resumen de cambios y nuevas funciones.
  - Se corrige error en diseño en ficha de auto, el texto de placa se desajustaba.
  - Al editar auto, si se cambian las placas, se genera nuevo documento relacionado.


- V 2021.05.31
  - Se modifican los botones de cambiar estado en vista de vehiculos en modo tabla
  - Se crea el permiso 700-014 para poder editar el estado del automovil.
  - se agrega span en la barra superior para indicar el modo de relaciones activo.
  - Se agrega en vista de empresas el boton de cambiar vista y se agrega tabla.
  - se Agerga en vista de flotas eñ boton cambiar vista
  - El modo 1 terminado al 90


- V 2021.05.28
  - En DB en usuarios se agrega campo config_vista para almacenar la configuracion para ver datos en cards o listas
  - En vista de se agrega url c a back donde se actualiza el modo de vista de autos
  - En back de autos se agregan condicion para la actualizacion de visualizacion
  - Se modifican varios archivos de datatables js para la lista de autos (algunos cambian de js a php estan en footer)
  - En BD de autos se agrega campo xV3hiEDOXu7l0s para el estado del auto
    - ( 1 => 'Disponible',
        2 => 'En Taller',
        3 => 'Fuera de Servicio',
        4 => 'Asignado a Operador'
      )
  - En back de autos de agrega condicion para la actualizacion de estado.
  - En vista de autos en la lista se agrega buscador, paginador, botones para exportar.


- V 2021.05.27
  - en vista de flotillas con id de empresa se coloca condicion en select de agregar flotilla para seleccionar la correspondiente al id
  - En vista vehiculos en agregar se modifica el fomulario para incluir Empresa y flota, son opcionales, flota depende de empresa y consulta las relaciones
  - Tambien se modifica la card, para mostrar correctamente flota y empresa.
  - En configuracion se agregan 2 botones para elegir el modo en el que trabajaran las relaciones en el sistema, existen 2 modos
  - En back de configuracion se agrega el if correspondiente para actualizar la variable de modo relaciones
  - Se agrega campo para el modo de relaciones en bd de usuarios modo 1 y 2
  - Se crean archivos alternos para el modo 2 (m2) de flotillas y empresas
  - En vista en las secciondes de flotas y empresas se agrega condicion para cargar archivos front del modo elegido
  - En back de empresas se modifica para obtener las consultas correspondientes al modo 2
  - EN back de flotas se modifica para obtener las consultas correspondientes al modo 2
  - En vista de autos se agregan botones aun no funcionales para cambiar la vista de vehiculos

- V 2021.05.26
  - Se crean archivos front y back para la parte de editar flotilla
  - En editar flotilla se agrega botones con cada empresa relacionada a esa flota, de aqui se pueden eliminar las relaciones
    la empresa "principal es con la que se crea la flota, se puede editar.
  - En en front de flotas, se edita la card para mostrar hasta 3 empresas relacionadas, y se mostrara de color diferente.
  - Se agrega nueva clase css para recortar texto cuando no cabe en su contenedor y colocar puntos suspensivos
  - Se vuelve a editar la card de flotas para mover las empresas a la parte inferior, ademas de agrega clase para recorta texto
  - En Mis flotas, se agrega contenedor colapsado para la informacion de la empresa, cuando la variable de empresa id llega con dato
  - En la base de datos en empresas el campo colonia se cambia de int a text, se retira bd de colonia (muy incompleta y pesada), se cambia por input
  - En vista de flotas con variable de empresa se mueve el contenedor de datos de empresa a un costado con col-3 y contenedor de cards col-9 y cada card a 6,
    se retira la clase colapsable
  - Se avanza con los datos de empresa en vista de flotas con variable de empresa

- V 2021.05.25
  - En vista y backf de empresas y flotillas se cambias las consultas para integrar las db de relaciones empresas-flotillas y 
    mostrar correctamente las relaciones al ingresar a detalle de empresa
  - Se ajusta el diseño de la card de flotillas para mostrar mas empresas en caso de haberlas en la tabla de relaciones.
  - Se corrige variable que mostraba que no habia empresas al momento de agregar flotilla
  - Se reubica consulta para las empresas del selector en agregar flotillas ya que dejo de funcionar al cambiar las consultas de relaciones
  - Se modifica la funcion ejecutadb para que regrese el id que inserto
  - Al crear flota se agrega funcion ejecuta con la tabla de relaciones para crear la ralacion, el id de flota se obtiene de la funcion ejecuta modificada



- V 2021.05.24
  - Se corrige bug que no guardaba la fecha de la poliza en ficha de vehiculo, era el formato de la fecha entre el script de selector de calendario
    y el formato de la fecha en php.
  - Se crea el archivo cambios db para emparejar cambios de desarrollo -> productivo (ya no se comparte BD).
  - Se crea funcion para convertir las imagenes a jpeg y para comprimirlas
  - Se corrige bug en autos que no mostraba la etiqueta de color
  - Se inicia con relacion de empresas y flotas
  



- V 2021.05.21
  - Se actualizan los placeholder de registro de vehiculo.
  - Se agregan 2 campos en bd en la tabla de documentos: ID usuario (para los docs de usuarios) y Activo (estatus del documento).
  - En ficha en la consulta de documentos se agrega el AND para el activo de documento
  - Se agregan mensajes de bitacora al agregar automovil
  - Se termina de reemplazar la palabra vehiculo x auto en todo el script
  - Se agrega input de fecha en modal para agregar tarjeta de circulacion.
  - Se agrega permiso 700-013 y 700-014 para gregar y ver documentos
  - En ficha se añade ventana modal para agregar documentos
  - En archivo de idioma de ficha se agrega array con tipos de documentos
  - en ficha la alerta de documentos por vencer y la seccion docuemtnos trabajan igual para el tipo de documento.
  - Se pueden subir documentos PDF, WEBP, PNG, JPG, JPEG, DOC, DOCX
  - Se encripta los docuemtos en api autos
  - Documentos x vencer en Escritorio (todos los autos por relacion (usuario->empresa->flotillas->autos)).
  - Archivo front de escritorio, 404, config, empresas ya tienen todos los textos en variables.
  - Se monta productivo en cdr-e.com
  - Se utilizan base de datos separadas (desarrollo -> productivo).


- V 2021.05.20
  - Se rediseña el login y se agrega mensaje de error de login
  - La vista de detalle de empresa se redirige a vista de flotas con la variable de id de emrpesa.
  - La vista de detalle de flota se redirige a vista de autos con la variable de id de flota.
  - La vista de empresas se cambio de lista a recuadros.
  - Se rediseñan las cards de empresas y flotas.
  - En ficha de automovil se edita card kilometraje, para cuando no hay datos.
  - Se agrega card para agregar poliza de seguros, detecta si se subio o no, permisos agregados.
  - Se agregan las ventanas modales necesarias para ver, agregar: kilometros: tarjeta de circulacion y poliza de seguros.
  - En ficha de automoviles se mueve el recuadro de documentos bajo las cards y es funcional (faltan tipos de documentos.)
  - Se agrega en ficha de automovil alerta de vigencia de documentos a 30 días.

- V 2021.05.19
  - Se declara timezone en archivo de conexion para corregir la hora en que se guardaban los datos en mysql.
  - Se agrega funcion para obtener la url completa, se toma dato en archivo de titulo para redirigir a la url previa al desbloquear.
  - Al cargar lista de usuarios, se quedaba el valor anteroir en la variable de nombre2, se hace unset a las variables despues del array_push
  - Se agrega icono en barra superior para acceso a configuracion de cuenta
  - Se habilita barra lateral derecha para configuracion de temas
  - archivo demo.js se adapta a c0nf.php para maejar la configuracion de los colores, funciona con jQuery
  - se cambian variables de session por variables de consulta para los colores de la plataforma
  - Las alertas para los cambio en tema no llegan por session, son en jquery
  - Modo Oscuro activado
  - Se agrega variable en la clase para la linea (borde superior) de los contenedores para cambiar deacuerdo al color de Énfasis
  - Se agrega el modulo configuracion
    - Se agrega campo para tiempo de bloqueo (esta lista para agregar mas campos) (la variable de tiempo se ocupa en el script al pie del sistema (inactividad))


- V 2021.05.18
  - Se crea Modulo Flotas (archivos php necesarios)
  - Se crea base de datos flota
  - Se agrega borde azul a las cards correspndientes en todo el script
  - En modulo flotas se pueden agregar flotas
  - Se revisan permisos con usuario agustin, al corriente de permisos hasta lo actual
  - Kilometraje se puede actualizar, editar, agregar y borrar (permisos listos)



- V 2021.05.17
  - Se reemplaza la palabra Vehículo por Automovil para expanción de Vehículos en la plataforma (Camiones, Motocicletas, ect...)
  - Se pueden editar marcar y subir imagen.
    - permisos 777 carperta marcas
  - Se pueden editar modelos y subir imagen.
    - permisos 777 carperta modelos
  - Se crea carpeta tmp con permisos 777
  - Se agrega modal para agregar tarjeta de circulación en ficha de vehiculo.
    - Se muestra imagen copiada a carpera tmp/'carperta id usuario'
    - Los archivos en tmp/'carperta id usuario' se eliminan al cerrar session
    - Permiso para ver tarjeta de circulacion
  - Se agrega tarjeta en ficha de vehiculo para ver y actualizar kilometraje
  

- V 2021.05.14
  - Se crea Módulo Empresas
    - Se crean permisos
    - Archivos de Idioma, Backend, Front
    - Se crea base de datos Estados, Municipios, Colonias
    - Registro de Nueva Empresa
    - Lista de Empresas
    - verificacion de registro de empresa por RFC
  - En Dash se agregan dos recuadros para ver empresas y autos registrados.

- V (anteriores consultar git)


# Bugs!

x Al agregar nuevo automovil no se guarda numero de flota ni numero de usuario 
x Al agregar permiso a usuario, el recuadro se queda con la variable de cache en la lista de modulos. 
x Al desbloqueo de sesion regresar a la url previa al bloqueo de pantalla 
x En la lista de usuarios, todos aparecen con apellido cruz 
x En ficha de auto no parece la etiqueta de color (2021/05/19)(2021/05/24)
x En ficha de auto al agregar la poliza no se guarda la fecha de vencimiento (2021/05/21)(2021/05/24).
x En Mi escritorio se muestra alerta de docs vencidos cuando no hay docuemntos (2021/06/03)(2021/06/03)
x Bug en lista flotas modo 2, flota no tiene empresa y muestra 1 posible variable de session, (se corrige con la condicion de la variable empresa) (2021/06/07)(2021/06/07)
x En Vista flotilla con modo 2 con variable de flota, cuando la empresa no tiene flota al ver detalle de flota muestra 
  "Falló listado de relacionesSELECT * FROM r3l3mpfl00 WHERE r3F3mP00 = " (se corrige con la condicion de la variable empresa)(2021/06/07) (2021/06/07) 
x En editar auto, sin cambiar las placas vuelve a generar documento (2021/06/10)(2021/06/10)
- En vista de flotillas con variable de empresa, cuando una empresa no tiene directamente la flota no aparecen las ligadas con la tabla (2021/06/10)
x Se encuentran diversos errores en la edicion de auto (2021/06/10)(2021/06/10)


# Detalles!

x Revisar modal agregar Flota cuando no hay empresa esta mal oculto
x Agregar borde azul a todas los recuadros
- En Permisos Asignados al Usuario:
  - Ajustar Tamaño de Acciones y recuadro de la tabla a col-8
  - tamaño tabla al 100 de width de recuadro
- Verificar permisos en todos los modulos
- Faltan agregar variables de Mensajes de Errores para idiomas.
x Agregar el tiempo de bloqueo de pantalla a la BD
x Permisos en menu OK
- verificar modulo activo en menu y acceso por url
- limpar archivos de codigo basura.
- en editar modelos, falta la lista para cambiar de marca.

# Pendientes!

x Editar Flotas, agregar campo para agregar otras empresas (2021/05/25)(2021/05/26)
- Encriptar datos de kilometraje
  x seccion detalles kilometraje
x Falta encriptar datos de tarjeta de circulacion (xxxxx)(2021/05/20)
x Editar Marcas TRUE
  x Carga de Logos TRUE
x Editar Modelos TRUE
  x Carga imagenes de modelos TRUE
x Carga de Tarjeta de Circulación
- Editar Empresas
- Tipos (subtipos) de vehiculos administrables
- Editar Perfil
x Editar Configuraciones
x Administracion de Flotas
- Tipos de usuarios y roles
- Revisar permisos de todos las ventanas modales
- Reportar incidencias con vehiculo (2021/05/20)
- Gasto Combustible(2021/05/20)
- Gasto Mantenimiento(2021/05/20)
- Proximos eventos (Recordatorios / renovaciones )(2021/05/20)
- Estatus de Vehiculos (ocupados, libres, taller, fuera de servicio, etc)(2021/05/20)
- Poner km en ficha de vehiculo(2021/05/20)
- Poner estatus en ficha(2021/05/20)
x Seguro de vehiculo(2021/05/20)
- Bienvenida(2021/05/20)
- Modificar pnatalla de bloqueo como login(2021/05/20)
- Registro de Cambios(2021/05/20)
- Botones actualizar poliza y tarjeta de circulación (2021/05/21)
- Hacer las cargas de documentos una funcion general para carga de archivos (2021/05/24).
- Falta cambiar en ficha la vista de los documentos dependiendo el tipo de archivo. (2021/05/24)


# Permisos Revisados!

- Permisos correctos en Marcas
- Permisos Correctos en Modelos
- Permisos Correctos en Atuomoviles

# Tipos de Documentos ID
  '1' => 'Tarjeta de Circulación',
  '2' => 'Póliza de Seguro',
  '10' => 'PDF'
  '100' => 'Otro Tipo'



# Proximos avances (A. Diaz)
  - Registro de Verificación
  x Cambio de Placas
  - Control de Operadores
  - Relacion Autos - Operadores
  - OCR
  - Control de Proveedores