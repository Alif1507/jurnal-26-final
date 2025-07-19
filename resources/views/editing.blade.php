<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jurnalistik 26</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>

<body class="bg-[#011423]">
    <x-navbar></x-navbar>
   <a href="{{ route("welcome.index") }}" class="fixed hover:bg-white hover:text-[#F09B0E] text-stone-50 transition-all duration-100 hover:scale-110 bg-[#F09B0E] z-50 w-16 h-16 rounded-full flex items-center justify-center top-32 left-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-11">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg>
    </a>
    <div class="mt-24">
        <div class="relative h-96 w-screen">
            <img class="h-full w-full object-cover" src="{{ asset('images/divisi/editing/editing-60.jpg') }}" alt="">
            <div class="absolute left-1/2 top-10 z-40 flex -translate-x-1/2 flex-col items-center">
                <img class="h-auto w-[175px]" src="{{ asset('images/Logo Jurnalistik 2.svg') }}" alt="">
                <h1 class="mt-4 font-mons text-2xl font-bold text-white">Editing</h1>
                <h1 class="font-inter text-lg text-white opacity-55 max-md:text-center">Jurnalistik SMK Negeri 26 Jakarta</h1>
            </div>
            <div class="absolute left-0 top-0 h-96 w-screen bg-black opacity-40"></div>
        </div>

        <div class="mt-24">
            <div class="flex flex-col items-center gap-2">
                <h1 class="font-inter text-4xl font-bold text-white">Divisi <span class="text-[#F09B0E]">Editing</span>
                </h1>
                <div class="h-1 w-[200px] bg-[#F09B0E]">.</div>
            </div>

            <div class="mt-24 flex items-center justify-evenly bg-[#003866] py-6">
                <h1 class="max-w-[797px] font-mons text-lg font-normal text-white max-md:text-center max-md:mx-10">
                    <span class="text-6xl font-bold">D</span>ivisi Editing di ekstrakurikuler Jurnalistik SMKN 26 Jakarta adalah motor penggerak di balik kesempurnaan konten yang disajikan. Para siswa di divisi ini tidak hanya mengedit teks, gambar, dan audio untuk memastikan kejelasan dan keberterimaan, tetapi juga mengambil peran penting dalam menyusun narasi yang kuat dan memukau. Mereka menggunakan kreativitas dan keahlian teknis untuk menghasilkan publikasi yang berkualitas tinggi, mulai dari artikel hingga produksi multimedia yang menarik. Divisi ini memberikan kesempatan bagi siswa untuk mengasah keterampilan editing mereka, mengerti pentingnya detail dalam komunikasi visual dan verbal, serta memberikan kontribusi yang signifikan dalam menampilkan identitas ekskul Jurnalistik SMKN 26 Jakarta secara profesional dan menarik.
                </h1>
                <div class="h-[400px] max-w-[400px]">
                    <img class="h-full w-full rounded-full border-4 border-[#F09B0E] object-cover max-md:hidden"
                        src="{{ asset('images/divisi/editing/wahid-khene-iKdQCIiSMlQ-unsplash-min-scaled-1.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="mt-24">
            <div class="flex flex-col items-center gap-2">
                <h1 class="font-inter text-4xl font-bold text-white">Project <span
                        class="text-[#F09B0E]">Editing</span></h1>
                <div class="h-1 w-[200px] bg-[#F09B0E]">.</div>
            </div>
        </div>


        <div class="flex items-center justify-center mt-24">
            <div class="h-auto w-[500px]">
                <img class="h-full w-full object-cover"
                    src="{{ asset('images/divisi/editing/Kekerasan-1.png') }}" alt="">

            </div>
        </div>
        <x-footer></x-footer>



</body>

</html>
