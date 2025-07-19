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
   
        @vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="bg-[#011423]">
    <x-navbar></x-navbar>
    <a href="{{ route("welcome.index") }}" class="fixed hover:bg-white hover:text-[#F09B0E] text-stone-50 transition-all duration-100 hover:scale-110 bg-[#F09B0E] z-50 w-16 h-16 rounded-full flex items-center justify-center top-32 left-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-11">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg>
    </a>
    <div class="mt-24">
        <div class="w-screen h-96 relative">
            <img class="object-cover w-full h-full" src="{{ asset('images/divisi/fotografi-60.jpg') }}" alt="">
            <div class="flex flex-col items-center absolute top-10 z-40 left-1/2 -translate-x-1/2">
              <img class="w-[175px] h-auto" src="{{ asset('images/Logo Jurnalistik 2.svg') }}" alt="">
                <h1 class="text-2xl font-mons text-white font-bold mt-4">Photography</h1>
                <h1 class="text-lg font-inter text-white opacity-55 max-md:text-center">Jurnalistik SMK Negeri 26 Jakarta</h1>
              </div>
            <div class="absolute w-screen h-96 top-0 left-0 bg-black opacity-40"></div>
        </div>

        <div class="mt-24">
  <div class="flex flex-col items-center gap-2">
    <h1 class="font-inter font-bold text-4xl text-white">Divisi <span class="text-[#F09B0E]">Photography</span></h1>
    <div class="bg-[#F09B0E] w-[200px] h-1">.</div>
  </div>

  <div class="bg-[#003866] flex justify-evenly items-center py-6 mt-24">
    <h1 class="text-lg max-md:text-center font-mons text-white font-normal max-w-[797px]">
      <span class="font-bold text-6xl">D</span>ivisi Fotografi di ekstrakurikuler Jurnalistik SMKN 26 Jakarta adalah tempat di mana keindahan dan kekuatan gambar bertemu dalam menyampaikan cerita. Para siswa di divisi ini tidak hanya mengabadikan momen-momen berharga di sekolah dan sekitarnya, tetapi juga menginterpretasikan kehidupan sehari-hari melalui lensa kreatif mereka. Mereka tidak hanya fotografer, tetapi juga narator visual yang mengkomunikasikan berbagai cerita, emosi, dan pesan melalui setiap foto yang mereka ambil. Divisi ini memberikan kesempatan bagi siswa untuk mengeksplorasi teknik fotografi, mengembangkan gaya pribadi mereka, dan menyumbangkan kontribusi berharga dalam dokumentasi dan ekspresi seni visual di sekolah.
    </h1>
    <div class="max-w-[400px] h-[400px]">
      <img class="object-cover w-full h-full rounded-full border-4 border-[#F09B0E] max-md:hidden" src="{{ asset("images/divisi/Chris-Gampat-The-Phoblographer-Viltrox-20mm-f2.8-review-product-images-41-30s160-3-scaled.jpg") }}" alt="">
      </div>
  </div>
</div>

<div class="mt-24">
  <div class="flex flex-col items-center gap-2">
    <h1 class="font-inter font-bold text-4xl text-white">Project <span class="text-[#F09B0E]">Photography</span></h1>
    <div class="bg-[#F09B0E] w-[200px] h-1">.</div>
  </div>
  </div>

  <div class="flex justify-center items-center mt-24 ">
    <div class="grid grid-cols-3 gap-x-20 gap-y-32">

        
      <div class="w-[250px] h-[300px] max-md:w-[100px] max-md:h-[180px]">
        <img class="object-cover w-full h-full" src="{{ asset('images/divisi/potograpy/1.jpg') }}" alt="">
        </div>
        <div class="w-[250px] h-[300px] max-md:w-[100px] max-md:h-[180px]">
        <img class="object-cover w-full h-full" src="{{ asset('images/divisi/potograpy/2.JPG') }}" alt="">
        </div>
        <div class="w-[250px] h-[300px] max-md:w-[100px] max-md:h-[180px]">
        <img class="object-cover w-full h-full" src="{{ asset('images/divisi/potograpy/3.webp') }}" alt="">
        </div>
        <div class="w-[250px] h-[300px] max-md:w-[100px] max-md:h-[180px]">
        <img class="object-cover w-full h-full" src="{{ asset('images/divisi/potograpy/4.jpg') }}" alt="">
        </div>
        <div class="w-[250px] h-[300px] max-md:w-[100px] max-md:h-[180px]">
        <img class="object-cover w-full h-full" src="{{ asset('images/divisi/potograpy/5.jpg') }}" alt="">
        </div>
        <div class="w-[250px] h-[300px] max-md:w-[100px] max-md:h-[180px]">
        <img class="object-cover w-full h-full" src="{{ asset('images/divisi/potograpy/6.jpg') }}" alt="">
        </div>
      </div>
    </div>

    <x-footer></x-footer>



</body>

</html>

 

  
</head>

<body class="bg-[#011423]">




</body>

</html>
