# Implementación de la estructura de datos Cola (Queue) en PHP

## 1. DESCRIPCIÓN

Este proyecto consiste en la implementación de la estructura de datos Cola (Queue) en PHP. La cola sigue el principio **FIFO (First In, First Out)**, que busca que el primer elemento en ingresar sea el primero en salir.

El desarrollo se realizó en el lenguaje de programación PHP, utilizando el paradigma de programación POO. La estructura se basa en la composición de nodos enlazados dinámicamente, permitiendo diferentes operaciones pero como principales la inserción y eliminación.

Se implementan las siguientes funcionalidades:

- **Inserción de elementos (_push):** permite agregar un elemento al final de la cola.
- **Eliminación de elementos (_pull):** permite extraer el primer elemento de la cola.
- **Consulta del elemento al frente (_peek):** permite visualizar el primer elemento sin eliminarlo.
- **Verificación de si la cola está vacía (_isEmpty):** permite comprobar si la cola contiene elementos.
- **Cálculo del tamaño (_size):** permite obtener la cantidad de elementos almacenados en la cola.

## 2. REQUERIMIENTOS DE SOFTWARE

Para la ejecución de este proyecto se requiere:
- Instalar PHP versión 7 o superior.
- En variables del sistema, añadir la ruta de instalación de PHP al PATH.
- Tener instalado alguno de los IDEs que permiten el uso de PHP (VSC, Apache NetBeans y Eclipse); en el caso de VSC se deben instalar extensiones como:
* PHP Extensions Pack
* PHP Debug
* PHP Getters y Setters
* PHP Intelephense
* PHP Server 
* Code Runner

## 3. EJECUCIÓN DE LA APLICACIÓN DE PRUEBA

Para ejecutar la aplicación de prueba, seguir los siguientes pasos:

- Ubicarse en la carpeta raíz del proyecto.
- Acceder a la carpeta del proyecto:

`cd project\src\runner`

- Ejecutar el archivo principal con el siguiente comando:

`php main.php`

- También es posible ejecutar el programa desde Visual Studio Code, utilizando el botón de ejecución (Run Code) ubicado en la parte superior derecha del editor.
- El programa ejecutará una serie de pruebas sobre la estructura de datos, mostrando en consola el funcionamiento de cada uno de los métodos implementados.
