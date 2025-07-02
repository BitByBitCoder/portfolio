<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hruaia Ralte | Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-50 text-gray-800 font-sans leading-relaxed tracking-wide">

    <!-- Header -->
    <header class="p-6 bg-blue-700 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Hruaia Ralte</h1>
            <nav class="space-x-6 text-blue-100">
                <a href="#projects" class="hover:text-white font-medium">Projects</a>
                <a href="#contact" class="hover:text-white font-medium">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="text-center py-20 bg-blue-600 text-white">
        <h2 class="text-5xl font-extrabold mb-4">Hi, I'm a Full-Stack Developer</h2>
        <p class="text-xl text-blue-100 max-w-xl mx-auto">I build fast, beautiful web and mobile apps using Laravel, Flutter, and more.</p>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 px-6 bg-blue-50">
        <div class="max-w-5xl mx-auto">
            <h3 class="text-4xl font-bold mb-12 text-center text-blue-700">Projects</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Project 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-lg transition">
                    <h4 class="text-2xl font-semibold mb-2 text-blue-800">Portfolio Website</h4>
                    <p class="text-gray-600">My personal portfolio built with Laravel, Tailwind CSS, and Vite.</p>
                </div>

                <!-- Project 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-lg transition">
                    <h4 class="text-2xl font-semibold mb-2 text-blue-800">Task Manager App</h4>
                    <p class="text-gray-600">Flutter-based app to manage daily tasks and productivity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 px-6 bg-blue-100">
        <div class="max-w-3xl mx-auto text-center">
            <h3 class="text-4xl font-bold mb-6 text-blue-700">Contact Me</h3>
            <p class="mb-8 text-blue-800">Want to collaborate? Feel free to email me.</p>
            <a href="mailto:you@example.com" class="bg-blue-700 text-white px-6 py-3 rounded-md font-semibold hover:bg-blue-600 transition">
                Send Email
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 bg-blue-700 text-blue-100">
        &copy; 2025 Hruaia Ralte. All rights reserved.
    </footer>

</body>
</html>
