<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <title> Selamat Datang! </title>
</head>

<body class="pt-16">
    <nav class="fixed top-0 bg-white shadow-md fixed w-full z-10 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-xl font-bold text-blue-600">BrandName</a>
                </div>

                <!-- Nav Links -->
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">About</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Services</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
                </div>

                <!-- CTA or Profile -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-sm text-blue-600 hover:underline">Login</a>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-sm">Sign
                        Up</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="focus:outline-none">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>


        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden px-4 pt-4 pb-6 bg-white shadow-lg">
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Home</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">About</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Services</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>
            <div class="mt-4 border-t pt-4">
                <a href="#" class="block text-sm text-blue-600 hover:underline mb-2">Login</a>
                <a href="#"
                    class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 text-sm">Sign
                    Up</a>
            </div>
        </div>
    </nav>
    {{-- nav top --}}


    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-xl overflow-hidden max-w-4xl mx-auto my-24">
        <!-- KIRI: Tempat Screenshot -->
        <div class="md:w-1/2 bg-gray-100 flex items-center justify-center p-4">
            <img src="https://via.placeholder.com/400x300?text=Dashboard+Preview" alt="Preview Dashboard"
                class="rounded-lg shadow-md w-full object-contain max-h-80">
        </div>
    </div>
    <!-- KANAN: Komponen Login -->
    <div class="article">
        <h2> Ini adalah aplikasi kami </h2>
        <p>
            asdasdasdas,
            asdasdasdas
            asdasdasd

        </p>
    </div>
    <div class="relative w-full overflow-hidden rounded-xl" id="carousel-wrapper">
        <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
            <!-- Slide 1 -->
            <div class="flex-shrink-0 w-full">
                <img src="https://source.unsplash.com/800x400/?nature,water" class="w-full h-auto object-cover" />
            </div>
            <!-- Slide 2 -->
            <div class="flex-shrink-0 w-full">
                <img src="https://source.unsplash.com/800x400/?city,night" class="w-full h-auto object-cover" />
            </div>
            <!-- Slide 3 -->
            <div class="flex-shrink-0 w-full">
                <img src="https://source.unsplash.com/800x400/?technology" class="w-full h-auto object-cover" />
            </div>
        </div>
        </p>
    </div>

    </div>

    {{-- galery --}}

    <div class="bg-gray-100 p-8">
        <section class="max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Photo Gallery</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Item 1 -->
                <div class="overflow-hidden rounded-xl shadow-md hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/random/400x300?sig=1" alt="Gallery 1"
                        class="w-full h-60 object-cover" />
                </div>
                <!-- Item 2 -->
                <div class="overflow-hidden rounded-xl shadow-md hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/random/400x300?sig=2" alt="Gallery 2"
                        class="w-full h-60 object-cover" />
                </div>
                <!-- Item 3 -->
                <div class="overflow-hidden rounded-xl shadow-md hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/random/400x300?sig=3" alt="Gallery 3"
                        class="w-full h-60 object-cover" />
                </div>
                <!-- Item 4 -->
                <div class="overflow-hidden rounded-xl shadow-md hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/random/400x300?sig=4" alt="Gallery 4"
                        class="w-full h-60 object-cover" />
                </div>
                <!-- Tambah lebih banyak jika perlu -->
            </div>
        </section>
    </div>

    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-xl overflow-hidden max-w-4xl mx-auto my-12">
        <!-- KIRI: Tempat Screenshot -->
        <div class="md:w-1/2 bg-gray-100 flex items-center justify-center p-4">
            <img src="https://via.placeholder.com/400x300?text=Dashboard+Preview" alt="Preview Dashboard"
                class="rounded-lg shadow-md w-full object-contain max-h-80">
        </div>

        <!-- KANAN: Komponen Login -->
        <div class="md:w-1/2 p-8 flex flex-col justify-center items-center">
            <h1 class="text-2xl font-bold text-center mb-4">Masuk ke Dashboard</h1>
            <a href="/login"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 text-sm transition">Masuk</a>
        </div>
    </div>


    <div class=" flex items-center justify-center p-8">
        <div class="flex space-x-4">
            <a href="https://facebook.com" target="_blank" aria-label="Facebook"
                class="p-3 bg-white rounded-full shadow-md hover:bg-blue-100 transition">
                <i data-feather="facebook"></i>
            </a>
            <a href="https://twitter.com" target="_blank" aria-label="Twitter"
                class="p-3 bg-white rounded-full shadow-md hover:bg-blue-100 transition">
                <i data-feather="twitter"></i>
            </a>
            <a href="https://instagram.com" target="_blank" aria-label="Instagram"
                class="p-3 bg-white rounded-full shadow-md hover:bg-pink-100 transition">
                <i data-feather="instagram"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"
                class="p-3 bg-white rounded-full shadow-md hover:bg-blue-100 transition">
                <i data-feather="linkedin"></i>
            </a>
            <a href="mailto:email@example.com" aria-label="Email"
                class="p-3 bg-white rounded-full shadow-md hover:bg-gray-200 transition">
                <i data-feather="mail"></i>
            </a>
        </div>
    </div>


    </div>
    <script>
        feather.replace()
        const button = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
