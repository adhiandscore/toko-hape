<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href=" C:\Users\legion\Desktop\latihan laravel\latihan-toko-hp\resources\css\app.css ">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Super IT</title>

</head>

<body class="pt-16">

    {{-- nav --}}
    <div class="nav-top fixed top-0 bg-white shadow-md w-full z-10">
        <div class="items max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="items1 flex justify-between items-center h-19">
                <div class="logo flex-shrink-0">
                    <a href="#" class="text-xl font-bold text-blue-600"> Toko Kamu </a>
                </div>

                {{-- nav link --}}
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">About</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Services</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
                </div>

                {{-- CTA atau ke profil --}}
                <div class="profile">
                    <a href="#" class="text-sm text-blue-600 px-4 hover:underline"> Login </a>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-sm">
                        Sign Up
                    </a>
                </div>


                {{-- mobile version menu --}}
                <div class="hamburger-menu md:hidden flex items-center">
                    <button id="hamburger menu" class="focus:outline-none">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- hamburer menu --}}
        <div id="mobile-menu" class="mobile-menu md:hidden hidden px-4 pt-4 pb-6 bg-white shadow-lg">
            <a href="#" class="block text-gray-700 py-2 hover:text-blue-600">Home</a>
            <a href="#" class=" block text-gray-700 py-2 hover:text-blue-600">About</a>
            <a href="#" class="block text-gray-700 py-2 hover:text-blue-600">Services</a>
            <a href="#" class="block text-gray-700 py-2 hover:text-blue-600">Contact</a>
            <div class="m-4 pt-4">
                <a href="#" class="text-sm text-blue-600 px-4 hover:underline mb-2"> Login </a>
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-sm">
                    Sign Up
                </a>
            </div>
        </div>
    </div>

    <section>
        <div class="article relative w-full overflow-hidden rounded-xl">
            <div
                class="komponen-kanan-kiri flex flex-col md:flex-row bg-white shadow-lg rounded-xl overflow-hidden max-w-4x1 mx-auto my-12">
                <div class="kanan md:w-1/2 bg-gray-100 p-8 flex flex-col justify-center ">
                    <h1 class="text-2xl font-bold text-left mb-4">
                        ini adalah artikel dan carousel perusahaan
                    </h1>
                    <p class="text-gray-700 mb-4 text-left">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus. Quisquam,
                        voluptatibus. Quisquam, voluptatibus. Quisquam, voluptatibus. Quisquam, voluptatibus.
                        Quisquam, voluptatibus. Quisquam, voluptatibus. Quisquam, voluptatibus.
                    </p>
                </div>
                <div class="kiri md:w-1/2 p-8 flex flex-col justify-center items-center">
                    
                    <div class="gambar-profil flex items-center justify-center">
                        <div class="1">
                            <img src="https://i.pinimg.com/736x/97/ea/95/97ea956d9e0f00dff90790223118e3df.jpg" alt="">
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-xl overflow-hidden max-w-4xl mx-auto my-12">
            <!-- KIRI: Tempat Screenshot -->
            <div class="md:w-1/2 bg-gray-100 flex items-center justify-center p-4">
                <img src="https://i.pinimg.com/736x/73/1b/cd/731bcd655d043e8181d35837c4ed78c0.jpg"
                    class="overflow-hidden rounded-xl shadow-md hover:scale-105" alt="">
            </div>

            <!-- KANAN: Komponen Login -->
            <div class="md:w-1/2 p-8 flex flex-col justify-center items-center">
                <h1 class="text-2xl font-bold text-center mb-4">Masuk ke Dashboard</h1>
                <a href="{{ route('filament.admin.pages.dashboard') }}"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 text-sm transition">Masuk</a>

            </div>
        </div>
    </section>

    <section>
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
    </section>

    <script>
        const button = document.getElementById('hamburger menu');
        const menu = document.getElementById('mobile-menu');
        button.addEventListener('click', () => {
            menu.classList.toggle('hidden')
        })
    </script>
    

</body>

</html>
