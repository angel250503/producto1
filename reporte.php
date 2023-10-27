<!DOCTYPE html>
<html>
<head>
    <title>Mi Página</title>
</head>
<body>
<?php include_once('header.php'); ?>
    <div id="portada"></div>
    <div id="reporte"></div>
    <div id="tabla"></div>
    <div id="footer"></div> <!-- Contenedor del footer -->
    <script>
        // Variable para controlar si el footer se ha cargado o no
        var footerCargado = false;

        function LoadContent(file, targetElementId) {
            var xhttp = new XMLHttpRequest();
            
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById(targetElementId).innerHTML = this.responseText;

                    
                }
            };
            
            xhttp.open("GET", file, true);
            xhttp.send();
        }

        // Cargar el contenido principal


        LoadContent('reporte2.php', 'reporte');
    </script>
    <?php include_once('footer.php'); ?>
</body>
</html>