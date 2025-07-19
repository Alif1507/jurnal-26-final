@props(['image', 'title', 'nomer', 'link', 'aos'])

<div class="block max-md:w-[200px] w-[270px]" data-aos="{{ $aos }}">
  <a class="block w-[270px] h-auto" href="{{ route("$link") }}">
    <img class="hover:-translate-y-8 transition-all duration-300 ease-in-out w-full h-auto" src="{{ asset($image) }}" alt="">
  </a>
  <div class="flex justify-between mt-5">
   <a href="{{ route("$link") }}">
    <h1 class="font-bold font-mons hover:underline text-white text-[30px]">
      {{ $nomer }} <br>
      {{ $title }}
    </h1>
   </a>
    <a href="{{ route("$link") }}">
      <div class="bg-[#F09B0E] h-[40px] w-[40px] rounded-full justify-center items-center text-center flex hover:bg-white transition-all ease-in-out duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8  text-white fill-white hover:text-[#F09B0E] transition-all ease-in-out duration-200">
          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
        </svg>
      </div>
    </a>
  </div>
</div>
