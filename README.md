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
    [X] AGREGAR CLIENTES
    [X] VER CLIENTE
    [X] EDITAR CLIENTE
  [ ] MASCOTAS
    [X] AGREGAR MASCOTA
    [X] VER MASCOTA
    [X] EDITAR MASCOTA
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








# Pendientes 2022/03/11!
- Cambiar en el formulario de ficha de Mascota el select de Cliente al igual que en el formulario de Agregar mascota
- Ordenar la lista de Razas por orden Alfabetico
- Al agregar mascota no se guarda el ID de cliente
+ Al agregar permiso a usuario no se abre el formulario con la lista de permisos del modulo seleccionado
- Iniciar el modulo de administracion de razas
- Revisar las notificaciones en todas las areas
- Al agregar permiso a usuario la lista de permisos despues de seleccionar el modulo que solo cargue los permisos que el usuario no tiene
- En lista de persmisos asignados agregar columna de modulo de persmiso
- EN menu revisar o agregar validacion de modulo activo

Tipos de Individuos 
1 usuarios
2 mascotas
3 clientes
4 proveedores

Tipos de Documentos

1 Foto Principal Mascota

Datos Consulta/Cita
  1 Fecha
  2 Proxima Fecha
  3 mascotaID x
  4 clienteID x
  5 Peso x
  6 Talla x
  7 Temperatura x
  8 Diagnostico x
  9 TratamientosID x
  10 estudiosID x
  11 Observaciones x
  12 Usuario

Se presento error al guardar mascota al insertar y limpiar una de las variables


# Actualizaciones!
- V 2022.03.24
  - Se crea la tabla y columnas para la nueva bitacora
  - Se desarrola la funcion binakuru para la bitacora
  - Se establecen tipos de afectados
  - Se establecen las acciones para bitacora
  - Se agrega la funcion a:
    - Agregar Usuario
    - Modificar Usuario
    - Agregar/Activar permisos de usuario
    - Desactivar permisos de usuario
    - Agregar Mascota
    - Modificar Mascota
    - Agregar Cliente
    - Modificar Cliente
    - Agregar Especie
    - Modificar Especie
    - Agregar Raza
    - Editar Raza
    - Ingreso al sistema
    - Salida del sistema


- V 2022.03.14
  - Se termina el modulo de administracion de Especies.
  - Modulo Razas
    - se crea el modulo razas
    - Se crean los permisos para el modulo razas
  - Se termina el modulo de administracion de Razas.
  - Se establece y crea tabla y columnas para Consultas/Citas
  - Se inicia la creacion del modulo citas
  - Se actualizan permisos 700 de vehiculos a consutas
  

- V 2022.03.12
  - Se agregan 282 razas de Perros
  - Se agregan 4 razas de Hamsters
  - Se agregan 10 razas de Peces
  - Se agregan pestanas en ficha de mascota para mostrar Resumen, Citas, Vacunas, Esteticas y otros
  - Se Inicia el Modulo de Administracion de Especies
    - Se crea modulo Especies
    - Se crean permisos para modulo especies
    - Se cambian los nombres de la tabla y columnas de Permisos Otrogados en codigo y mysql

- V 2022.03.11
  - Se agregan 63 razas de Gatos
  - Se termina en el registro y edicion de cliente el select o input de Municipio dependiendo el Pais
