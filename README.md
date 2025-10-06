<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# 🧪 Laboratorio #2: CRUD Rápido con Laravel y Vite

**Autor:** José Bustamante 8-1011-1717                   
**Correo** jose.bustamante2@utp.ac.pa                      
**Fecha:** 5 de octubre de 20205            
**Curso:** Ingenieria Web 

## 📝 Descripción del Proyecto
Este repositorio contiene la implementación de un **CRUD** (Crear, Leer, Actualizar, Eliminar) básico para la gestión de **Productos**.  
Fue desarrollado con el framework **Laravel** y utiliza **Vite** para la compilación y el manejo de assets de frontend (CSS/JavaScript).

El principal desafío de este laboratorio fue configurar correctamente el entorno local, integrar las herramientas de frontend de Laravel (Vite, Laravel UI) y resolver los errores comunes que surgen al conectar la aplicación con la base de datos **MySQL**.

---

## ⚙️ Requisitos del Sistema
Para ejecutar este proyecto de manera local, necesitas tener instalado el siguiente software:

- **Servidor Web Local**: WAMP o XAMPP (Necesario para ejecutar PHP y MySQL)
- **PHP**: Versión 8.1 o superior
- **Composer**: Gestor de paquetes de PHP
- **Node.js y npm**: Entorno de ejecución y gestor de paquetes de JavaScript
- **Git**: Sistema de control de versiones

---

## ✨ Instalación y Ejecución
Sigue estos pasos para dejar el proyecto operativo en tu entorno local:

### 1️⃣ Clonar el Repositorio
```bash
git clone https://github.com/flopero29/CRUD.git
cd CRUD
```
### 2️⃣ Instalar Dependencias

Dependencias de PHP (Laravel):
``` bash
composer install
```
Dependencias de JavaScript (Vite, Laravel UI, Bootstrap, etc.):
``` bash
npm install
```

### 3️⃣ Configurar el Entorno
```bash
cp .env.example .env
php artisan key:generate
```
### 4️⃣ Base de Datos y Migraciones

Crear la base de datos en phpMyAdmin con el nombre crud_rapido.

Revisar que .env tenga las credenciales correctas de MySQL.

Ejecutar migraciones:
```bash
php artisan migrate
```
### 5️⃣ Iniciar Servidores

Terminal 1 (Backend - Laravel):
```bash
php artisan serve

Terminal 2 (Frontend - Vite para Assets):
```bash
npm run dev
```
### 6️⃣ Acceder a la Aplicación

Abre tu navegador y ve a:
```bash
http://127.0.0.1:8000/products
```

Capturas de éxito en carpeta resources\captures

### 🐛 Errores Frecuentes y Soluciones Aplicadas
| Error Encontrado                     | Causa Principal                                                                 | Solución                                                                                   |
|-------------------------------------|-------------------------------------------------------------------------------|-------------------------------------------------------------------------------------------|
| 'vite' is not recognized...          | Las dependencias de Node no estaban instaladas o el sistema no encontraba el ejecutable de Vite. | Ejecutar `npm install` para asegurar que Vite esté disponible en `node_modules`.          |
| No application encryption key has been specified. | El archivo `.env` existía, pero faltaba la clave de seguridad para la encriptación. | Se generó la clave automáticamente con: `php artisan key:generate`.                      |
| View [layouts.app] not found.        | Las vistas del CRUD (ej. `products/index.blade.php`) intentaban usar una plantilla maestra (`layouts.app`) que no estaba creada. | Se creó manualmente `resources/views/layouts/app.blade.php` como plantilla principal.     |
| Página Sin Estilos (CSS)             | La aplicación se veía como texto plano porque no se cargaba el CSS de Bootstrap. | Se aseguró la instalación de `laravel/ui` y que el servidor de Vite (`npm run dev`) estuviera activo para compilar `app.scss` a CSS. |
| Server Error (Error 500)             | Fallo de conexión inicial a la base de datos o migraciones pendientes.        | Se creó la base de datos en phpMyAdmin y se ejecutó `php artisan migrate`.                |

