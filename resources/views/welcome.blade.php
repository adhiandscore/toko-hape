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

<body>
    {{-- nav top --}}

    <nav class="bg-white shadow-md fixed w-full z-10">
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


    <div class=" flex items-center justify-center mx-auto p-9 pt-24">
        <article class="text-balance-900">

            <h1 class="p-4 text-3xl font-bold flex flex-col items-center"> Selamat Datang di Toko Hp Super IT! </h1>
            <p> Ini adalah halaman utama aplikasi Admin Toko Smartphone.
                anda dapat mengelola produk, kategori, dan transaksi disini.
                jika memiliki pertanyaan atau masalah, silahkan hubungi tim dukungan kami
            </p>
        </article>

    </div>
    <div class="bg-gray-100 flex items-center justify-center min-h-150">
        <div class="w-full max-w-sm bg-white p-8 rounded-2xl shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login to Your Account</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" class="mr-2" /> Remember me
                    </label>
                    <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition duration-150">
                    Sign In
                </button>
            </form>
            <p class="mt-6 text-sm text-center text-gray-600">
                Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign up</a>
            </p>
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
