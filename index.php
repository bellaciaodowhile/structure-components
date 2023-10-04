<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloobal 8 | Components</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/prism.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
</head>
<body dark>
    <header>
        <nav class="nav_components">
            <div class="nav_components_logo">
                <div class="components_trigger_aside">
                    <i class="material-icons">menu</i>
                </div>
                Logo
            </div>
            <ul class="nav_components_base">
                <li>
                    <a href="#" class="nav_components_item">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="#" class="nav_components_item">
                        Componentes
                    </a>
                </li>
                <li>
                    <a href="#" class="nav_components_item">
                        Información
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Idea, a la hora de crear componentes que se haga un form con HTML, CSS y JS para que coloque los siguientes items:
    
        Nombre del componente:  Breadcumbs
                        html: code
                        css: code
                        js: code
    
    -->

    <aside class="components_aside">
        <!-- <button class="components_btn">
            crear componente
        </button> -->
        <h3 class="components_aside_title">Componentes</h3>
        <a class="components_aside_item">
            Inicio
        </a>
        <a class="components_aside_item">
            Ejemplo
        </a>
    </aside>
    <main class="components_main">
        <div class="components_main_content"></div>
        <div class="components_main_outlined">
            <h3 class="components_h3">En esta página</h3>
            <div class="components_main_outlined_items"></div>
        </div>
    </main>
    <script>
        const BASE_URL = "<?php echo 'localhost/structure-components/'; ?>"
    </script>
    
    <script src="assets/js/app.js"></script>
</body>
</html>