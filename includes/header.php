<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mentalku | Platform Psikologi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white z-50 shadow-sm">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex items-center justify-between h-20">
                <a href="/" class="text-2xl font-bold text-black">mentalku</a>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="#about" class="text-gray-600 hover:text-black transition-colors">Beranda</a>
                    <a href="#about" class="text-gray-600 hover:text-black transition-colors">Tentang Kami</a>
                    <a href="#services" class="text-gray-600 hover:text-black transition-colors">Layanan</a>
                    <a href="#contact" class="text-gray-600 hover:text-black transition-colors">Kontak Kami</a>
                </div>

                <!-- Get Started Button -->
                <div class="hidden md:block">
                    <a href="#contact" class="inline-block px-6 py-3 bg-black text-white rounded-lg hover:bg-gray-800 transition-colors">
                        Get Started
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-600 hover:text-black" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#about" class="block px-3 py-2 text-gray-600 hover:text-black transition-colors">Beranda</a>
                    <a href="#about" class="block px-3 py-2 text-gray-600 hover:text-black transition-colors">Tentang Kami</a>
                    <a href="#services" class="block px-3 py-2 text-gray-600 hover:text-black transition-colors">Layanan</a>
                    <a href="#contact" class="block px-3 py-2 text-gray-600 hover:text-black transition-colors">Kontak Kami</a>
                    <a href="#contact" class="block px-3 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition-colors text-center mt-4">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>
