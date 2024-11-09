<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros - Talwing</title>
    <!-- Enlace a Tailwind CSS (usando CDN para este ejemplo) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200 flex items-center justify-center min-h-screen">

    <div class="text-center max-w-md p-6 space-y-6 opacity-0 transition-all duration-1000 delay-300 transform translate-y-6">
        <!-- Título con animación de entrada -->
        <h1 class="text-4xl font-bold text-purple-600 opacity-0 transition-opacity duration-1000 delay-300 transform translate-y-6">
            Acerca de Online Coffee
        </h1>

        <!-- Descripción con efecto de opacidad gradual -->
        <p class="text-lg text-gray-700 leading-relaxed opacity-0 transition-opacity duration-1000 delay-700 transform translate-y-6">
            Entendemos lo que los estudiantes y profesionales necesitan para maximizar su tiempo de estudio: un espacio cómodo, acceso a tecnología y recursos de calidad, y un entorno social en línea que fomente el intercambio de ideas. Es por eso que hemos creado una plataforma única que combina la funcionalidad de una cafetería virtual y una biblioteca digital, todo a tu alcance.
        </p>

        <!-- Botón con efecto hover -->
        <a href="#" class="inline-block mt-6 px-6 py-2 bg-gradient-to-r from-pink-400 to-purple-500 text-white font-semibold rounded-lg transform transition-transform duration-300 hover:scale-110 hover:bg-gray-800">
            Conoce más
        </a>
    </div>

    <!-- Script para manejar las animaciones de aparición al cargar -->
    <script>
        // Añade clases de animación a los elementos para hacer que aparezcan gradualmente al cargar
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll('.opacity-0');
            elements.forEach((el, index) => {
                // Ajustamos el retraso para cada elemento
                setTimeout(() => {
                    el.classList.remove('opacity-0', 'translate-y-6');
                    el.classList.add('opacity-100', 'translate-y-0');
                }, 300 * index);  // Retraso incremental para un efecto secuencial
            });
        });
    </script>
</body>
</html>
