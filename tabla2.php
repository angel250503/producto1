<!DOCTYPE html>
<html>
<head>
    <title>Comparación de Tipos de Aplicaciones</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Comparación de Tipos de Aplicaciones</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tipo de Aplicación</th>
                    <th>Definición</th>
                    <th>Características</th>
                    <th>Ventajas</th>
                    <th>Desventajas</th>
                    <th>Herramientas de Desarrollo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Aplicación Web</td>
                    <td>Una aplicación accesible a través de un navegador web sin necesidad de instalación en el dispositivo del usuario.</td>
                    <td>- Accesible desde cualquier navegador y dispositivo.<br>- No requiere instalación.<br>- Actualización sencilla en el servidor.</td>
                    <td>- Amplio alcance.<br>- No hay barreras de instalación.</td>
                    <td>- Menos rendimiento que las nativas.<br>- Limitado acceso a hardware.</td>
                    <td>HTML, CSS, JavaScript y una variedad de frameworks y bibliotecas.</td>
                </tr>
                <tr>
                    <td>Aplicación Web SOA</td>
                    <td>Una aplicación web que se basa en arquitectura orientada a servicios (SOA) para acceder a múltiples servicios externos.</td>
                    <td>- Integración con múltiples servicios.<br>- Escalabilidad.<br>- Flexibilidad en la composición de servicios.</td>
                    <td>- Reutilización de servicios.<br>- Escalabilidad.</td>
                    <td>- Mayor complejidad de desarrollo y mantenimiento.</td>
                    <td>Tecnologías web estándar y herramientas de integración de servicios (por ejemplo, RESTful APIs, SOAP, GraphQL).</td>
                </tr>
                <tr>
                    <td>Aplicación Móvil Nativa</td>
                    <td>Una aplicación diseñada específicamente para una plataforma móvil en particular (iOS, Android, etc.) y escrita en el lenguaje nativo de esa plataforma.</td>
                    <td>- Alto rendimiento.<br>- Acceso completo al hardware.<br>- Interfaz de usuario nativa.</td>
                    <td>- Experiencia de usuario de alta calidad.<br>- Acceso total al hardware.</td>
                    <td>- Desarrollo y mantenimiento costosos para múltiples plataformas.</td>
                    <td>Xcode (iOS) y Android Studio (Android) para desarrollo nativo, utilizando Swift, Objective-C (iOS) o Java, Kotlin (Android).</td>
                </tr>
                <tr>
                    <td>Aplicación Móvil Multiplataforma</td>
                    <td>Una aplicación que se puede desarrollar una vez y ejecutar en múltiples plataformas (iOS, Android, etc.).</td>
                    <td>- Desarrollo más rápido.<br>- Código compartido entre plataformas.<br>- Menos costo.</td>
                    <td>- Menor costo de desarrollo.<br>- Mayor velocidad de lanzamiento.</td>
                    <td>- Posible menor rendimiento y acceso limitado al hardware.</td>
                    <td>Frameworks como React Native, Flutter, Xamarin, y herramientas de desarrollo multiplataforma como Visual Studio Code.</td>
                </tr>
                <tr>
                    <td>Progressive Web App (PWA)</td>
                    <td>Una aplicación web que utiliza tecnologías web modernas y mejores prácticas para ofrecer una experiencia similar a la de una aplicación nativa en dispositivos móviles y de escritorio.</td>
                    <td>- Acceso offline.<br>- Notificaciones push.<br>- Instalación en pantalla de inicio.<br>- Carga rápida.</td>
                    <td>- Menos espacio de almacenamiento.<br>- Actualizaciones automáticas.</td>
                    <td>- Limitaciones en iOS.<br>- Menor acceso al hardware que las nativas.</td>
                    <td>HTML, CSS, JavaScript, y uso de service workers y manifest files para habilitar las características de PWA.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</body>
</html>
